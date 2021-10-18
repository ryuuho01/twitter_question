<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use HasFactory;
    protected $table = 'posts';
    protected $guarded = array('id');
    public static $rules = array(
        'client_id' => 'required',
        'post' => 'required',
    );

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
    public function getData()
    {
        return 'ID'.$this->id . ':' . $this->post . ' 投稿者:' . optional($this->client)->name;
    }
}
