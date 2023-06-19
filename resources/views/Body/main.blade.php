<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Lamaran Kerja</title>
    <link href="{{ asset('/') }}assets/boostrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/') }}assets/fontawesome/css/all.min.css">
  </head>
  <body>
    {{-- awal --}}
    <nav class="navbar navbar-expand-lg bg-info navbar-dark">
        <div class="container-fluid">
          <h1 class="navbar-brand" href="#">Test Laraman Kerja</h1>
        </div>
      </nav>
    {{-- akhir --}}

    {{-- konten --}}
      <div class="mt-1">
        <div class="container">
            @yield('content')
        </div>
      </div>
    {{-- akhir konten --}}
    <script src="{{ asset('/') }}assets/boostrap/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>