<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // Table Name
    protected $table = 'services';
    // Primary Key
    public $primaryKey = 'id';


    public function category(){
        return $this->belongsTo('App\Category', 'category');
    }
}