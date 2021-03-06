<?php

namespace App\Models\Lists;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListToApp extends Model
{
    use HasFactory;
    protected $fillable = ['watch_lists_id', 'apps_id', 'active'];
}
