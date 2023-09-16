<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{asset('assets')}}/img/Dhaka_International_University.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Student
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('add-student')}}">New Student Add</a></li>
                        <li><a class="dropdown-item" href="{{route('view-student')}}">Students List</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Department
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">New Department Add</a></li>
                        <li><a class="dropdown-item" href="#">Department List</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Session
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">New Session Add</a></li>
                        <li><a class="dropdown-item" href="#">Session List</a></li>
                    </ul>
                </li>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
