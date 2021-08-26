<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">

            <a href="{{route('home')}}" class="navbar-brand">
                <img src="frontend/assets/images/logo.png" alt="logo travuix" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#top-nav"
                aria-controls="top-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="top-nav">
                <ul class="navbar-nav ms-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="" class="nav-link active">
                            Home
                        </a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="" class="nav-link">
                            Packages
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Link</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="" class="nav-link">
                            Testimonials
                        </a>
                    </li>

                </ul>

                <!-- Mobile button login -->
                <form action="#" class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0">
                        Login
                    </button>
                </form>

                <!-- Mobile button login -->
                <form action="#" class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                        Login
                    </button>
                </form>

            </div>
        </div>
    </nav>
</div>
