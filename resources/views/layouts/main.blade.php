<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduFun | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
</head>
<body class="d-flex flex-column min-vh-100" style="background-color: #f8f9fa;">

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="EduFun Logo" style="height: 60px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ ($title === 'Category') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item" href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Our Writers') ? 'active' : '' }}" href="/writers">Writers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'About Us') ? 'active' : '' }}" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Popular Articles') ? 'active' : '' }}" href="/popular">Popular</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4 flex-grow-1">
        @yield('container')
    </div>

    <footer class="text-center text-muted p-4 mt-auto" style="background-color: #343a40; color: white !important;">
        EduFun 2024 | Web Programming | Willsens Kiren Alexander | 2702234112
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>