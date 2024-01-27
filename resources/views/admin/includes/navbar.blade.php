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
                    <a href="{{route('appointments')}}" class="nav-item nav-link {{ request()->is('admin/appointments') ? 'active' : '' }}">Appointment</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ (request()->is('admin/kiderClass') || request()->is('admin/insertclass') || request()->is('admin/trashClass') )  ? 'active' : '' }}" data-bs-toggle="dropdown">Classes</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="{{ route('kiderClass') }}" class="dropdown-item {{ request()->is('admin/kiderClass') ? 'active' : '' }}">List Classes</a>
                            <a href="{{ route('insertclass') }}" class="dropdown-item {{ request()->is('admin/insertclass') ? 'active' : '' }}">Insert Class</a>
                            <a href="{{route('trashClass')}}" class="dropdown-item {{ request()->is('admin/trashClass') ? 'active' : '' }}">Trashed Class</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ (request()->is('admin/teach') || request()->is('admin/insertteacher') || request()->is('admin/trashTeacher') )  ? 'active' : '' }}" data-bs-toggle="dropdown">Teachers</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="{{ route('teach') }}" class="dropdown-item {{ request()->is('admin/teach') ? 'active' : '' }}">List Teachers</a>
                            <a href="{{ route('insertteach') }}" class="dropdown-item {{ request()->is('admin/insertteacher') ? 'active' : '' }}">Insert Teacher</a>
                            <a href="{{route('trashTeacher')}}" class="dropdown-item {{ request()->is('admin/trashTeacher') ? 'active' : '' }}">Trashed Teacher</a>
                        </div>
                     </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ (request()->is('admin/testi') || request()->is('admin/inserttest') || request()->is('admin/trashTesti') )  ? 'active' : '' }}" data-bs-toggle="dropdown">Testimonials</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="{{ route('testi') }}" class="dropdown-item {{ request()->is('admin/testi') ? 'active' : '' }}">List Testimonials</a>
                            <a href="{{ route('inserttest') }}" class="dropdown-item {{ request()->is('admin/inserttest') ? 'active' : '' }}">Insert Testimonial</a>
                            <a href="{{route('trashTesti')}}" class="dropdown-item {{ request()->is('admin/trashTesti') ? 'active' : '' }}">Trashed Testimonial</a>
                        </div>
                    </div>
                    <a href="{{ route('contacts') }}" class="nav-item nav-link {{ request()->is('admin/contacts') ? 'active' : '' }}">Contact Us</a>
                </div>
                <a href="{{ route('contacts') }}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Unread : {{$unread}}<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
            
        </nav>
        <!-- Navbar End -->