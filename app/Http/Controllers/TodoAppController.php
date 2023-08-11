<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoAppController extends Controller
{
    public function index()
    {
        $datas = Todo::all();

        return view('tasks.index', [
            'datas' => $datas,
        ]);
    }

    public function createTodo()
    {
        $data = Todo::create([
            'todo' => request('todo'),
        ]);
        return redirect('/');
    }


    public function update($id)
    {
        $task = Todo::where('id', $id)->first();

        $task->complete = 1;
        $task->save();
        return redirect('/');
    }

    public function edit($id)
    {
        return "You Can Edit";


    }




}