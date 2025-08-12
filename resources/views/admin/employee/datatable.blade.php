
<div class="dt-ext table-responsive">
    <table class="display table-striped table-hover" id="basic-test">
        <thead>
            <tr>
                <th class="all">#</th>
                <th class="all">Logo</th>
                <th class="all">Name</th>
                <th class="all">Email</th>
                <th class="all">Domain</th>
                <th class="all">Points</th>
               
                <th class="all">Role</th>
                <th class="all">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $item)
            <tr>
                <td>{{ $users->firstItem() + $key }}</td>
                <td>
                    @if($item->logo)
                        <img src="{{ asset($item->logo) }}" alt="Logo" style="width: 40px; height: 40px; object-fit: cover; border-radius: 5px;">
                    @else
                        <span class="badge bg-secondary">No Logo</span>
                    @endif
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <div style="width: 20px; height: 20px; background-color: {{ $item->background_colour ?? '#f8f9fa' }}; border-radius: 3px; margin-right: 8px; border: 1px solid #dee2e6;"></div>
                        {{ $item->name ?? 'N/A' }}
                    </div>
                </td>
                <td>{{ $item->email ?? 'N/A' }}</td>
                <td>
                    @if($item->domain)
                        <a href="{{ $item->domain }}" target="_blank" class="text-primary">{{ Str::limit($item->domain, 30) }}</a>
                    @else
                        <span class="text-muted">N/A</span>
                    @endif
                </td>
                <td>
                    <span class="badge bg-info">{{ $item->points ?? 0 }} pts</span>
                </td>
                @if(auth()->user()->role_as == 'Admin')
                <td>{{ $item->getDepartmentNamesAttribute() ?? 'N/A' }}</td>
                @endif
                <td>{{ $item->getCategoryNamesAttribute() ?? 'N/A' }}</td>
                <td>
                    {{$item->role_as ?? ''}}
                </td>
                <td>
                    <a onclick="edit_modal({{$item->id}},{{$key+1}})" class="btn btn-warning btn-sm pointer p-1" data-bs-toggle="modal" data-bs-target="#edit_modal" data-toggle="tooltip" title="Edit">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a onclick="delete_user({{$item->id}})" class="btn btn-danger btn-sm  pointer p-1 " data-toggle="tooltip" title="Delete">
                        <i class="fa fa-trash-o"></i>
                    </a>
                    
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
<div class="mt-2">
    {{$users->onEachSide(1)->links()}}
</div>