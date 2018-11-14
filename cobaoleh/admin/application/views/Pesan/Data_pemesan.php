  <?php $this->load->view('Home/js'); ?>
  <?php $this->load->view('Home/Main_header'); ?>
  <div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Data Pemesanan</h4>
            <div class="row">
                <div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="card-title">Data Pemesanan</div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
                      <th>No. ID</th>
                      <th>Nama</th>
                      <th>No. Telp</th>
                      <th>Tanggal Order</th>
                      <th>Detail Alamat</th>
                      <th>Status</th>
                      <th width="115px">Action</th>
            </tr>
          </thead>
          <tbody>

            <?php 
              $no = 1;
              foreach ($data_transaksi as $transaksi) 
              {
            ?>

            <tr>
               <td> <?php echo $transaksi -> ID_TRANSAKSI ?> </td>
                    <td> <?php echo $transaksi -> ID_PELANGGAN; ?> </td>
                    <td> <?php echo $transaksi -> No_telp; ?> </td>
                    <td> <?php echo date("d F Y", strtotime($transaksi -> Tgl_order)); ?> </td>
                    <td> <?php echo $transaksi -> Detail_alamat; ?> </td>
                      <td> <?php echo $transaksi -> status; ?> </td>
                    <td width="115px"> 
                    
                      <h5>
                        <a class="btn btn-success" title="Kirim Pesanan" onclick="return confirm('Anda ingin mengirim barang ini ?')" href="./bin/fungsi_update_order.php?id=<?php echo $transaksi -> kd_order; ?>" ><i class="fa fa-truck" style="color: #fff" ></i> </a > 
                        <a class="btn btn-primary" title="Lihat Barang" name=detail href="./?page=detail&id=<?php echo $transaksi -> kd_order ?>"> <i class="fa fa-eye" ></i> </a>
                      </h5> 
                    </td>
            </tr>

            <?php

              }

            ?>

          </tbody>

        </table>

      </div>

    </div>
  </div>
  <?php $this->load->view('Sidebar/datapemesanan'); ?>