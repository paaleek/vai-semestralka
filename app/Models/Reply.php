<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $fillable = ['forum_id', 'user_id', 'answer', 'created_at', 'updated_at'];
    protected $table = 'reply';

    public function forum() {
        return $this->belongsTo(Forums::class, 'forum_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
