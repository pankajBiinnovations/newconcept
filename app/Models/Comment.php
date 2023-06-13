<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['blog_id', 'content'];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

}
