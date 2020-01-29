<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Task;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps = Employee::all();
        //dd($emps);
        return view('pages.empList', compact('emps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNewEmp()
    {
        $tasks = Task::all();
        return view('pages.empStore', compact('tasks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeNewEmp(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $newEmp = Employee::create($data);

        if (isset($data['tasks'])) {
            $tasks = Task::find($data['tasks']);
            $newEmp->tasks()->sync($tasks);
        } else {
            $tasks = [];
            $newEmp->tasks()->sync($tasks);
        }
        //$tasks = Task::find($data['tasks']);
        //dd($tasks);
        //$newEmp->tasks()->attach($tasks);
        //dd($newEmp);

        return redirect() -> route('emp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showEmp($id)
    {
        $emp = Employee::findOrFail($id);
        return view('pages.empShow', compact('emp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editEmp($id)
    {
        $emp = Employee::findOrFail($id);
        $tasks = Task::all();
        return view('pages.empEdit' , compact('emp', 'tasks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateEmp(Request $request, $id)
    {
        $data = $request->all();
        
        $upEmp= Employee::findOrFail($id);
        $upEmp -> update($data);

        if(isset($data['tasks'])) {
            $tasks = Task::find($data['tasks']);
            $upEmp -> tasks() -> sync($tasks);
        } else {
            $tasks = [];
            $upEmp->tasks()->sync($tasks);
        }

        return redirect()-> route('emp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyEmp($id)
    {
        $emp = Employee::findOrFail($id);
        $emp -> tasks() -> sync([]);
        $emp -> delete();
        return redirect() -> route('emp.index');
    }

    public function destroyBond($ide , $idt)
    {
        $emp = Employee::findOrFail($ide);
        $task = Task::findOrFail($idt);

        $emp -> tasks() -> detach($task);
        return redirect()-> route('emp.index');
    }
}
