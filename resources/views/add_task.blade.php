@extends('layouts.app')
@section('title')
    Tasks
@endsection('title')
@section('content')
    <div class="container form bg-light col-md-4 pt-2">
        <div id="liveAlertPlaceholder"></div>
        {{-- @if($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
        @endif --}}

        @if($errors -> any)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif
        <form action="{{ route('add.task') }}" method="POST">
            @csrf
            <div>
                <label class="form-label" for="task">Task</label>
                <input class="form-control" type="text" id="task" name="task">
            </div>
            <div>
                <label class="form-label" for="description">Description</label>
                <input class="form-control" type="text" id="description" name="description">
            </div>
            <div>
                <label class="form-label" for="difficulty">Difficulty</label>
                <select class="form-control" name="difficulty" id="difficulty">
                    <option value="" disabled selected>Please Select</option>
                    @foreach ($diff as $diffs)
                        <option value="{{$diffs}}">{{$diffs}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="form-label" for="priority">Priority</label>
                <select class="form-control" name="priority" id="priority">
                    <option value="" disabled selected>Please Select</option>
                    @foreach ($prio as $prios)
                        <option value="{{$prios}}">{{$prios}}</option>
                    @endforeach
                </select>
            </div>
            <button class="mt-2 btn btn-dark">Add Task</button>
        </form>
    </div>
    <div class="mt-2 container bg-light col-md-4" style="height: 400px; overflow: hidden; overflow-y: scroll;">
        <table class="table" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task</th>
                    <th>Description</th>
                    <th>Difficulty</th>
                    <th>Priority</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($tasks) > 0)
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>
                            <td>{{$task->description}}</td>
                            <td>{{$task->difficulty}}</td>
                            <td>{{$task->priority}}</td>
                            <td class="d-flex">
                                <a class="btn btn-primary p-1" href="{{route('update.task', $task->id)}}">Edit</a>
                                <form action="{{route('delete.task', $task->id)}}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger p-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        @if (count($tasks) <= 0)
            <p class="text-center">No task Available</p>
        @endif
    </div>
    <script>
        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
        let alert = '{{$message = Session::get('success')}}'
        console.log(alert);
        const appendAlert = (message, type) => {
        const wrapper = document.createElement('div')
        wrapper.innerHTML = [
            `<div class="alert alert-${type} alert-dismissible" role="alert">`,
            `   <div>${message}</div>`,
            '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
            '</div>'
        ].join('')

        alertPlaceholder.append(wrapper)
        }

        if(alert){
            appendAlert(alert, 'success')
        }
    </script>
@endsection('content')