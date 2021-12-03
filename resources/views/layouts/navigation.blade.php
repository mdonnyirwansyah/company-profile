<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-address-card"></i>
                    <p>
                        {{ __('Tentang Kami') }}
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('tentang.profil.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Profil') }}</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('tentang.visi-misi.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Visi dan Misi') }}</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('tentang.struktur-organisasi.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Struktur Organisasi') }}</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('tentang.dasar-hukum.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{ __('Dasar Hukum') }}</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('unit-usaha.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-store"></i>
                    <p>
                        {{ __('Unit Usaha') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        {{ __('Users') }}
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
