

@extends('layouts.app')

@section('content')

<div class="card p-5">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <form action="{{route('save-update')}}" method="POST" class="pt-10">
      @csrf

      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="e_title" value="{{$task->title}}">
      </div>

      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="e_description" value="{{$task->description}}">
      </div>

      <input type="hidden" name="id" value="{{$task->id}}">
      
      <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
      <button type="submit" class="btn btn-success">Update Task</button>
    </form>
  </div>
</div>
</div>
@endsection