<style>
    @media (max-width: 767.98px) {
        .navbar-nav {
            gap: 15px !important; /* Atur jarak antar item menu untuk mode mobile */
        }
    }
</style>

<div class="row bg-dark" style="position: sticky;">
    <div class="col-2">
        <button class="btn btn-outline-light" type="button" data-bs-toggle="modal" data-bs-target="#searchModal">
            <i class="fa-solid fa-magnifying-glass"></i> 
        </button>
    </div>
    <div class="col-8 d-flex justify-content-center align-items-center py-2">
        <a href="/#" class="nav-link fw-bold text-white">Ilham Parking</a>
    </div>
    <div class="col-12">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <!-- Button for collapsing navbar (only visible on mobile) -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarContent" style="z-index:100px">
        <ul class="navbar-nav mx-auto d-flex" style="gap: 200px;">   
                <li class="nav-item">
                    <a class="nav-link" href="/home">Parking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home">Topics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home">History</a>
                </li>
                <li class="nav-item d-none d-md-block dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/datasci">About</a></li>
                            <li><a class="dropdown-item" href="/network">Contact</a></li>
                        </ul>
                    </li>

                    <!-- Mobile version of "More" Menu -->
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="/datasci">About</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="/network">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: black;">
            <div class="modal-header" style="background-color: black; color: white;">
                <h5 class="modal-title" id="searchModalLabel">Pencarian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Search Bar Form -->
                <form>
                    <div class="mb-3">
                        <!-- Input Group with Icon -->
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari yang anda inginkan" aria-label="Search" style="background-color: darkgray; color: black;">
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-secondary" type="submit">
                            <i class="fa-solid fa-search"></i> Cari
                        </button>
                    </div>
                </form>
                
                <!-- Icons below the Search Bar -->
                <div class="mt-3 text-center">
                    <div class="row">
                        <div class="col-4">
                            <button class="btn btn-outline-light">
                                <i class="fa-solid fa-clock"></i><br>
                                Recent
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-outline-light">
                                <i class="fa-solid fa-fire"></i><br>
                                Popular
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-outline-light">
                                <i class="fa-solid fa-th"></i><br>
                                Browse All
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>