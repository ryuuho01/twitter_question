<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // use HasFactory;
    protected $table = 'comments';
    protected $guarded = array('id');
    public static $rules = array(
        'client_id' => 'required',
        'post_id' => 'required',
        'comment' => 'required',
    );
    public function getComment(){
        return $this->comment;
    }
}
