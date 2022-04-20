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
            <li 
                @if (request()->is('teacher/dashboard'))
                    class=" active"
                @endif
            >
                <a class="nav-link" href="{{ route('teacher.dashboard') }}">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li 
                @if (request()->is('teacher/scores'))
                    class=" active"
                @endif
            >
                <a class="nav-link" href="{{ route('teacher.score.index') }}">
                    <i class="fas fa-address-book"></i>
                    <span>Daftar Nilai</span>
                </a>
            </li>
            <li 
                @if (request()->is('teacher/questions/add'))
                    class=" active"
                @endif
            >
                <a class="nav-link" href="{{ route('teacher.question.add') }}">
                    <i class="fa-solid fa-paperclip"></i>    
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