<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class, 15)->create()->each(function ($task) {
            $emps = Employee::inRandomOrder()->take(3)->get();
            $task-> emps()->attach($emps);
        });
    }
}
