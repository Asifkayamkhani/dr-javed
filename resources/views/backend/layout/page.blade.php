@php
$name=Auth::user()->name;
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">



    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('uploades/202402081107uncle.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{$name}}</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item ">
                    <a href="{{url('admin')}}" class="nav-link ">
                        <i class="nav-icon fas fa-th"></i>

                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{url('banner-table')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Banner
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{url('services-table')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Services
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{url('gallery-table')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Gallery
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{url('google-table')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Testimonial
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{url('g-table')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Appointment
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{url('contact')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Contact
                        </p>
                    </a>

                </li>

            </ul>
        </nav>

    </div>

</aside>