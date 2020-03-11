<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="{{url('dasboard')}}"><i class="glyphicon glyphicon-home"></i><span>Home</span></a>
      </li>
            <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-stats"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/siswa')}}"><i class="fa fa-circle-o"></i>Data Siswa</a></li> 
            <li><a href="{{url('/petugas')}}"><i class="fa fa-circle-o"></i>Data Petugas</a></li> 
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i>Data Pengguna</a></li>
            <li><a href="{{url('/kelas')}}"><i class="fa fa-circle-o"></i>Data Kelas</a></li>
            <li><a href="{{url('/jurusan')}}"><i class="fa fa-circle-o"></i>Data Jurusan</a></li>
            <li><a href="{{url('/thn_ajaran')}}"><i class="fa fa-circle-o"></i>Data Tahun Ajaran</a></li>
          </ul>
        </li>

         
        <li>
          <a href="{{url('/')}}"><i class="fa fa-list-alt"></i><span>Transaksi</span></a>
        </li>
        <li>
          <a href="{{url('/')}}"><i class="fa fa-list-alt"></i><span>Riwayat Transaksi</span></a>
         </li>
    <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-stats"></i>
            <span>Rekap</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Rekap per Hari</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> rekap per Bulan</a></li> 
          </ul>
        </li>
    </ul>
  </section>
    <!-- /.sidebar -->
</aside>