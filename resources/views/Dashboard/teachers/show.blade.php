@extends('Layouts.parent')
@section('title', 'Teacher Details')

@section('content')

<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Teacher Informations</h6>
        <dl class="row mb-0">
            <dt class="col-sm-4">Teacher Name:</dt>
            <dd class="col-sm-8">{{$teacher->name}}</dd>

            <dt class="col-sm-4">Teacher Title:</dt>
            <dd class="col-sm-8">{{$teacher->title}}</dd>

            <dt class="col-sm-4">Facebook:</dt>
            <dd class="col-sm-8">{{$teacher->facebook}}</dd>

            <dt class="col-sm-4 text-truncate">Twitter:</dt>
            <dd class="col-sm-8">{{$teacher->twitter}}</dd>

            <dt class="col-sm-4 text-truncate">Instagram:</dt>
            <dd class="col-sm-8">{{$teacher->instagram}}</dd>

          
        </dl>

        <div>
            <img class="img-fluid rounded-circle mx-auto mb-4" src="{{asset('assets/dashboard/img/'.$teacher->image)}}" style="width: 100px; height: 100px;">
        </div>
    </div>
</div>




@endsection