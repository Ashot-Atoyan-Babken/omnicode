<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comments extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=false;
    public function comments()
    {
        return $this->hasMany(Comments::class, 'comment_id', 'id');
    }
}
