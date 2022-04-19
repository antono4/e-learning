<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Kelola Data</li>
            <li 
                class="
                    nav-item dropdown
                    @if (request()->is('admin/teachers*') OR request()->is('admin/students*'))
                        active
                    @endif
            ">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-users"></i>
                    <span>Kelola Pengguna</span>
                </a>
                <ul class="dropdown-menu">
                    <li 
                        class="
                        @if (request()->is('admin/teachers'))
                            active
                        @endif
                    ">
                        <a class="nav-link" href="{{ route('admin.teachers.index') }}">Data Guru</a>
                    </li>
                    <li 
                        class="
                        @if (request()->is('admin/students'))
                            active
                        @endif
                    ">
                        <a class="nav-link" href="{{ route('admin.students.index') }}">Data Siswa</a>
                    </li>
                </ul>
            </li>
            <li 
                class="
                    nav-item dropdown
                    @if (request()->is('admin/lessons*'))
                        active
                    @endif
            ">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-book"></i>
                    <span>Kelola Mapel</span>
                </a>
                <ul class="dropdown-menu">
                    <li 
                        class="
                        @if (request()->is('admin/lessons'))
                            active
                        @endif
                    ">
                        <a class="nav-link" href="{{ route('admin.lessons.index') }}">Data Mapel</a>
                    </li>
                    <li 
                        class="
                        @if (request()->is('admin/lessons/add'))
                            active
                        @endif
                    ">
                        <a class="nav-link" href="{{ route('admin.lessons.add') }}">Tambah Mapel</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>