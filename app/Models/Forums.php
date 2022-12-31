<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forums extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id','header','description'];
    protected $table = 'forums';

    public function reply() {
        return $this->hasMany(Reply::class, 'forum_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
