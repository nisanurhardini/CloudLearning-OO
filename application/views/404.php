<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Teacher | Cloud Learning</title>
      <!-- Icon -->

      <!-- Fonts -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Vendors -->
      <link href="css/jquery-ui/jquery-ui.min.css" rel="stylesheet">
      <link href="css/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
      <!-- Styles - CSS -->
      <link href="css/main.css" rel="stylesheet">
   </head
><body>
   <!-- TOP NAVIGATION -->
   <div class="container">
      <!-- Navbar 1 -->
      <nav class="navbar navbar-fixed-top navbar-1">
         <div class="container">      
            <ul class="nav nav-inline pull-xs-right">
               <li class="nav-item">
                 <a class="nav-link tag" href="#"><i class="fa fa-link fa-sm"></i>  Cara Kerja</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link tag" href="#"><i class="fa fa-support fa-sm"></i>  Bantuan</a>
               </li>
            </ul>
         </div><!-- /.container -->
      </nav><!-- Navbar 1 -->
      <!-- Navbar 2 -->
      <nav class="navbar navbar-fixed-top bg-faded navbar-2 clearfix">
         <div class="container">
            <a class="navbar-brand" href="index.html">Cloud Learning</a>
            <ul class="nav navbar-nav"> 
               <li class="nav-item cari">
                  <form class="form-inline" action="#">
                     <div class="input-group cari-input-group">
                        <input type="text" class="form-control" placeholder="Cari"/>
                        <span class="input-group-btn">
                           <button class="btn btn-green"><i class="fa fa-search fa-md"></i></button>
                        </span>
                     </div>
                  </form>
               </li>
            </ul>
            <ul class="nav navbar-nav pull-xs-right">
               <!-- Belum Terdaftar -->
               <li class="nav-item">
                 <a class="nav-link" href="#"> Masuk</a>
               </li>
               <li class="nav-item">
                 <a class="btn btn-green" href="#"> Daftar</a>
               </li>
               <!-- Belum Terdaftar -->
            </ul>
         </div>
      </nav><!-- Navbar 2 -->
      </nav>
   </div><!-- TOP NAVIGATION -->

      <!-- MAIN CONTENT -->
   <div id="index" class="container-fluid main-wrapper pattern pattern-sm">
      <div class="container">
         <!-- header -->
         <div class="row header">
            <div class="col-sm-12">
               <h1 class="text-xs-center"> 404</h1>
               <p class="text-xs-center tag-text detail-konten">
                  <bold>Halaman tidak ditemukan</bold> <br>
                  Maaf, halaman yang anda tuju tidak ditemukan <br> <br>
                  <a href="index.html" ><button type="button" class="btn btn-custom btn-primary" data-toggle="modal" data-target="#lupaSandiModal">Kembali ke halaman utama</button> </a>
               </p>
            </div>   
         </div>
      </div> 
   </div><!--/ MAIN CONTENT -->

   <!-- FOOTER -->
   <footer>       
      <div class="container">
         <div class="row">
            <div class="col-sm-4">
               <a class="navbar-brand col-sm-12" href="#">Cloud Learning</a>
               <p class="copyright">&copy; 2017 <span class="nawarin-text">Cloud Learning</span> is a global education network that helps connect all learners with the peoples and resources needed to reach their full potential.</p>
            </div>
            <div class="col-sm-3">
               <ul class="nav">
                  <li class="nav-item">
                     <h6 class="nav-link text-uppercase" href="#"><strong>Tentang</strong></h6>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Tentang Cloud Learning</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Teacher</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Training</a>
                  </li>
               </ul>
            </div>
            <div class="col-sm-3">
               <ul class="nav">
                  <li class="nav-item">
                     <h6 class="nav-link text-uppercase" href="#"><strong>Bantuan</strong></h6>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Hubungi kami</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">FAQ</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Ketentuan</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Kebijakan privasi</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </footer> <!-- FOOTER -->


   <!-- MODALS : tambah group -->
   <div class="modal custom-modal sm fade" id="modal_tambah_group">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <button type="button" class="close btn-circle-sm" data-dismiss="modal" aria-label="Close">
               <i class="fa fa-times"></i>
            </button>
           <div class="modal-header">
              <h6 class="modal-title">Tambah Group</6>
            </div>
            <div class="modal-body clearfix">
               <form>
                  <div class="form-group row">
                     <label for="tambah_kelas" class="text-label col-sm-12">Kelas </label>
                     <div class="col-sm-7">
                        <input type="text" class="form-control " id="tambah_kelas">
                     </div>   
                  </div>
                  <button type="button" class="btn btn-custom btn-green pull-xs-right">Simpan</button>  
               </form>
            </div>
         </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->

   <!-- MODALS : tambah materi -->
   <div class="modal custom-modal sm fade" id="modal_tambah">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <button type="button" class="close btn-circle-sm" data-dismiss="modal" aria-label="Close">
               <i class="fa fa-times"></i>
            </button>
           <div class="modal-header">
              <h6 class="modal-title">Tambah Materi</6>
            </div>
            <div class="modal-body clearfix">
               <form>
                  <div class="form-group row">
                     <label for="tambah_nama" class="text-label col-sm-12">Nama Materi </label>
                     <div class="col-sm-7">
                        <input type="text" class="form-control " id="tambah_nama">
                     </div>   
                  </div>
                  <div class="form-group row">
                     <label for="tambah_file" class="text-label col-sm-12">File</label>
                     <div class="col-sm-7">
                        <input type="file" class="form-control" id="tambah_file">
                     </div>
                  </div>
                  <button type="button" class="btn btn-custom btn-green pull-xs-right">Simpan</button>  
               </form>
            </div>
         </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->

   <!-- MODALS : detail materi -->
   <div class="modal custom-modal sm fade" id="modal_detail">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <button type="button" class="close btn-circle-sm" data-dismiss="modal" aria-label="Close">
               <i class="fa fa-times"></i>
            </button>
           <div class="modal-header">
              <h6 class="modal-title">Ubah Materi</6>
            </div>
            <div class="modal-body clearfix">
               <dl class="col-md-6">
                 <dt>Nama Materi</dt>
                 <dd>Lorem Ipsum</dd>
             </dl>
             <dl class="col-md-6">
                 <dt>Date Modifier</dt>
                 <dd>04-09-2017</dd>
             </dl>
            </div>
         </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->

   <!-- MODALS : ubah materi -->
   <div class="modal custom-modal sm fade" id="modal_ubah">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <button type="button" class="close btn-circle-sm" data-dismiss="modal" aria-label="Close">
               <i class="fa fa-times"></i>
            </button>
           <div class="modal-header">
              <h6 class="modal-title">Ubah Materi</6>
            </div>
            <div class="modal-body clearfix">
               <form>
                  <div class="form-group row">
                     <label for="ubah_nama" class="text-label col-sm-12">Nama Materi </label>
                     <div class="col-sm-7">
                        <input type="text" class="form-control " id="ubah_nama" value="Lorem Ipsum">
                     </div>   
                  </div>
                  <div class="form-group row">
                     <label for="ubah_file" class="text-label col-sm-12">File</label>
                     <div class="col-sm-7">
                        <input type="file" class="form-control" id="ubah_file" placeholder="">
                     </div>
                  </div>
                  <button type="button" class="btn btn-custom btn-green pull-xs-right">Simpan</button>  
               </form>
            </div>
         </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->

   <!-- jQuery -->   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
   <!-- Bootstrap core JavaScript -->
   <script src="js/bootstrap/tether.min.js"></script>
   <script src="js/bootstrap/bootstrap.min.js"></script>
   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script src="js/bootstrap/ie10-viewport-bug-workaround.js"></script>

   <!-- Vendors -->
   <script src="js/SimpleStarRating.js"></script>
   <script src="js/jquery.easy-ticker.min.js"></script>
   <script src="js/jquery-ui/jquery-ui.min.js"></script>
   <script src="js/bootstrap-select/bootstrap-select.min.js"></script>
   <script src="js/elevatezoom-master/jquery.elevateZoom-3.0.8.min.js"></script>

   <!-- Initials javascripts -->
   <script type="text/javascript" src="js/page.init.js">
      // DATATABLE
       $(document).ready(function() {
           oTable = $('#tabel_data_materi').DataTable( {
               "dom": '<"toolbar">frtip',
                "bFilter": true
           } );
       });
   </script>
</body>
</html>