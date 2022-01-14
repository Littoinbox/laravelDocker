<?php

namespace App\Models\Lists;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchLists extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'list', 'users_id', 'active'];
}
