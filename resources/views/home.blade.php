@extends('layouts.app')

@section('content')
<div class="main-card mb-3 card mt-4">
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
                                <tr>
                                    <td></td>
                                    <td>Example, Although this should be long too. </td>
                                    <td>This needs to be longer, it's a description afterall. So maybe a paragraph or more! This needs to be longer, it's a description afterall. So maybe a paragraph or more! This needs to be longer, it's a description afterall. So maybe a paragraph or more! This needs to be longer, it's a description afterall. So maybe a paragraph or more! This needs to be longer, it's a description afterall. So maybe a paragraph or more! This needs to be longer, it's a description afterall. So maybe a paragraph or more!</td>
                                    <td>Not Started</td>
                                    <td>Sarah Helms</td>
                                    <td>Edit | Delete</td>
                                </tr>
                
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
                        <form method="POST" action="{{ route('task-create') }}">
                            
                            @csrf
                           
                            <div class="position-relative form-group">
                                <label for="name" class="">Task Name</label>
                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input name="name" id="name" placeholder="" type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required autofocus>
                            </div>
                           
                            <div class="position-relative form-group">
                                <label for="description" class="">Description</label>
                                 @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                            </div>
                           
                            
                            
                              <div class="position-relative form-group">
                                <label for="status" class="">Status</label>
                                 @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                    <option selected>Not Started</option>
                                    <option>In Progress</option>
                                    <option>Completed</option>
                                </select>
                                  
                            </div>
              
                            <div class="position-relative form-group">
                                <label for="assigned" class="">Assigned To</label>
                                 @error('assigned')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <select name="assigned" id="assigned" class="form-control @error('assigned') is-invalid @enderror">
                                    <option selected></option>
                                    <option>Sarah Helms</option>
                                </select>
                                  
                            </div>
  
                          
                             <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
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
</div>
@endsection
