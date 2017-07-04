<?php 
/*Template Name: Contact*/


get_header(); 

?>

    <div class="content-main" id="page-contact">

	    <?php if (has_post_thumbnail( $post->ID )) : ?>
	      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	      <div class="splash-block" style="background-image: url('<?php echo $image[0] ?>');"></div>
	    <?php endif; ?>


      <div id="block1" class="block bg-blue">
      	<div class="container">
      		<p class="text-title text-white">Üzenet küldés</p>
      	</div>
        <div class="container">
	        <div class="row">

	        	<div class="col-md-6">
					<form>
					  <div class="form-group">
					    <label for="email">E-mail cím</label>
					    <input type="email" class="form-control" id="email" placeholder="E-mail cím">
					  </div>
					  <div class="form-group">
					    <label for="pwd">Név</label>
					    <input type="password" class="form-control" id="pwd" placeholder="Név">
					  </div>
					  <div class="form-group">
					    <label for="subject">Tárgy</label>
					    <input type="text" class="form-control" id="subject" placeholder="Tárgy">
					  </div>
					  <div class="form-group">
					    <label for="msg">Üzenet</label>
					    <textarea class="form-control" rows="5" id="msg" placeholder="Üzenet"></textarea>
					  </div>	
					  <div class="text-right">
					  	<button type="submit" class="btn btn-dark">Küldés</button>
					  </div>			  
					</form>        		
	        	</div>
	        	<div class="col-md-5 col-md-push-1">
	        		<div class="contact-info-box text-white">
	        			<p>Keyserve Informatikai és Szolgáltató Korlátolt Felelőségű Társaság</p>
	        			<ul>
	        				<li>Cím: 1052 Budapest, Régiposta utca 19.</li>
	        				<li>Telefon/Fax: +36(1)789-2110</li>
	        				<li>Kapcsolat: info@keyserve.hu</li>
	        			</ul>
	        			<p>Megközelítés</p>
	        			<ul>
	        				<li>Autóval:</li>
	        				<li>Tömegközlekedéssel:</li>
	        			</ul>
	        		</div>
	        	</div>
	        </div>
      	</div>
      </div>
      
      <div id="map-container" class="container-fluid no-padding relative">
      	<div id="map" style="min-height: 500px;">
	 		<script type="text/javascript">
				function initMap() {
				  var myLatLng = {lat: 47.494709, lng: 19.053130};

				  var map = new google.maps.Map(document.getElementById('map'), {
				    zoom: 16,
				    center: myLatLng,
				    disableDefaultUI: true
				  });

				  /*var marker = new google.maps.Marker({
				    position: myLatLng,
				    map: map,
				    title: 'Hello World!'
				  });*/

				  var contentString = '<div id="content">'+
		            '<div id="siteNotice">'+
		            '</div>'+
		            '<img src="prod/img/logo_color.png" height="53px"></img>' +
		            '</div>';

		        var infowindow = new google.maps.InfoWindow({
		          content: contentString
		        });
		        infowindow.setPosition(myLatLng);
				infowindow.open(map);

			}
	 		</script>
	 	</div>
	 	<!--div id="google-map-overlay"></div-->
      </div>

    </div>      
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWIHvV0JQ9Lb8ACkaR7TWVuxVADip8tOE&callback=initMap"></script>
<?php get_footer(); ?>