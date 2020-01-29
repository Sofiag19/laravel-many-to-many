<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable= ['name', 'lastname'];

    public function tasks(){
        return $this-> belongsToMany(Task::class);
    }

    public function user(){
        return $this -> belongsTo(User::class);
    }
}
