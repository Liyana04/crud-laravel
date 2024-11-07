<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //table name
    protected $table='posts';
    //primary key
    public $primmaryKey ='id';
    //timestamps
    public $timestamps= true;
    //relationship between table
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
