    <nav class="navbar navbar-expand-lg navbar-dark bg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/logo-teras.png" alt="" width="35" height="29" class="d-inline-block align-text-top">
                Blog Irfan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === 'home' ? 'active' : '') }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === 'about' ? 'active' : '') }}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === 'blog' ? 'active' : '') }}" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === 'category' ? 'active' : '') }}" href="/categories">Category</a>
                    </li>

                </ul>
                <ul class="navbar-nav ms-auto">
                    @auth

                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Selamat Datang, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-kanban"></i> My Dashboard</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="dropdown-item"><i class="bi bi-arrow-left-square-fill"></i> Logout</button>
                                </form>

                            </li>
                        </ul>
                    </li>


                    @else

                    <li class="nav-item">
                        <a href="/login" class="nav-link text-light"> <i class="bi bi-arrow-right-square-fill"></i> Login</a>

                    </li>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>