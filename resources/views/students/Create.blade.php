@extends('students.layout')
@section('content')
<div class="row">
<div class="col-lg-1 margin-tb">
<div class="pull-left">
<h2>Recordig student Information</h2>
<a class="btn btn-primary"
href="{{route('students.index')}}">Back</a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{route('students.store')}}" method="POST">
@csrf
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Student Name:</strong>
<input type="text"name="studname"class="form-control"placeholder="studentname">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Course Name:</strong>
<input type="text"name="course"class="form-control"placeholder="course">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>School Fees:</strong>
<input type="text"  name="fee" class="form-control" placeholder="Fee">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
@endsection