<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [];
    use SoftDeletes;

    public function saveToDo($data){
        return $this->create($data);
    }

    public function getToDos($id){
        return $this->where('user_id', $id)->get();
    }

    public function deleteTodo($id){
        $deleteTask = $this->find($id);
        $deleteTask->delete();
    }

    public function getToDo($id){
        return $this->find($id);   
    }

    public function updateToDo($data, $id){
        $find = $this->find($id);
        $find->update($data);   
    }

}
