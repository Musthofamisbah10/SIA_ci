<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-tachometer-alt"></i>
    Dashborad
  </div>
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Selamat Datang</h4>
      <p>Selamat Datang <strong><?php echo $username; ?></strong> di SIA_Ci iseng iseng, Anda Login Sebagai <strong><?php echo $level; ?></strong>. Anda dapat menggunakan firut-fitur yang ada di SIA_Ci</p>
      <hr>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
        Control Panel
      </button>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Control Panel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
            <div class="col-md-3 text-center">
              <a href="<?php echo base_url(); ?>">
                <i class="fas fa-3x fa-user-graduate text-info"></i>
                <p class="nav-link small text-info">Mahasiswa</p>
              </a>
            </div>
            <div class="col-md-3 text-center">
              <a href="<?php echo base_url(); ?>">
                <i class="fas fa-3x fa-calendar-alt text-info"></i>
                <p class="nav-link small text-info">Tahun Akademik</p>
              </a>
            </div>
            <div class="col-md-3 text-center">
              <a href="<?php echo base_url(); ?>">
                <i class="fas fa-3x fa-edit text-info"></i>
                <p class="nav-link small text-info">KRS</p>
              </a>
            </div>
            <div class="col-md-3 text-center">
              <a href="<?php echo base_url(); ?>">
                <i class="fas fa-3x fa-file-alt text-info"></i>
                <p class="nav-link small text-info">KHS</p>
              </a>
            </div>
          </div><hr>

           <div class="row">
              <div class="col-md-3 text-center">
                <a href="<?php echo base_url(); ?>">
                  <i class="fas fa-3x fa-sort-numeric-down text-info"></i>
                  <p class="nav-link small text-info">Input Nilai</p>
                </a>
              </div>
              <div class="col-md-3 text-center">
                <a href="<?php echo base_url(); ?>">
                  <i class="fas fa-3x fa-print text-info"></i>
                  <p class="nav-link small text-info">Cetak Transkip</p>
                </a>
              </div>
              <div class="col-md-3 text-center">
                <a href="<?php echo base_url(); ?>">
                  <i class="fas fa-3x fa-list-ul text-info"></i>
                  <p class="nav-link small text-info">Kategori</p>
                </a>
              </div>
              <div class="col-md-3 text-center">
                <a href="<?php echo base_url(); ?>">
                  <i class="fas fa-3x fa-bullhorn text-info"></i>
                  <p class="nav-link small text-info">Info Kampus</p>
                </a>
              </div>
            </div><hr>

             <div class="row">
              <div class="col-md-3 text-center">
                <a href="<?php echo base_url(); ?>">
                  <i class="fas fa-3x fa-info-circle text-info"></i>
                  <p class="nav-link small text-info">Tentang Kampus</p>
                </a>
              </div>
              <div class="col-md-3 text-center">
              <a href="<?php echo base_url(); ?>">
                <i class="fas fa-3x fa-id-card-alt text-info"></i>
                <p class="nav-link small text-info">Identitas</p>
              </a>
            </div>
              <div class="col-md-3 text-center">
                <a href="<?php echo base_url(); ?>">
                  <i class="fas fa-3x fa-laptop text-info"></i>
                  <p class="nav-link small text-info">Fasilitas</p>
                </a>
              </div>
              <div class="col-md-3 text-center">
                <a href="<?php echo base_url(); ?>">
                  <i class="fas fa-3x fa-images text-info"></i>
                  <p class="nav-link small text-info">Gallery</p>
                </a>
              </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
        </div>
      </div>
    </div>
  </div>