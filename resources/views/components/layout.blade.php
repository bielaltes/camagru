<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Camagru</title>

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <style>
    .nav-link {
      color: inherit;
      text-decoration: none;
    }

    .nav-link:hover {
      color: grey;
    }
  </style>

</head>

<body
    class="mx-auto mt-5" style="background: linear-gradient(to right, #ebf4ff 10%, #f0f9ff 30%, #ecfdf5 90%); color: #374151;">

    <nav class ="mx-auto mb-3 d-flex justify-content-between" style="max-width:70rem; font-size: 1.125rem; font-weight: 500;">
        <ul class="d-flex gap-2 list-unstyled ms-3">
            <li>
                <a href="{{ route('posts.index') }}" class="nav-link">Camagru</a>
            </li>
        </ul>
        <ul class="list-unstyled">
            <li>
                🔎
            </li>
        </ul>
        <ul class="list-unstyled text-end me-3">
            @auth
                <li>
                    Profile
                </li>
                <li>
                    Sign out
                </li>
            @else
                <li>
                    Sign in
                </li>
            @endauth
        </ul>
    </nav>

    <div class="mx-auto" style = "max-width:40rem;">
        {{ $slot }}
    </div>
    
</body>

</html>