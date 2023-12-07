@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                                + Add Task
                            </button>

            <table class="table table-borderless align-middle text-center mt-3">
                    <thead>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $task)
                            <tr>
                                <td></td>
                                <td>{{$task->title}}</td>
                                <td>{{$task->description}}</td>
                                <td>
                                    <a href="{{route('update', $task->id)}}" class="btn btn-secondary">Edit</a>
                                    <a href="{{route('delete', $task->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>   
                        @endforeach
                    </tbody>
                </table>

        </div>
    </div>
</div>
@endsection
