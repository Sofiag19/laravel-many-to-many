<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_task', function (Blueprint $table) {
            $table->bigInteger('employee_id')->unsigned()->index();
            $table->foreign('employee_id', 'emp_task_emp')->references('id')->on('employees');

            $table->bigInteger('task_id')->unsigned()->index();
            $table->foreign('task_id', 'task_emp_task')->references('id')->on('tasks');
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id', 'emp_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_task', function (Blueprint $table) {
            $table->dropForeign('emp_task_emp');
            $table->dropForeign('task_emp_task');

            $table->dropColumn('employee_id');
            $table->dropColumn('task_id');
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign('emp_user_id');
            $table->dropColumn('user_id');
        });
    }
}
