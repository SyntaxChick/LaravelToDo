@extends('layouts.app')

@section('content')
 <form method="POST" action="{{ route('task-store') }}">
                            
    @csrf

    <div class="position-relative form-group">
        <label for="name" class="">Task Name</label>

        <input name="name" id="name" placeholder="" type="text" value="{{ $task->name }}" class="form-control @error('name') is-invalid @enderror" required autofocus>
        @error('name')
            <small class="form-text text-muted">{{ $message }}</small>
        @enderror
    </div>

    <div class="position-relative form-group">
        <label for="description" class="">Description</label>

        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{ $task->description }}</textarea>
        @error('description')
            <small class="form-text text-muted">{{ $message }}</small>
        @enderror
    </div>



      <div class="position-relative form-group">
        <label for="status" class="">Status</label>

        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
            <option value="0" @if($task->status == 0) selected @endif>Not Started</option>
            <option value="3" @if($task->status == 3) selected @endif>In Progress</option>
            <option value="10" @if($task->status == 10) selected @endif>Completed</option>
        </select>
          @error('status')
            <small class="form-text text-muted">{{ $message }}</small>
        @enderror
    </div>

    <div class="position-relative form-group">
        <label for="assigned" class="">Assigned To</label>

        <select name="assigned" id="assigned" class="form-control @error('assigned') is-invalid @enderror">
            <option selected></option>
            
            <option value="1">Sarah Helms</option>
        </select>
        @error('assigned')
            <small class="form-text text-muted">{{ $message }}</small>
        @enderror

    </div>


     <div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </div>
</div>
</form>
@endsection