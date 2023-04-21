@extends('layout')

@section('content')
    
<div class="courses--container">
<h1 class="courses--title">{{$heading}}</h1>
@include('partials._search')
@include('partials._addCourse')
<div class="courses--list">
@unless(count($courses) == 0)

@foreach($courses as $course)
<x-course-card :course="$course" />
@endforeach

@else
<p>No courses found</p>

@endunless
</div>
<nav class="paginate--controller">
    <div class="paginate--container">
    {{$courses->links()}}
</div>
</nav>
</div>



@endsection