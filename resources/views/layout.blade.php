<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css\styles.css') }}" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500;700&display=swap" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Owly</title>
</head>
<body>
    <nav class="owly--navbar">
    <div class="owly--navbar--container">
       <a href="/"><img src="{{asset('images/Owlylogo2.png')}}" alt="owly_logo2" class="owly--logo--nav"/></a>
       <ul>
       <a href="/"><li>Home</li></a>
        <a href="/subjects"><li>Subjects</li></a>
        <a href="/courses"><li>Courses</li></a>
       </ul>
    <div class="owly--navbar--icons--container">
        <x-entypo-facebook class="navbar--icon" />
        <x-entypo-instagram-with-circle  class="navbar--icon"/>
        <x-entypo-linkedin-with-circle class="navbar--icon" />
    </div>
    </div>
    </nav>
    
    <x-flash-message />
    @yield('content')
    @yield('courses')
    @yield('create')
  
    <footer class="owly--footer">
         <div class="owly--footer--container">
            <div class="owly--footer--description">
            <h1 style="color: rgb(255, 56, 56)">Owly Company</h1>
            <p>Owly is an Italian company that offers cross-functional courses for primary learning, 
                stimulating the curiosity of young children through innovative and complementary paths.</p>
         </div>

         <div class="owly--footer--contact">
            <h1 style="color: rgb(255, 56, 56)">Contact Us</h1>
            <ul>
                <li>info@owly.it</li>
                <li><strong>Tel.</strong> +39 02 1234567</li>
                <li><strong>Adress:</strong> Via Roma, 123, 20121 Milano (MI)</li>
                <li><strong>Open. hours:</strong> Monday to Friday from 9:00 AM to 6:00 PM</li>
            </ul>
         </div>

         <div class="owly--footer--follow">
            <h1 style="color: rgb(255, 56, 56)">Follow Us</h1>
         <div class="owly--footer--icons">
            <x-entypo-facebook class="instagram--icon" />
            <x-entypo-instagram-with-circle  class="instagram--icon"/>
            <x-entypo-linkedin-with-circle class="instagram--icon" />
         </div>         
         </div>
        </div>
    </footer>
</body>
</html>