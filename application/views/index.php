<?php $this->load->view('element/header'); ?>

      <!-- MAIN CONTENT -->
      <div id="index" class="container-fluid main-wrapper pattern pattern-sm">
         <div class="container">
            <!-- header -->
            <div class="row header">
               <div class="col-sm-12">
                  <h1 class="text-xs-center"> Bergabunglah bersama kami</h1>
                  <p class="text-xs-center tag-text detail-konten"><bold>Cara teraman dan termudah </bold> <br>
                     bagi edukator untuk terhubung dan berkolaborasi dengan mahasiswa, dosen, dan satu sama lain.<br> <br>
                     <a href="masuk_mahasiswa.php" data-toggle="modal" data-target="#modal_mahasiswa"><button type="button" class="btn btn-custom btn-primary" >Saya Mahasiswa</button> </a>
                     <a href="masuk_dosen.php" data-toggle="modal" data-target="#modal_dosen"><button type="button" class="btn btn-custom btn-green">Saya Dosen</button> </a>
                  </p>
               </div>   
            </div>
         </div> 
      </div><!--/ MAIN CONTENT -->
      
      <!-- MODALS : login mahasiswa -->
      <div class="modal custom-modal sm fade" id="modal_mahasiswa">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <button type="button" class="close btn-circle-sm" data-dismiss="modal" aria-label="Close">
                  <i class="fa fa-times"></i>
               </button>
              <div class="modal-header">
                 <h6 class="modal-title text-xs-center">Masukkan Data Secara Benar</6>
                 <p><?php $msg_error ?></p>
               </div>
               <div class="card custom-card card-block">
                  <form action="" method="post">
                     <div class="form-group">
                        <label for="nim" class="text-label">NIM</label>
                        <div class="input-group">
                           <input type="number" class="form-control" id="nim" name="nim" placeholder="130xxxxxxx" aria-describedby="sizing-addon2" required>
                           <i class="fa fa-user input-group-addon" id="sizing-addon2"></i>
                        </div>
                     </div>
                     <div class="form-group">
                       <label for="sandi" class="text-label">Password</label>
                       <div class="input-group">
                          <input type="password" class="form-control" id="sandi" name="sandi" placeholder="" aria-describedby="sizing-addon2" required>
                          <i class="fa fa-lock input-group-addon" id="sizing-addon2"></i>
                        </div>
                        <a href="lupa-sandi.html" class="text-link text-addon">Lupa kata sandi?</a>
                     </div>
                     <div class="form-group clearfix">
                        <div class="pull-xs-left form-addon">
                           <label class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-indicator"></span> 
                              <span class="custom-control-description">Ingat saya</span>
                           </label>
                        </div>
                        <button type="submit" class="btn btn-custom pull-xs-right btn-green" id="masuk_mhs" name="masuk_mhs">Masuk </button>  
                     </div>     
                     <div class="text-xs-center">
                        <a href="daftar_mahasiswa.php" class="text-label text-link">Belum punya akun? daftar</a>
                     </div>
                  </form>
               </div>
            </div><!-- /.modal-content -->
         </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

      <!-- MODALS : login dosen -->
      <div class="modal custom-modal sm fade" id="modal_dosen">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <button type="button" class="close btn-circle-sm" data-dismiss="modal" aria-label="Close">
                  <i class="fa fa-times"></i>
               </button>
              <div class="modal-header">
                 <h6 class="modal-title text-xs-center">Masukkan Data Secara Benar</6>
               </div>
               <div class="modal-body clearfix">
                  <div class="card custom-card card-block">
                     <form action="" method="post">
                        <div class="form-group">
                           <label for="nid" class="text-label">NID</label>
                           <div class="input-group">
                              <input type="number" class="form-control" id="nid" name="nid" placeholder="998xxxxxxx" aria-describedby="sizing-addon2" required>
                              <i class="fa fa-user input-group-addon" id="sizing-addon2"></i>
                           </div>
                        </div>
                        <div class="form-group">
                          <label for="sandi" class="text-label">Password</label>
                          <div class="input-group">
                             <input type="password" class="form-control" id="sandidosen" name="sandidosen" placeholder="" aria-describedby="sizing-addon2" required>
                             <i class="fa fa-lock input-group-addon" id="sizing-addon2"></i>
                           </div>
                           <a href="lupa-sandi.html" class="text-link text-addon">Lupa kata sandi?</a>
                        </div>
                        <div class="form-group clearfix">
                           <div class="pull-xs-left form-addon">
                              <label class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input">
                                 <span class="custom-control-indicator"></span> 
                                 <span class="custom-control-description">Ingat saya</span>
                              </label>
                           </div>
                           <button type="submit" class="btn btn-custom pull-xs-right btn-green" id="masuk_dsn" name="masuk_dsn">Masuk </button>  
                        </div>     
                        <div class="text-xs-center">
                           <a href="daftar_dosen.php" class="text-label text-link">Belum punya akun? daftar</a>
                        </div>
                     </form>
                  </div>
               </div>
            </div><!-- /.modal-content -->
         </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

      <?php $this->load->view('element/header'); ?>