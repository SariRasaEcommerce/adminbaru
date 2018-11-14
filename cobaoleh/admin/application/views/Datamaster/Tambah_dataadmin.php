<?php $this->load->view('Home/js'); ?>
<?php $this->load->view('Home/Main_header'); ?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
                <h4 class="page-title">Data Admin</h4>
            <div class="row">
                <div class="col-md-12">
                        <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Form Tambah Data Admin</div>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="<?php echo base_url(). 'index.php/Data_admin/create'; ?>" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="pillInput">Nama Admin</label>
                                                <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan Nama Lengkap Anda" name="admin">
                                            </div>
                                            <div class="form-group">
                                                <label for="pillInput">Alamat</label>
                                                <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan Alamat" name="alamat">
                                            </div>
                                            <div class="form-group">
                                                <label for="pillInput">No. Telp</label>
                                                <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan No Telp" name="telp">
                                            </div>
                                            <div class="form-group">
                                                <label for="pillInput">Email</label>
                                                <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan Email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="pillInput">Password</label>
                                                <input type="text" class="form-control input-pill" id="pillInput" placeholder="Masukkan Password" name="pass">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Masukkan gambar
                                                </label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img" accept="images/*">
                                            </div>                                         
                                        
                                        </div>
                                        <div class="card-action">
                                            <button class="btn btn-success" type="submit" name="btnSubmit">Submit</button>
                                            <button class="btn btn-danger">Cancel</button>
                                        </div>
                                        </form>
                                </div>
                    </div>
<?php $this->load->view('Sidebar/dataadmin'); ?>
<?php $this->load->view('Home/Footer'); ?>