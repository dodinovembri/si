    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          SIMTA <span>SI</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{ url('dashboard') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Mahasiswa</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#mhs-master" role="button" aria-expanded="false" aria-controls="mhs-master">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Master</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="mhs-master">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ url('mhs') }}" class="nav-link">Mahasiswa</a>
                </li>
              </ul>
            </div>
          </li> 
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#trx-mhs" role="button" aria-expanded="false" aria-controls="trx-mhs">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">Transactions</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="trx-mhs">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ url('mhs_aktif') }}" class="nav-link">Mhs Aktif</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('mhs_memenuhi_syarat') }}" class="nav-link">Mhs Memenuhi Syarat</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('mhs_tidak_memenuhi_syarat') }}" class="nav-link">Mhs Tidak Memenuhi Syarat</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('verifikasi_data_mhs') }}" class="nav-link">Verifikasi Data Mhs</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('upload_data_mhs') }}" class="nav-link">Upload Data Mhs</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('verifikasi_sukses') }}" class="nav-link">Verifikasi Sukses</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('verifikasi_gagal') }}" class="nav-link">Verifikasi Gagal</a>
                </li>
              </ul>
            </div>
          </li>  
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#report-mhs" role="button" aria-expanded="false" aria-controls="report-mhs">
              <i class="link-icon" data-feather="anchor"></i>
              <span class="link-title">Reports</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
           <!--  <div class="collapse" id="report-mhs">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
                </li>
                <li class="nav-item">
                    <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
                  </li>
                <li class="nav-item">
                  <a href="pages/advanced-ui/sweet-alert.html" class="nav-link">Sweet Alert</a>
                </li>
              </ul>
            </div> -->
          </li>                  
          <li class="nav-item nav-category">Dosen</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#master-dosen" role="button" aria-expanded="false" aria-controls="master-dosen">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Master</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="master-dosen">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ url('dosen') }}" class="nav-link">Dosen</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link"  data-toggle="collapse" href="#trx-dosen" role="button" aria-expanded="false" aria-controls="trx-dosen">
              <i class="link-icon" data-feather="pie-chart"></i>
              <span class="link-title">Transactions</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="trx-dosen">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ url('topik_ta_mhs') }}" class="nav-link">Topik TA Mhs</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('set_pembimbing_skripsi') }}" class="nav-link">Set Pembimbing Skripsi</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#report-dosen" role="button" aria-expanded="false" aria-controls="report-dosen">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Reports</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
           <!--  <div class="collapse" id="report-dosen">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/tables/basic-table.html" class="nav-link">Basic Tables</a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/data-table.html" class="nav-link">Data Table</a>
                </li>
              </ul>
            </div> -->
          </li>
          <li class="nav-item nav-category">Sempro</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#master-sempro" role="button" aria-expanded="false" aria-controls="master-sempro">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Master</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="master-sempro">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/general/blank-page.html" class="nav-link">Blank page</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#trx-sempro" role="button" aria-expanded="false" aria-controls="trx-sempro">
              <i class="link-icon" data-feather="unlock"></i>
              <span class="link-title">Transactions</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="trx-sempro">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ url ('form_pengajuan_topik') }}" class="nav-link">Form Pengajuan Topik</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url ('topik_ta') }}" class="nav-link">Topik TA</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url ('form_perubahan_topik') }}" class="nav-link">Form Perubahan Topik</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url ('status_sempro') }}" class="nav-link">Status Sempro</a>
                </li>                                
                <li class="nav-item">
                  <a href="{{ url ('jadwal_sempro') }}" class="nav-link">Jadwal Sempro</a>
                </li>                                                
                <li class="nav-item">
                  <a href="{{ url ('verifikasi_seminar') }}" class="nav-link">Verifikasi Seminar</a>
                </li>                                                
                <li class="nav-item">
                  <a href="{{ url ('perpanjang_sempro') }}" class="nav-link">Perpanjang Sempro</a>
                </li>                                                
                <li class="nav-item">
                  <a href="{{ url ('pendafataran_sempro') }}" class="nav-link">Pendaftaran Sempro</a>
                </li>                                                
                <li class="nav-item">
                  <a href="{{ url ('penguji_sempro') }}" class="nav-link">Set Penguji Sempro</a>
                </li>                                                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#report-sempro" role="button" aria-expanded="false" aria-controls="report-sempro">
              <i class="link-icon" data-feather="cloud-off"></i>
              <span class="link-title">Reports</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <!-- <div class="collapse" id="report-sempro">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/error/404.html" class="nav-link">Pengajuan Topik</a>
                </li>
              </ul>
            </div> -->
          </li>
          <li class="nav-item nav-category">Kompre</li>          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#master-kompre" role="button" aria-expanded="false" aria-controls="master-kompre">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Master</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="master-kompre">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/general/blank-page.html" class="nav-link">Blank page</a>
                </li>                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#trx-kompre" role="button" aria-expanded="false" aria-controls="trx-kompre">
              <i class="link-icon" data-feather="unlock"></i>
              <span class="link-title">Transactions</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="trx-kompre">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ url('data_prasyarat_ta') }}" class="nav-link">Data Prasyarat TA</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('status_skripsi') }}" class="nav-link">Status Skripsi</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('jadwal_skripsi') }}" class="nav-link">Jadwal Skripsi</a>
                </li>                
                <li class="nav-item">
                  <a href="{{ url('verifikasi_skripsi') }}" class="nav-link">Verifikasi Skripsi</a>
                </li>                
                <li class="nav-item">
                  <a href="{{ url('perpanjang_skripsi') }}" class="nav-link">Perpanjang Skripsi</a>
                </li>                
                <li class="nav-item">
                  <a href="{{ url('pendaftaran_skripsi') }}" class="nav-link">Pendaftaran Skripsi</a>
                </li>                
                <li class="nav-item">
                  <a href="{{ url('jadwal_penguji') }}" class="nav-link">Jadwal Skripsi</a>
                </li>                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#errorPages2" role="button" aria-expanded="false" aria-controls="errorPages2">
              <i class="link-icon" data-feather="cloud-off"></i>
              <span class="link-title">Reports</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
           <!--  <div class="collapse" id="errorPages2">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/error/404.html" class="nav-link">404</a>
                </li>
                <li class="nav-item">
                  <a href="pages/error/500.html" class="nav-link">500</a>
                </li>
              </ul>
            </div> -->
          </li>          
          <li class="nav-item nav-category">System</li>                    
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#system-configuration" role="button" aria-expanded="false" aria-controls="system-configuration">
              <i class="link-icon" data-feather="cloud-off"></i>
              <span class="link-title">System Configuration</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="system-configuration">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ url('user_account_list') }}" class="nav-link">User Account List</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('user_group') }}" class="nav-link">User Group</a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('bidang_ilmu') }}" class="nav-link">Bidang Ilmu</a>
                </li>                
                <li class="nav-item">
                  <a href="{{ url('angkatan') }}" class="nav-link">Angkatan</a>
                </li>                
                <li class="nav-item">
                  <a href="{{ url('jurusan') }}" class="nav-link">Jurusan</a>
                </li>                
              </ul>
            </div>
          </li>           
        </ul>
      </div>
    </nav>
    <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted">Sidebar:</h6>
        <div class="form-group border-bottom">
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
              Light
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
              Dark
            </label>
          </div>
        </div>
        <div class="theme-wrapper">
          <h6 class="text-muted mb-2">Light Theme:</h6>
          <a class="theme-item active" href="dashboard-one.html">
            <img src="../assets/images/screenshots/light.jpg" alt="light theme">
          </a>
          <h6 class="text-muted mb-2">Dark Theme:</h6>
          <a class="theme-item" href="../demo_2/dashboard-one.html">
            <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
          </a>
        </div>
      </div>
    </nav>
    <!-- partial -->