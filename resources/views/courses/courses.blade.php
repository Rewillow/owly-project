@extends('layout')

@section('content')
    
<div class="courses--container">
<h1 class="courses--title">{{$heading}}</h1>
@include('partials._search')
@include('partials._addCourse')
<div class="links--top--container--courses">
<div class="links--top--courses">
    {{$courses->links()}}
</div>
</div>
<div class="courses--list">
@unless(count($courses) == 0)

@foreach($courses as $course)
<x-course-card :course="$course" />
@endforeach

@else
<p>No courses found</p>

@endunless
</div>
<div class="paginate--controller">
    <div class="paginate--container">
    {{$courses->links()}}
</div>
</div>
</div>



@endsection