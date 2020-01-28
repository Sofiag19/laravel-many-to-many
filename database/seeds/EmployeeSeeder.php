<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Employee::class, 15)->create()->each(function ($emp) {
            $tasks = Task::inRandomOrder()->take(3)->get();
            $emp ->tasks()->attach($tasks);
        });
    }
}
