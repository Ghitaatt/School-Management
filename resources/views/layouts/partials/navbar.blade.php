<header class="p-3  text-white" style="background-color: #BE52C1;">
    <div class=" container">

        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <img src="images/logo.png" alt="logo" style="width: 70px; ">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('dashboard') }}" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="{{ route('index') }}" class="nav-link px-2 text-white">Files</a></li>

            </ul>



            @auth
            <div class="text-end">

                {{auth()->user()->name}}

            </div>

            <div class="text-end">
                <a href="{{ route('logout') }}" class="btn btn-outline-light me-2">Logout</a>
            </div>
            @endauth

            @guest
            <div class="text-end">
                <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{ route('registration') }}" class="btn btn-warning">Sign-up</a>
            </div>
            @endguest
        </div>
    </div>
</header>