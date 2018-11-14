  <?php $this->load->view('Home/js'); ?>
  <?php $this->load->view('Home/Main_header'); ?>
  <div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Pemesanan</h4>
            <h4 class="page-title">Data Pemesanan</h4>
            <div class="row">
                <div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="card-title">Data Pesanan</div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No. </th>
              <th>No. Pesanan</th>
              <th>Status Upload</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              foreach ($data_upload as $upload) 
              {
            ?>
            <tr>
              <th scope="row"><?php echo $upload -> ID_UPLOAD ?></th>
              <td><?php echo $upload -> ID_DETAILTRANSAKSI ?></td>
              <td><?php echo $upload -> STATUS ?></td>
              <td><?php echo $upload -> IMG ?></td>
              <td><a href="#"><button class="btn btn-primary">SUDAH UPLOAD</button></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php $this->load->view('Sidebar/upload_bukti'); ?>
  <?php $this->load->view('Home/Footer'); ?>