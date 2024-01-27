<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{route('hometest')}}" class="nav-item nav-link {{ request()->is('HomeTest') ? 'active' : '' }}">Home</a>
                    <a href="{{route('AboutUS')}}" class="nav-item nav-link {{ request()->is('AboutUS') ? 'active' : '' }}">About Us</a>
                    <a href="{{route('classes')}}" class="nav-item nav-link {{ request()->is('Classes') ? 'active' : '' }}">Classes</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ (request()->is('Facilities') || request()->is('Team') || request()->is('call') || request()->is('Appointment') || request()->is('testimonial') || request()->is('404Error') )  ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="{{route('Facilities')}}" class="dropdown-item {{ request()->is('Facilities') ? 'active' : '' }}">School Facilities</a>
                            <a href="{{route('Team')}}" class="dropdown-item {{ request()->is('Team') ? 'active' : '' }}">Popular Teachers</a>
                            <a href="{{route('call')}}" class="dropdown-item {{ request()->is('call') ? 'active' : '' }}">Become A Teachers</a>
                            <a href="{{route('Appointment')}}" class="dropdown-item {{ request()->is('Appointment') ? 'active' : '' }}">Make Appointment</a>
                            <a href="{{route('testimonial')}}" class="dropdown-item {{ request()->is('testimonial') ? 'active' : '' }}">Testimonial</a>
                            <a href="{{route('404Error')}}" class="dropdown-item {{ request()->is('404Error') ? 'active' : '' }}">404 Error</a> 
                        </div>
                    </div>
                    <a href="{{route('ContactUs')}}" class="nav-item nav-link {{ request()->is('ContactUs') ? 'active' : '' }}">Contact Us</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->