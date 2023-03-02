<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0 text-primary"><i class="fa fa-car me-2"></i>Park|Go</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="#" class="nav-item nav-link active">Lgu Baguio Site</a>
            <a href="#" class="nav-item nav-link">Contact</a>
            <a href="{{route('user.dashboard')}}" class="nav-item nav-link">Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <i class="fa fa-user" aria-hidden="true"></i>{{auth()->user()->name}}</a>
                <div class="dropdown-menu m-0">
                    <a href="{{route('user.logout')}}" class="dropdown-item"> Log Out</a>
                </div>
            </div>
        </div>
        <!-- <a href="appointment.html" class="btn btn-primary py-2 px-4 ms-3">Book Now</a>
    </div> -->
</nav>