<div class="container" id="daftar-sukses">
    <p class="h2">Informasi Untuk Login</p>
    <hr>

    <div class="alert alert-success alert-dismissible" role="alert">
        <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        Pendaftaran Berhasil.
    </div>

    <p class="text-danger"><strong>Penting :</strong></p>
    <p>Pendaftaran akun Anda sudah berhasil. Catat semua informasi di bawah ini dengan benar.</p>
    <p>Gunakan akun di bawah ini untuk login dan mengisi Form-Form yang diinginkan.</p>

    <div class="row">
        <div class="col-xs-4 col-md-2">No Pemohon</div>
        <div class="col-xs-8 col-md-10">: <strong><?php echo $this->session->userdata('nomor_pemohon'); ?></strong></div>
    </div>

    <div class="row">
        <div class="col-xs-4 col-md-2">Username</div>
        <div class="col-xs-8 col-md-10">: <strong><?php echo $this->session->userdata('username'); ?></strong></div>
    </div>

    <div class="row">
        <div class="col-xs-4 col-md-2">Password</div>
        <div class="col-xs-8 col-md-10">: <strong><?php echo $this->session->userdata('password'); ?></strong></div>
    </div>

    <div class="row">
        <div class="col-xs-4 col-md-2">NO HP </div>
        <div class="col-xs-8 col-md-10">: <strong><?php echo $this->session->userdata('no_hp'); ?></strong></div>
    </div>


</div> <!-- container -->