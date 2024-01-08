@extends('Layouts.parent')
@section('title', 'Create Teachers')

@section('content')
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Add Teacher</h6>
        <form>
            <div class="mb-3">
                <label for="teacher_name" class="form-label">Teacher Name</label>
                <input type="text" name="name" class="form-control" id="teacher_name">
                
            </div>
            <div class="mb-3">
                <label for="teacher_title" class="form-label">Teacher Title</label>
                <input type="text" name="title" class="form-control" id="teacher_title">
                
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control bg-dark" name="image" type="file" id="formFile">
            </div>

            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text" name="facebook" class="form-control" id="facebook">
                
            </div>

            <div class="mb-3">
                <label for="twitter" class="form-label">Twitter</label>
                <input type="text" name="twitter" class="form-control" id="twitter">
                
            </div>
            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" name="instagram" class="form-control" id="instagram">
                
            </div>
            
            <button type="submit"  class="btn btn-primary"> Add </button>
        </form>
    </div>
</div>
@endsection