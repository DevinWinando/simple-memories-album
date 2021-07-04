<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="generator" content="Hugo 0.83.1" />
        <title>Login</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{ asset('/css/login.css') }}" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>

        <!-- Custom styles for this template -->
        <link href="signin.css" rel="stylesheet" />
    </head>
    <body class="text-center">
        <main class="form-signin">
            <img
                class="mb-4"
                src="../assets/brand/bootstrap-logo.svg"
                alt="Gambar"
                width="72"
                height="57"
            />
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                    <input
                        type="email"
                        class="form-control"
                        id="floatingInput"
                        placeholder="name@example.com"
                        name="email"
                    />
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating">
                    <input
                        type="password"
                        class="form-control"
                        id="floatingPassword"
                        placeholder="Password"
                        name="password"
                    />
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="mb-3">
                        <a href="/register">Tak punya akun? Register!</a>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">
                    Sign in
                </button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
            </form>
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show position-absolute top-50 start-50 translate-middle" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    </body>
</html>
