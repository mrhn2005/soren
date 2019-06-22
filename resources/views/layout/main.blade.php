<!DOCTYPE html>
<html lang="en" style="height:100%; ">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
    شرکت سورن صنعت نوتاش  
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="/photo/logo1.png">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency1.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/my.css" type="text/css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css" type="text/css">
  </head>

  <body id="page-top" style="height:100%">

    <!-- Navigation -->
    @yield('content')
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
    <script type="text/javascript" src="/js/my.js"></script>
    <script>
    lightbox.option({
      'albumLabel': '',
      
    })
    </script>
    <script>


 $(document).ready(function(){
	 $("button[name = 'submit_request']").click(function(e){
	     e.preventDefault();
        $.ajax({
          url: "{{route('question.add')}}",
          method: 'post',
          data:{
            name: $("input[name = 'name']").val(),
            phone: $("input[name = 'phone']").val(),
            email: $("input[name = 'email']").val(),
            message: $("textarea[name = 'message']").val(),
            _token: "{{csrf_token()}}"
          },
          success: function(response){
          	console.log(response);
              $("#fixed-message").text(response);
              $("input[name = 'name']").val('');
              $("input[name = 'phone']").val('');
              $("input[name = 'email']").val('');
              $("textarea[name = 'message']").val('');
              //$("#mini-cart").html(response);
              $(".myAlert-top2").removeClass('alert-danger').show();
               
              setTimeout(function(){
                    $(".myAlert-top2").hide(); 
                  }, 4000);
               
 
          },
          error: function(xhr){
          	
            // var errors=xhr.responseJSON;
            // var error=errors.name[0];
            // console.log(xhr.responseText);
            // $('#contact').html(xhr.responseText);
            $("#fixed-message").text('لطفا ابتدا پیام خود را ثبت کنید');
              //$("#mini-cart").html(response);
              $(".myAlert-top2").addClass('alert-danger').show();
               
              setTimeout(function(){
                    $(".myAlert-top2").hide(); 
                  }, 4000);

          }
          
          
        });
   
    });
 });

    </script>
    <script>
			function myMap() {
			  var myCenter = new google.maps.LatLng(35.732318, 51.825407);
			  var mapCanvas = document.getElementById("map");
			  var mapOptions = {center: myCenter, zoom: 13};
			  var map = new google.maps.Map(mapCanvas, mapOptions);
			  var marker = new google.maps.Marker({position:myCenter});
			  marker.setMap(map);
			
			  var infowindow = new google.maps.InfoWindow({
			    content: "سورن صنعت نوتاش"
			  });
			  infowindow.open(map,marker);
			}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5DPZQM-IcQiRm-_m0sMydLGwHpRwGz9I&callback=myMap"></script>
		<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
		<script>
		    window.sr = ScrollReveal();
            sr.reveal('.animateit', { duration: 2000 });
            sr.reveal('.portfolio-item',{ duration: 1500,rotate: { x: 0, y: 90, z: 0 } } );
            sr.reveal('.team-member',{ duration: 1500,rotate: { x: 90, y:0 , z: 0 } } );
            sr.reveal('.owl-carousel',{ duration: 1500,origin: 'right',distance: '20px', } );
            sr.reveal('.contactanime',{ duration: 1500,origin: 'left',distance: '20px', } );
            sr.reveal('.addreseanime',{ duration: 1500,origin: 'right',distance: '20px', } );
            sr.reveal('.mapanime',{ duration: 1500,origin: 'left',distance: '20px', } );
            
		</script>
  </body>

</html>
