 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="" class="brand-link">
         <img src="{{asset('public/assets/admin/dist/img/Logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">SMANEV</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ Auth::user()->foto }}" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="{{route('beranda.guru')}}" class="d-block">{{ Auth::user()->name }}</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                 <li class="nav-header">MENU GURU</li>
                 <!-- E-Learning -->
                 <li class="nav-item has-treeview">
                     <a href="{{route('guru.kelas')}}" class="nav-link">
                         <i class="nav-icon fas fa-chalkboard-teacher"></i>
                         <p>
                             Manajemen Pengajar
                         </p>
                     </a>
                 </li>
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon far fa-image"></i>
                         <p>
                             Manajemen Materi
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{route('gurumateri.index')}}" class="nav-link">
                                 <i class="nav-icon fas fa-book"></i>
                                 <p>
                                     Materi Pelajaran
                                 </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{route('gurumateri.sampah')}}" class="nav-link">
                                 <i class="nav-icon fas fa-book-open"></i>
                                 <p>
                                     Sampah Materi
                                 </p>
                             </a>
                         </li>
                     </ul>
                 <li class="nav-item has-treeview">
                     <a href="" class="nav-link">
                         <i class="nav-icon fas fa-tasks"></i>
                         <p>
                             Manajemen Tugas / Quiz
                         </p>
                     </a>
                 </li>
                 <li class="nav-item has-treeview">
                     <a href="" class="nav-link">
                         <i class="nav-icon fas fa-file-download"></i>
                         <p>
                             Manajemen File
                         </p>
                     </a>
                 </li>
                 <li class="nav-item has-treeview">
                     <a href="" class="nav-link">
                         <i class="nav-icon fas fa-photo-video"></i>
                         <p>
                             Manajemen Video
                         </p>
                     </a>
                 </li>
                 <!-- GALERI Menu yang dibutuhkan dalam Galeri-->
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon far fa-image"></i>
                         <p>
                             Galeri
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="../mailbox/mailbox.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Buat Album</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="../mailbox/compose.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>List Album</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- LOGOUT -->

                 <li class="nav-item has-treeview menu-open">
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