@extends('Layouts.parent')
@section('title', 'Subjects')

@section('content')
<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Subjects</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                    
                        <th scope="col">Subject Name</th>
                        <th scope="col">Teacher Title</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Twitter</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($subjects as $subject)
                        
                        <td>{{$subject->subjectName}}</td>
                        <td>{{$subject->ageFrom}}</td>
                        <td>{{$subject->ageTo}}</td>
                        <td>{{$subject->timeFrom}}</td>
                        <td>{{$subject->timeTo}}</td>
                        <td>{{$subject->price}}</td>
                        <td>{{$subject->capacity}}</td>
                        <td>{{$subject->teacher_id}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="teachers/show/{{$teacher->id}}" class="btn btn-outline-info m-1">Show</a>
                                <a href="teachers/edit/{{$teacher->id}}" class="btn btn-outline-success m-1">Edit</a>
                                <form action="{{ route('dashboard.teachers.delete') }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $teacher->id }}">
                                    <input type="submit"  class="btn btn-outline-danger m-1" value="delete">
                                    </form>
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