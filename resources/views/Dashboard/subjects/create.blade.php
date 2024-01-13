@extends('Layouts.parent')
@section('title', 'Create Subject')

@section('content')
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Add Subject</h6>
        <form method="post" action="" enctype="multipart/form-data" >
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