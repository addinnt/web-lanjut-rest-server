<div class="container">
<div class ="row mt-3">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
           <b>Form Tambah Data Siswa</b>
        </div>
        <div class="card-body">
            <!-- $this->form_validation->set_message('rule,'eror message'); -->
            <?php echo validation_errors(); ?> 
            <form action="" method="post">
            <div class="form-group">
                <label form="id"> <b> id </b></label>
                <input type="id" class="form-control" id="id" name="id">
            </div>
            <div class="form-group">
                <label form="nama">  <b>Nama</b> </label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label form="nim">  <b>Nim </b> </label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>
            <div class="form-group">
            <label form="alamat"> <b> alamat</b> </label>
            <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
        </form>
        </div>
        </div>
    </div>
 </div>
</div>