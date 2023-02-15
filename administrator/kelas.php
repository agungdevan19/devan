<?php
session_start();

if ($_SESSION['level'] == "") {
  header("location:../login.php?info=login");
}
?>
<?php
include '../layout/header.php';
include '../layout/navbar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Kelas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="col-lg-12">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <div class="row">
              <div class="col-6">

              </div>
              <div class="col-6 text-right">
                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah">
                  <i class="fas fa-plus"></i>
                  Tambah Data
                </a>
              </div>
            </div>
            <h4>Data Kelas</h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama Kelas </th>
                  <th>Kompetensi Keahlian</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>Nama Kelas </td>
                  <td>Kompetensi Keahlian</td>
                  <td>
                    <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-hapus">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <div class="modal fade" id="modal-edit">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Edit Data Kelas</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label>Nama Kelas</label>
                            <input type="text" name="name_kelas" class="form-control" placeholder="Masukan Nama Kelas">
                          </div>
                          <div class="form-group">
                            <label>Kompetensi Keahlian</label>
                            <input type="text" name="kompetensi_keahlian" class="form-control" placeholder="Masukan Kompetensi Keahlian">
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="modal-hapus">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Hapus Data Kelas</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Apakah Anda Yakin akan menghapus data ini!!!</p>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        <button type="button" class="btn btn-primary">Hapus</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="modal-tambah">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Kelas</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label> Nama Kelas</label>
                            <input type="text" name="nama_kelas" class="form-control" placeholder="Masukan Nama Kelas">
                          </div>
                          <div class="form-group">
                            <label> Kompetensi Keahlian</label>
                            <input type="text" name="kompetensi_keahlian" class="form-control" placeholder="Masukan Kompetensi Keahlian">
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Edit</button>
                          </div>
                        </form>
                      </div>
                    </div>

                  </div>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include '../layout/footer.php';
?>