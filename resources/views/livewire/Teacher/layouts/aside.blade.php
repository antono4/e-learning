<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="index-0.html">General Dashboard</a>
                    </li>
                    <li>
                        <a class="nav-link" href="index.html">Ecommerce Dashboard</a>
                    </li>
                </ul>
            </li>
            <li 
                @if (request()->is('teacher/dashboard'))
                    class=" active"
                @endif
            >
                <a class="nav-link" href="{{ route('teacher.dashboard') }}">
                    <i class="far fa-square"></i> 
                    <span>Daftar Nilai</span>
                </a>
            </li>
            <li 
                @if (request()->is('teacher/lessons'))
                    class=" active"
                @endif
            >
                <a class="nav-link" href="{{ route('lesson.index') }}">
                    <i class="far fa-square"></i> 
                    <span>Daftar Pelajaran</span>
                </a>
            </li>
            <li 
                @if (request()->is('teacher/addquestion'))
                    class=" active"
                @endif
            >
                <a class="nav-link" href="{{ route('add.question') }}">
                    <i class="far fa-square"></i> 
                    <span>Tambah Soal</span>
                </a>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>