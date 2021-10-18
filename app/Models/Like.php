<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    // use HasFactory;
    protected $table = 'likes';
    protected $guarded = array('id');
    public static $rules = array(
        'client_id' => 'required',
        'post_id' => 'required',
        'like' => 'required',
    );
    public function getLike(){
        return $this->like;
    }


    // public function womens(){
    //     $all = Like::all()->count();
    //     $womens_num = Like::where('gender', 1)->count();
    //     $womens_percent = round($womens_num / $all * 100);
    //     return $womens_percent;
    // }
}
