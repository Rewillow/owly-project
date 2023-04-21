<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{

    protected $casts = [
        'subject' => 'array',
    ];

    // protected $fillable = ['title', 'subject', 'spots'];

    use HasFactory;

    public function scopeFilter($query, array $filters){

    if($filters['search'] ?? false ) {
        $query->where('title', 'like', '%' . request('search') . '%')
        ->orWhere('subject', 'like', '%' . request('search') . '%')
        ->orWhere('spots', 'like', '%' . request('search') . '%');
     }
    }
}
