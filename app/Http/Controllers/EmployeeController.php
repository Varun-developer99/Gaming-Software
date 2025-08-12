<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;    
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class EmployeeController extends Controller
{
    public function index()
    {
        return view('admin.employee.index');
    }
    public function datatable(Request $request)
    {
        $numbers = 50;
        if($request->value){
            $numbers = $request->value;
        }
        $users = User::where('deleted_at', null);
        if($request->search){
            $allColumnNames = Schema::getColumnListing((new User)->getTable());
            $columnNames = array_filter($allColumnNames, fn($columnName) => !in_array($columnName, ['created_at', 'updated_at', 'id']));
            $users = $users->where(function ($query) use($columnNames, $request) {
                foreach ($columnNames as $index => $column) {
                    $method = $index === 0 ? 'where' : 'orWhere';
                    $query->$method($column, 'LIKE', "%{$request->search}%");
                }
            });
        }

        $users = $users->orderBy('id','desc')->paginate($numbers);
        return view('admin.employee.datatable', compact('users'));
    }

    public function edit_modal(Request $request)
    {
        $user = User::find($request->id);
        return view('admin.employee.modal', compact('user'));
    }

    public function store(Request $request){
        // Validation rules
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
            'logo' => 'nullable|image|mimes:webp,jpeg,png,jpg,gif|max:2048',
            'background_colour' => 'nullable|string|max:7',
            'domain' => 'nullable|url|max:255',
            'points' => 'nullable|integer|min:0',
        ]);

        // Check for duplicate email
        $emailCheck = User::where('email', $request->email);
        if($request->user_id) {
            $emailCheck->where('id', '!=', $request->user_id);
        }
        if($emailCheck->exists()) {
            return response()->json(['result' => 0, 'message' => 'Email already exists']);
        }

        // Prepare input data
        $input = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'show_password' => $request->password,
            'background_colour' => $request->background_colour,
            'domain' => $request->domain,
            'points' => $request->points ?? 0,
            'status' => 1,
            'created_by_id' => auth()->user()->id,
        ];

        // Handle logo upload
        if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $logoName = time().'_logo.'.$logo->getClientOriginalExtension();
            $logo->move(public_path('uploads/logos'), $logoName);
            $input['logo'] = 'uploads/logos/'.$logoName;
        }

        

        // Create or update user
        $user = User::updateOrCreate(
            ['id' => $request->user_id ?? 0], 
            $input
        );
        
        $message = $request->user_id ? 'User updated successfully' : 'User created successfully';
        return response()->json(['result' => 1, 'message' => $message]);
    }
 
    public function delete(Request $request){
        
        $user = User::find($request->id);
        $user->delete();
        return response()->json(['result' => 1, 'message' => 'User deleted successfully']);
    }
    public function change_status(Request $request){
        $user = User::find($request->id);
        $user->status = $request->status == 1 ? 1 : 0;
        $user->save();
        return response()->json(['result' => 1, 'message' => 'User status changed successfully']);
    }
    public function sub_user_index($id, Request $request){
        $user = User::find($id);
        $category = json_decode($user->category_id ?? '[]', true);
        $categories = Category::whereIn('id', $category)->where('status', 1)->orderBy('name', 'asc')->get();
        return view('admin.employee.sub_user_index', compact('user', 'categories'));
    }
    public function sub_user_datatable(Request $request,$id){
        $query = User::where('sub_admin_id',$id);
        if($request->search){
            $query->where(function($q)use($request){
                $q->where('name', 'like', '%'.$request->search.'%')
                ->orWhere('email', 'like', '%'.$request->search.'%');
            });
        }
        $users = $query->latest()->paginate($request->value);
        return view('admin.employee.sub_user_datatable', compact('users'));
    }
}
