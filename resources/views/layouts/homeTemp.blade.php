<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookDrive - HOME</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        nav {
  width: 300px;
  background: white;
  color: rgba(0, 0, 0, 0.87);
  -webkit-clip-path: circle(24px at 30px 24px);
  clip-path: circle(24px at 32px 24px);
  -webkit-transition: -webkit-clip-path 0.5625s, clip-path 0.375s;
  transition: -webkit-clip-path 0.5625s, clip-path 0.375s;
}

nav:hover {
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
  -webkit-transition-duration: 0.75s;
  transition-duration: 0.75s;
  -webkit-clip-path: circle(390px at 225px 24px);
  clip-path: circle(390px at 150px 24px);
}

a {
  display: block;
  line-height: 50px;
  padding: 0 20px;
  color: inherit;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

a:hover { background: #ffe082; }

a:active { background: #ffca28; }

.navicon {
  padding: 23px 20px;
  cursor: pointer;
  -webkit-transform-origin: 32px 24px;
  -ms-transform-origin: 32px 24px;
  transform-origin: 32px 24px;
}

.navicon div {
  position: relative;
  width: 20px;
  height: 2px;
  background: rgba(0, 0, 0, 0.87);
}

.navicon div:before,
.navicon div:after {
  display: block;
  content: "";
  width: 20px;
  height: 2px;
  background: rgba(0, 0, 0, 0.87);
  position: absolute;
}

.navicon div:before { top: -7px; }

.navicon div:after { top: 7px; }
    </style>

</head>
<body>
    <header class="container-fluid border border-info my-3 bg-warning">
        <div class="row border container-fluid my-2 border border-secondary bg-info mx-auto">
            <div class="col-md-6 text-start border border-warning">LOGO</div>
            <div class="col-md-6 text-end border border-danger">
                <nav>
                    <div class="navicon">
                        <div></div>
                    </div>
                        <a>This was</a>
                        <a>Made using</a>
                        <a>The clip-path property</a>
                        <a>Transition in</a>
                        <a>CSS only</a>
                </nav>
            </div>
        </div>
    </header>
    <main class="container-fluid border border-primary vh-100 text-center">
        <div class="main m-5">
            <h5>Body Section</h5>
        </div>
    </main>
    <footer class="container-fluid border text-center">
        <div class="footer p-4">

        
            <h6>Footer Section</h6>

        </div>
    </footer>
</body>
</html>