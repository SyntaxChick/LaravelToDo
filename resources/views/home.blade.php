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
                </div>
@endsection
