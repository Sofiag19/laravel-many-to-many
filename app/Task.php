<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['title', 'desc'];

    public function emps()
    {
        return $this->belongsToMany(Employee::class);
    }
}
