<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Auth;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->task = new Task;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        $data = $this->task->getTodos(Auth::id());
        return view('home', compact('data'));
    }

    public function store(Request $request)
    {

        $data = [
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'status' => 1
        ];

        $this->task->saveToDo($data);

        return back();
    }

    public function delete($id)
    {
        $this->task->deleteToDo($id);
        return back();
    }

    public function update($id)
    {
        $task = $this->task->getToDo($id);
        return view('edit', compact('task'));
    }

    public function saveUpdate(Request $request)
    {
       $update = [
            'title' => $request->e_title,
            'description' => $request->e_description
       ];

       $this->task->updateToDo($update, $request->id);
       return redirect('home');
    }

}
