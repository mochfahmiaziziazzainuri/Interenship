<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">INTERNSHIP</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('home')}}" class="nav-item nav-link " style="color:{{ Request::routeIs('home') ? 'blue' : '' ;}}">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link" style="color:{{ Request::routeIs('about') ? 'blue' : '' ;}}">About</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link" style="color:{{ Request::routeIs('service') ? 'blue' : '' ;}}">Service</a>
                    <a href="{{ route('project') }}" class="nav-item nav-link" style="color:{{ Request::routeIs('project') ? 'blue' : '' ;}}">Project</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link" style="color:{{ Request::routeIs('contact') ? 'blue' : '' ;}}">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>