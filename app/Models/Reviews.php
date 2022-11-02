<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'header','main_content','shop', 'trailer','score', 'small_img', 'big_img'];
}
