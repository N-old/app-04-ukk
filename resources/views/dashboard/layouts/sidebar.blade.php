<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <a href="/"><h1>Book Spark</h1></a>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class='sidebar-title'>Dashboard</li>
                <li class="sidebar-item {{ $active === 'dashboard' ? 'active' : '' }} ">
                    <a href="/dashboard" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @if (Auth::user()->role == 'admin')
                <li class='sidebar-title'>Main Menu</li>
                <li class="sidebar-item {{ $active === 'buku' ? 'active' : '' }}">
                    <a href="{{ route('buku.index')}}" class='sidebar-link'>
                        <i data-feather="book" width="20"></i>
                        <span>Data Buku</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active === 'kategori' ? 'active' : '' }}">
                    <a href="{{ route('kategori.index')}}" class='sidebar-link'>
                        <i data-feather="book-open" width="20"></i>
                        <span>Data Kategori</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active === 'peminjaman' ? 'active' : '' }}">
                    <a href="{{ route('peminjaman.index')}}" class='sidebar-link'>
                        <i data-feather="shopping-bag" width="20"></i>
                        <span>Data Peminjaman</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active === 'ulasan' ? 'active' : '' }}">
                    <a href="{{ route('ulasan.index')}}" class='sidebar-link'>
                        <i data-feather="message-circle" width="20"></i>
                        <span>Data Ulasan</span>
                    </a>
                </li>
                <li class='sidebar-title'>Pengguna</li>
                <li class="sidebar-item {{ $active === 'user' ? 'active' : '' }}">
                    <a href="{{ route('user.index')}}" class='sidebar-link'>
                        <i data-feather="users" width="20"></i>
                        <span>Data User</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->role == 'petugas')
                <li class='sidebar-title'>Main Menu</li>
                <li class="sidebar-item {{ $active === 'buku' ? 'active' : '' }}">
                    <a href="{{ route('buku.index')}}" class='sidebar-link'>
                        <i data-feather="book" width="20"></i>
                        <span>Data Buku</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active === 'kategori' ? 'active' : '' }}">
                    <a href="{{ route('kategori.index')}}" class='sidebar-link'>
                        <i data-feather="book-open" width="20"></i>
                        <span>Data Kategori</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active === 'peminjaman' ? 'active' : '' }}">
                    <a href="{{ route('peminjaman.index')}}" class='sidebar-link'>
                        <i data-feather="shopping-bag" width="20"></i>
                        <span>Data Peminjaman</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->role == 'user')
                <li class="sidebar-item {{ $active === 'koleksi' ? 'active' : '' }}">
                    <a href="/koleksi" class='sidebar-link'>
                        <i data-feather="thumbs-up" width="20"></i>
                        <span>Data Koleksi</span>
                    </a>
                </li>
                @endif
                <li class='sidebar-title'>Pengaturan</li>
                <li class="sidebar-item {{ $active === 'profil' ? 'active' : '' }}">
                    <a href="{{ route('profil.edit')}}" class='sidebar-link'>
                        <i data-feather="user" width="20"></i>
                        <span>Profil</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>