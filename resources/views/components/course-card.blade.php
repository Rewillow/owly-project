@props(['course'])

<div class="courses--single">
    <img class="courses--logo" src="{{asset('images/OwlyLogo.png')}}">
    <div class="line--courses"></div>
    <a href="/courses/{{$course['id']}}">
       <h2> {{$course['title']}} </h2>
    </a>
    <div class="subject--covered">
    <h3>Subjects Covered:</h3>
    <div class="matter--list">
    <ul>
        @foreach ($course['subject'] as $subject)
            <li>{{ $subject }}</li>
        @endforeach
    </ul>
    </div>
    </div>
    <div class="open--spots">
    <p><strong>Open Spots:</strong> {{$course['spots']}}</p>
    </div>
    <a href="/courses/{{$course['id']}}">
        <button class="courses--button">Find out more</button>
    </a>
</div>