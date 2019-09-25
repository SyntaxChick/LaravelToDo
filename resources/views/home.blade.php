@extends('layouts.app') 

@section('content')

<div class="main-card mb-3 card mt-4">
    <div class="card-header">
        <div class="col-md-8">
            @guest
            @else
            <a href="{{ route('task-create') }}" class="btn-shadow btn btn-wide btn-success">
                <span class="btn-icon-wrapper pr-1 opacity-7">
                    <i class="fa fa-plus"> </i> Add Task
                </span>
            </a>
            @endguest
        </div>
        <div class="col-md-4">
            <div role="group" class="mb-2 btn-group btn-group-toggle">
                <a href="{{ route('home') }}" class="btn btn-shadow btn-info">All</a>
                <a href="{{ route('task-filtered', [0]) }}" class="btn btn-shadow btn-danger">Not Started</a>
                <a href="{{ route('task-filtered', [3]) }}" class="btn btn-shadow btn-warning">In Progress</a>
                <a href="{{ route('task-filtered', [10]) }}" class="btn btn-shadow btn-success">Completed</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Assigned To</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td><a href="{{ route('task-complete', [$task->id]) }}" class="mb-2 mr-2 btn-icon btn-icon-only btn-pill btn @if($task->status == 10) btn-success @else btn-outline-success @endif"><i class="fa fa-check btn-icon-wrapper"> </i></a></td>
                    <td>{{ $task->name }} </td>
                    <td>{{ $task->description }}</td>
                    <td>
                        @if($task->status == 0) Not Started @elseif($task->status == 3) In Progress @else Completed @endif
                    </td>
                    <td>{{ $task->assignedTo->name }}</td>
                    <td><a href="{{ route('task-edit', [$task->id]) }}" class="mb-2 mr-2 btn-icon btn-icon-only btn-pill btn btn-outline-warning"><i class="pe-7s-edit btn-icon-wrapper"> </i></a><a href="{{ route('task-delete', [$task->id]) }}" onclick=" return confirm('Are you sure you want to delete this task?');" class="mb-2 mr-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Assigned To</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@guest @else
<div class="ui-theme-settings">
    <button type="button" id="TooltipDemo" class="btn-open-options btn btn-outline-2x btn-outline-focus">
            <i class="fa fa-plus fa-2x"></i>
        </button>
    <div class="theme-settings__inner">
        <div class="scrollbar-container">
            <div class="theme-settings__options-wrapper">
                <h3 class="themeoptions-heading">Create Task
                </h3>
                <div class="p-3">
                    <form method="POST" action="{{ route('task-store') }}">

                        @csrf

                        <div class="position-relative form-group">
                            <label for="name" class="">Task Name</label>

                            <input name="name" id="name" placeholder="" type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required autofocus> @error('name')
                            <small class="form-text text-muted">{{ $message }}</small> @enderror
                        </div>

                        <div class="position-relative form-group">
                            <label for="description" class="">Description</label>

                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea> @error('description')
                            <small class="form-text text-muted">{{ $message }}</small> @enderror
                        </div>



                        <div class="position-relative form-group">
                            <label for="status" class="">Status</label>

                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="0" selected>Not Started</option>
                                    <option value="3">In Progress</option>
                                    <option value="10">Completed</option>
                                </select> @error('status')
                            <small class="form-text text-muted">{{ $message }}</small> @enderror
                        </div>

                        <div class="position-relative form-group">
                            <label for="assigned" class="">Assigned To</label>

                            <select name="assigned" id="assigned" class="form-control @error('assigned') is-invalid @enderror">
                                    <option disabled selected></option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select> @error('assigned')
                            <small class="form-text text-muted">{{ $message }}</small> @enderror

                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>
</div>
@endguest @endsection