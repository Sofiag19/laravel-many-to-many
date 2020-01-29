<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;
use App\User;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Employee::class, 15)
                ->make()
                ->each(function ($emp) {
                    $user = User::inRandomOrder()->first();
                    $emp -> user() -> associate($user);
                    $emp -> save();

                    $tasks = Task::inRandomOrder()->take(3)->get();
                    $emp ->tasks()->attach($tasks);
                 });
    }
}
