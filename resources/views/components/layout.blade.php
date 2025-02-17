<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
      <header>
        <div class="header-name"><a href="{{route('contacts.index')}}" style='text-decoration:none;'><h2>Contact App</h2></a></div>
        <div class="header-links">    
          <a href="{{route('contacts.create')}}" class="add-contact-btn"> Add New Contact </a>
          <a href="{{route('contacts.import')}}" class="add-contact-btn"> Import From XML </a>
        </div>
      </header>
      @session('message')
          <script> alert(@json(session('message'))) </script>
      @endsession
      {{$slot}}
      <footer>
        <p> Contact App &copy; | 2025 </p>
      </footer>
    </body>
</html>
