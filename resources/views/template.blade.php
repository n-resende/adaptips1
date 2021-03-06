<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="images/icon.svg" type="image/svg">
    @yield('assets')

    <title>@yield('title') | Adapti</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <header class="header-container"> 
        <div class="header-align">
            <input type="checkbox" name="checkbox" id="nav-checkbox" class="nav-checkbox">
            <div class="hide">
                <a href="{{ route('movie.index') }}"><img src="{{ asset('images/logo.svg') }}" alt="Logo"class="logo"></a>
                <label for="nav-checkbox" class="nav-toggle">
                    <img src="{{ asset('images/menu.svg') }}" alt="menu icon" class="menu">
                    <img src="{{ asset('images/close.svg') }}" alt="close icon" class="close">
                </label>
                <a href="{{ route('movie.index') }}" class="start mobile-display">INICIO</a>
                <a href="{{ route('movie.create') }}" class="create-container mobile-display"><button class="create-button">ADICIONAR FILME</button></a>
            </div>
        
            @yield('navbar')
        </div>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer class="footer-container">
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="footer-logo">
        <a href="https://twitter.com/baldollynho" target="_blank">
            <img src="{{ asset('images/twitter.svg') }}" alt="twitter icon" class="footer-icon">
        </a>
        <a href="https://www.instagram.com/n.cremasco/" target="_blank">
            <img src="{{ asset('images/instagram.svg') }}" alt="instagram icon" class="footer-icon">
        </a>
        <a href="https://www.linkedin.com/in/nicolas-resende/" target="_blank">
            <img src="{{ asset('images/linkedin.svg') }}" alt="linkedin icon" class="footer-icon">
        </a>    
        <p class="footer-message">
            Desenvolvido por Nicolas Resende - 2021
        </p>
    </footer>

</body>
</html>