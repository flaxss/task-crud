@extends('layouts.app')
@section('title')
    Update Task
@endsection('title')
@section('content')
    <div class="container form bg-light col-md-4 pt-2">
        <div id="liveAlertPlaceholder"></div>

        @if($errors -> any)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif
        <form action="{{ route('update.task', $task->id )}}" method="POST">
            @csrf
            <div>
                <label class="form-label" for="task">Task</label>
                <input class="form-control" type="text" id="task" name="task" value="{{$task->task}}">
            </div>
            <div>
                <label class="form-label" for="description">Description</label>
                <input class="form-control" type="text" id="description" name="description" value="{{$task->description}}">
            </div>
            <div>
                <label class="form-label" for="difficulty">Difficulty</label>
                <select class="form-control" name="difficulty" id="difficulty">
                    <option value="" disabled selected>Please Select</option>
                    @foreach ($diff as $diffs)
                        <option value="{{$diffs}}" {{ (isset($task->difficulty) && $task->difficulty == $diffs)  ? 'selected' : '' }}>{{$diffs}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="form-label" for="priority">Priority</label>
                {{-- <input class="form-control" type="text" id="priority" name="priority"> --}}
                <select class="form-control" name="priority" id="priority">
                    <option value="" disabled selected>Please Select</option>
                    @foreach ($prio as $prios)
                        <option value="{{$prios}}" {{ (isset($task->priority) && $task->priority == $prios)  ? 'selected' : '' }}>{{$prios}}</option>
                    @endforeach
                </select>
            </div>
            <button class="mt-2 btn btn-dark">Update Task</button>
        </form>
    </div>