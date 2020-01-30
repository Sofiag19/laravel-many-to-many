<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infouser extends Model
{
    protected $fillable = ['image'];

    public function user(){
        return $this-> belongsTo(User::class);
    }
}
