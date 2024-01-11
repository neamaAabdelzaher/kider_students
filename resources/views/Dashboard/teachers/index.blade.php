@extends('Layouts.parent')
@section('title', 'Teachers')

@section('content')
<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"> Teachers</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                    
                        <th scope="col">Teacher Name</th>
                        <th scope="col">Teacher Title</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Twitter</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($teachers as $teacher)
                        
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->title}}</td>
                        <td>{{$teacher->facebook}}</td>
                        <td>{{$teacher->twitter}}</td>
                        <td>{{$teacher->instagram}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="show/{{$teacher->id}}" class="btn btn-outline-info m-1">Show</a>
                                <a  class="btn btn-outline-success m-1">Edit</a>
                                <a class="btn btn-outline-primary m-1">Delete</a>
                            </div>
                        </td>
                        
                       
                    </tr>
                    @endforeach
                 
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection