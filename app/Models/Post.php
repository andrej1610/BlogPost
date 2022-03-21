<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Post extends Model
{
    use HasFactory;

    // protected $table = 'posts';

    // public $primarykey = 'id';

    // public $timestamp = false;
    public function user(){
        return $this->belongsTo('App\User');
    }
}
