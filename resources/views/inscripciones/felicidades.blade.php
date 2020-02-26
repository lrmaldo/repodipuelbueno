 
 
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DiME</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900') }}" rel="stylesheet">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i') }}" rel="stylesheet">
  <script src=" {{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}" crossorigin="anonymous"></script>
  <!-- Custom styles for this template -->
  <link href=" {{ asset('css/one-page-wonder.min.css') }}" rel="stylesheet">
  <link href=" {{ asset('css/animate.css') }}" rel="stylesheet">
</head>

<body>

<style>
  .modal-dialog {
      max-width: 800px;
      margin: 30px auto;
  }



.modal-body {
  position:relative;
  padding:0px;
}
.close {
  position:absolute;
  right:-30px;
  top:0;
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
}
</style>
  <!-- Navigation -->
  <!--nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">DiME</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
         
        </ul>
      </div>
    </div>
  </nav-->
 
  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container animated  bounceInDown">
        <h1 class="masthead-heading mb-0 ">Registro Exitoso</h1>
        <h2 class="masthead-subheading mb-0">Hola {{$nombre}} tu lugar ya esta apartado no faltes</h2>
        <h2 class="masthead-subheading mb-0">Te hemos enviado los datos del evento a tu correo</h2>
        <p >Te invitamos a ver el siguiente video</p>
       
        <button type="button" class="btn btn-primary btn-xl rounded-pill mt-5 video-btn animated infinite bounce delay-3s " data-toggle="modal" data-src="https://www.youtube.com/embed/K2Q5X9XIKKU" data-target="#myModal">
  Ver video
</button>
  
      <p >Fecha y hora: Miércoles 25 de Marzo del 2020, al as <strong>11:00am</strong> </p>
      <p> Lugar: Auditorio Casa de la cultura San Juan Bautista Tuxtepec.</p>
      <div class="map-responsive">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.7849592994307!2d-96.13184535946414!3d18.087666991920607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c3e6f4a5783a43%3A0x9dc8e6a5818fa20d!2sCasa%20de%20la%20Cultura%20Dr.%20V%C3%ADctor%20Bravo%20Ahuja!5e0!3m2!1ses!2smx!4v1582654914607!5m2!1ses!2smx" width="700" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
      </div>

      <p> Te vemos pronto</p>
      
    </div>
  
    <div class="bg-circle-2 bg-circle animated   bounceInDown delay-2s"></div>
    <div class="bg-circle-3 bg-circle animated   bounceInDown delay-2s"></div>
    <div class="bg-circle-4 bg-circle animated   bounceInDown delay-2s"></div>
  </header>
<div >



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      
      <div class="modal-body">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
</div>
        
        
      </div>

    </div>
  </div>
</div> 








<script>
 $(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);
  
// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
    
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
    })
      
    
    
    // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src',$videoSrc); 
    }) 
        
        
    
    
      
      
    // document ready  
    });
    

</script>



</div>
  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Sattlink 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
