<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
 

    </style>
</head>
<body>
    <div id="app" class="container-fluid sticky-top mainHeaderSection">
        <div class="row text-center">

            <div class="col-md-1 border p-3" id="notificationBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                </svg>
                <p>Notification</p>
            </div>

            <div class="col-md-1 border p-3" id="calenderBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
                <p>Calender</p>
            </div>

            <div class="col-md-7 border searchBarSection">
                <div class="wrap">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="What are you looking for?">
                        <button type="submit" class="searchButton">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-1 border p-3" id="profileBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>
                <p>Profile</p>
            </div>
            <div class="col-md-1 border p-3" id="settingBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                </svg>
                <p>Setting</p>
            </div>
            <div class="col-md-1 border p-3" id="logoutBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                </svg>
                <p>Logout</p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center py-1">
                <span id="headerLogo">BookDrive</span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Dummy Data -->
    <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos dolores nesciunt excepturi sequi quisquam molestias alias, aperiam cumque nostrum corporis voluptatibus sint voluptate exercitationem quo ab laboriosam, voluptas ipsum?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto atque fuga explicabo in? Eligendi rerum repellendus distinctio, commodi quisquam unde impedit beatae dolorem natus qui, cupiditate labore ratione harum enim.
        </div>
    </div>
</body>
</html>
