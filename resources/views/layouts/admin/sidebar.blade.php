 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="" class="brand-link">
         <img src="{{asset('assets/admin/dist/img/Logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">SMANEV</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{asset('assets/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="" class="d-block">{{auth()->user()->name}}</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-header">MENU ADMIN</li>
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>

                 <!-- Manajemen Data-->
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-users-cog"></i>
                         <p>
                             Manajemen Data
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <!-- DATA SEKOLAH -->
                     <ul class="nav nav-treeview">
                         <li></li>
                         <li class="nav-item has-treeview">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fas fa-school"></i>
                                 <p>
                                     Data Sekolah
                                     <i class="right fas fa-angle-left"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="{{route('mapel.index')}}" class="nav-link">
                                         <i class="far fa-dot-circle nav-icon"></i>
                                         <p>Mata Pelajaran</p>
                                     </a>
                                 </li>
                             </ul>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="{{route('kelas.index')}}" class="nav-link">
                                         <i class="far fa-dot-circle nav-icon"></i>
                                         <p>Kelas</p>
                                     </a>
                                 </li>
                             </ul>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="{{route('akademik.ta')}}" class="nav-link">
                                         <i class="far fa-dot-circle nav-icon"></i>
                                         <p>Tahun Akademik</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                     <!-- USER -->
                     <ul class="nav nav-treeview">
                         <li></li>
                         <li class="nav-item has-treeview">
                             <a href="" class="nav-link">
                                 <i class="fas fa-list-alt nav-icon"></i>
                                 <p>
                                     Manajemen User
                                     <i class="right fas fa-angle-left"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="{{route('user.index')}}" class="nav-link">
                                         <i class="far fa-dot-circle nav-icon"></i>
                                         <p>Daftar User</p>
                                     </a>
                                 </li>
                             </ul>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="{{route('guru.index')}}" class="nav-link">
                                         <i class="far fa-dot-circle nav-icon"></i>
                                         <p>Daftar Guru</p>
                                     </a>
                                 </li>
                             </ul>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="{{route('siswa.index')}}" class="nav-link">
                                         <i class="far fa-dot-circle nav-icon"></i>
                                         <p>Daftar Siswa</p>
                                     </a>
                                 </li>
                             </ul>

                         </li>
                     </ul>

                 </li>

                 <!-- PENGATURAN -->
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-tools"></i>
                         <p>
                             Pengaturan
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li></li>
                         <li class="nav-item has-treeview">
                             <a href="{{route('kategori.index')}}" class="nav-link">
                                 <i class="fas fa-list-alt nav-icon"></i>
                                 <p>
                                     Kategori
                                 </p>
                             </a>
                         </li>
                     </ul>
                     <ul class="nav nav-treeview">
                         <li></li>
                         <li class="nav-item has-treeview">
                             <a href="{{route('tag.index')}}" class="nav-link">
                                 <i class="fas fa-tag nav-icon"></i>
                                 <p>
                                     Tags
                                 </p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <!-- Manajemen Data-->
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-users-cog"></i>
                         <p>
                             Master Kelulusan
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <!-- DATA SEKOLAH -->
                     <ul class="nav nav-treeview">
                         <li></li>
                         <li class="nav-item has-treeview">
                             <a href="{{route('siswaskl.index')}}" class="nav-link">
                                 <i class="far fa-dot-circle nav-icon"></i>
                                 <p>Daftar Siswa</p>
                             </a>
                         </li>
                         <li class="nav-item has-treeview">
                             <a href="{{route('skl.surat')}}" class="nav-link">
                                 <i class="far fa-dot-circle nav-icon"></i>
                                 <p>Pengaturan Surat</p>
                             </a>
                         </li>
                         <li class="nav-item has-treeview">
                             <a href="{{route('skl.pengaturan')}}" class="nav-link">
                                 <i class="far fa-dot-circle nav-icon"></i>
                                 <p>Pengaturan SKL</p>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <!-- BLOG -->
                 <li class="nav-item has-treeview">
                     <a href="" class="nav-link">
                         <i class="nav-icon fas fa-book-reader"></i>
                         <p>
                             Manajemen Blog
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{route('post.create')}}" class="nav-link">
                                 <i class="fas fa-book-open nav-icon"></i>
                                 <p>Tulis Blog</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{route('post.index')}}" class="nav-link">
                                 <i class="fas fa-book-open nav-icon"></i>
                                 <p>Daftar Blog</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{route('post.sampah')}}" class="nav-link">
                                 <i class="fas fa-recycle nav-icon"></i>
                                 <p>Sampah Blog</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- GALERI Menu yang dibutuhkan dalam Galeri-->
                 <li class="nav-item has-treeview">
                     <a href="" class="nav-link">
                         <i class="nav-icon far fa-image"></i>
                         <p>
                             Galeri
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{route('admin.error')}}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Buat Album</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{route('admin.error')}}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>List Album</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- LOGOUT -->

                 <li class="nav-item has-treeview">
                     <a href="{{route('logout')}}" class="nav-link">
                         <i class="nav-icon fas fa-sign-out-alt"></i>
                         <p>
                             Keluar
                         </p>
                     </a>
                 </li>

                 </li>
             </ul>
             </li>

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>