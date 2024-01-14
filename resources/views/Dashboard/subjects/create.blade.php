@extends('Layouts.parent')
@section('title', 'Create Subject')

@section('content')
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Add Subject</h6>
        <form method="post" action="{{route('dashboard.subjects.store')}}" enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
                <label for="subject_name" class="form-label"  >Subject Name</label>
                <input type="text" name="subjectName" class="form-control" value="{{old('subjectName')}}" id="subject_name">
                
            </div>
            @error('subjectName')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <div class="mb-3">
                <label for="age_from" class="form-label">Age From</label>
                <input type="number" name="ageFrom" value="{{old('ageFrom')}}" class="form-control" id="age_from">
                
            </div>
            @error('ageFrom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            
            <div class="mb-3">
                <label for="age_to" class="form-label">Age To</label>
                <input type="number" name="ageTo" value="{{old('ageTo')}}" class="form-control" id="age_to">
                
            </div>
            @error('ageTo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <div class="mb-3">
                <label for="timeFrom" class="form-label">time From</label>
                <input type="time" class="form-control bg-dark" value="{{old('timeFrom')}}" name="timeFrom"  id="timeFrom">
            </div>
            @error('timeFrom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <div class="mb-3">
                <label for="timeTo" class="form-label">time To</label>
                <input type="time" class="form-control bg-dark" value="{{old('timeTo')}}" name="timeTo"  id="timeTo">
            </div>
            @error('timeTo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <div class="mb-3">
                <label for="capacity" class="form-label">capacity</label>
                <input type="number" name="capacity" value="{{old('capacity')}}" class="form-control" id="capacity">
                
            </div>
            @error('capacity')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" name="price" value="{{old('price')}}" class="form-control" id="price">
                
            </div>
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <div class="form-group">
            <label for="category">Select Teacher</label>
               <select name="teacher_id" id="teacher_id" >
                  <option readonly value="">select</option>
                  @foreach($teachers as $teacher)
                  <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                    @endforeach
              </select>
                  @error('teacher_id')
                   <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                </div>
            
        
      
            
            <button type="submit"  class="btn btn-primary"> Add </button>
        </form>
    </div>
</div>
@endsection