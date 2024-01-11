@extends('Layouts.parent')
@section('title', 'Create Teachers')

@section('content')
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Add Teacher</h6>
        <form method="post" action="{{route('teachers.store')}}" enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
                <label for="teacher_name" class="form-label"  >Teacher Name</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}" id="teacher_name">
                
            </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <div class="mb-3">
                <label for="teacher_title" class="form-label">Teacher Title</label>
                <input type="text" name="title" value="{{old('title')}}" class="form-control" id="teacher_title">
                
            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control bg-dark" value="{{old('image')}}" name="image" type="file" id="formFile">
            </div>
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text" name="facebook" value="{{old('facebook')}}" class="form-control" id="facebook">
                
            </div>
            @error('facebook')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            

            <div class="mb-3">
                <label for="twitter" class="form-label">Twitter</label>
                <input type="text" name="twitter" value="{{old('twitter')}}" class="form-control" id="twitter">
                
            </div>
            @error('twitter')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            

            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" name="instagram" value="{{old('instagram')}}" class="form-control" id="instagram">
                
            </div>
            @error('instagram')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            
            <button type="submit"  class="btn btn-primary"> Add </button>
        </form>
    </div>
</div>
@endsection