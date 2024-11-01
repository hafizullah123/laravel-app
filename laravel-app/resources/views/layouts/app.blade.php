<!DOCTYPE html>  
<html lang="en">  

<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>@yield('title', 'CRUD App')</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
</head>  

<body>  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">  
        <a class="navbar-brand" href="{{ url('/') }}">CRUD Application</a>  
        <div class="collapse navbar-collapse" id="navbarNav">  
            <ul class="navbar-nav">  
                <li class="nav-item">  
                    <a class="nav-link" href="{{ route('registers.index') }}">Registers</a>  
                </li>  
            </ul>  
        </div>  
    </nav>  

    <div class="container mt-4">  
        @yield('content')  
    </div>  

    <footer class="text-center mt-5">  
        <hr />  
        <p>&copy; {{ date('Y') }} CRUD Application</p>  
    </footer>  
</body>  

</html>