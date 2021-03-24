<?php

namespace App\Models;

use App\Models\User;
use App\Models\Forum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ForumComment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class)->select(['id', 'username']);
    }

    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }
}
