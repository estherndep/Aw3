<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
      // Table Name
      protected $table = 'projects';
      // Primary Key
      public $primaryKey = 'id';


      public function user(){
          return $this->belongsTo('App\User');
      }

      public function images()
    {
        return $this->hasMany('App\ProjectImage');
    }
}
