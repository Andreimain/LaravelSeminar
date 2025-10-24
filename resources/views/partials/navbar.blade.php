<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container-fluid px-4 d-flex justify-content-between align-items-center">
        <a class="navbar-brand fw-semibold" href="#">Students Module</a>

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="profileDropdown"
                   role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=0D8ABC&color=fff"
                         alt="Profile" class="rounded-circle me-2 border border-light" width="32" height="32">
                    <span class="fw-medium">{{ Auth::user()->name }}</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="profileDropdown">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.edit') }}">
                            <i class="bi bi-gear me-2 text-secondary"></i> Settings
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center text-danger" href="#"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</nav>

<div class="d-flex">
    <!-- Sidebar with full height -->
    <nav class="bg-light border-end p-3 flex-shrink-0" style="width: 220px; height: 100vh; position: sticky; top: 0;">
        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}"
                   class="nav-link d-flex align-items-center px-3 py-2 rounded {{ request()->routeIs('dashboard') ? 'active fw-semibold bg-body-secondary text-primary' : 'text-dark' }}">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('student-data.index') }}"
                   class="nav-link d-flex align-items-center px-3 py-2 rounded {{ request()->routeIs('student-data.*') ? 'active fw-semibold bg-body-secondary text-primary' : 'text-dark' }}">
                    <i class="bi bi-people me-2"></i> Student List
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('courses.index') }}"
                   class="nav-link d-flex align-items-center px-3 py-2 rounded {{ request()->routeIs('courses.*') ? 'active fw-semibold bg-body-secondary text-primary' : 'text-dark' }}">
                    <i class="bi bi-book me-2"></i> Courses
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main content -->
    <main class="flex-grow-1 p-4">
        @yield('content')
    </main>
</div>

@include('partials.footer')
