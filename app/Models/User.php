<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'created_by_id',
        'name',
        'phone',
        'email',
        'password',
        'show_password',
        'role_as',
        'logo',
        'background_colour',
        'domain',
        'points',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Helper methods for getting names
    public function getDepartmentNamesAttribute()
    {
        if ($this->department_id) {
            $departmentIds = json_decode($this->department_id, true);
            if (is_array($departmentIds)) {
                return \App\Models\Department::whereIn('id', $departmentIds)->pluck('name')->implode(', ');
            }
        }
        return 'N/A';
    }

    public function getCategoryNamesAttribute()
    {
        if ($this->category_id) {
            $categoryIds = json_decode($this->category_id, true);
            if (is_array($categoryIds)) {
                return \App\Models\Category::whereIn('id', $categoryIds)->pluck('name')->implode(', ');
            }
        }
        return 'N/A';
    }
}
