<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <title>@yield('title')</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 py-3">
            <div class="container">
                <a class="navbar-brand disabled" href="{{ url('/') }}">Data Siswa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        <a class="nav-link active" href="{{ url('/siswa') }}">Siswa</a>
                        <a class="nav-link active" href="{{ url('/about') }}">About</a>

                    </div>
                </div>
            </div>
        </nav>

        @yield('container')

    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container text-center">
            <span class="text-white">Copyright by Devin Winando.</span>
        </div>
    </footer>

    <script src="{{ asset('/js/script.js') }}">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>