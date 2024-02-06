<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="AirAstana - Aktau Airport">
	<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Nurmukhamed">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <style>
        html, body {
            height: 100vh;
            margin: 0;
            padding: 0;
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://logos-world.net/wp-content/uploads/2023/01/Air-Astana-Logo.png" width="120px" height="75px" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">

            <div class="d-flex flex-row">
                <ul class="navbar-nav d-flex">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                </ul>
              </div>

              <div class="d-flex flex-row">
                <ul class="navbar-nav d-flex">
                <li class="nav-item dropdown ms-auto">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-door-open text-danger" style="margin-right: 10px"></i>Выйти
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
          </div>
        </div>
      </nav>

      <div class="container mt-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a
                href="#"
                style="text-decoration: none; color: gray;"
              >Overview</a>
            </li>
            @foreach ($breadcrumbs as $breadcrumb)
              <li class="breadcrumb-item">
                <a
                  href="{{ $breadcrumb['url'] }}"
                  style="text-decoration: none; color: #000; font-weight: 600;"
                  >{{ $breadcrumb['text'] }}</a>
              </li>
            @endforeach
          </ol>
        </nav>
      </div>

      <script src="{{ asset('js/bootstrap.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
