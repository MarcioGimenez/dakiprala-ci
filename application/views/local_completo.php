<?php if($local){ ?>

<div class="container text-center">
	<div class="ads-728-90">
		<img src="http://www.cangerenoticias.com.br/wp-content/uploads/2016/06/Anuncio-728-x-90.png" class="img-responsive">
	</div>
</div>
<!-- inicio locais -->
<section id="locais">
	<div class="container local-descricao text-center">
		<div class="text-center col-md-12 titulo-locais"><h1><?=$local[0]->titulo?></h1> </div>
		<div class="col-md-12 text-justify">
			<img align="left" style="margin-right: 10px;" src="<?=$local[0]->foto_quadrada?>"  alt="<?=$local[0]->titulo_foto?>" width="280" height="220">
			<?=$local[0]->descricao?>
		</div>

	</div>

</section>
<!-- fim locais -->

<!-- Mapa -->
<section>
	<div class="container">
	<div id="map" class="col-md-8 map"></div>
	<div class="col-md-4 ad-quadrado" id="ad-quadrado">
		<img src="http://www.diariopalmbeach.com/noticias/soccer/imagenes/anuncio-336-x-280.png" class="img-responsive">
	</div>
	</div>
</section>
<!-- Fim Mapa -->
<!-- links proximos-->
<section>
	<div class="container links-proximos">
		<div class="col-md-3">
			<p class="text-center">São Paulo</p>
			<ul >
				<li><a href="#" >Carapicuiba</a></li>
				<li><a href="#" >Cotia</a></li>
				<li><a href="#" >Vargem Grande Paulista</a></li>
				<li><a href="#" >São Roque</a></li>
				<li><a href="#" >Indaiatuba</a></li>
				<li><a href="#" >Carapicuiba</a></li>
				<li><a href="#" >Cotia</a></li>
				<li><a href="#" >Vargem Grande Paulista</a></li>
				<li><a href="#" >São Roque</a></li>
				<li><a href="#" >Indaiatuba</a></li>
			</ul>
		</div>
		<div class="col-md-3">
			<p class="text-center">Rio de Janeiro</p>
			<ul >
				<li><a href="#" >Carapicuiba</a></li>
				<li><a href="#" >Cotia</a></li>
				<li><a href="#" >Vargem Grande Paulista</a></li>
				<li><a href="#" >São Roque</a></li>
				<li><a href="#" >Indaiatuba</a></li>
				<li><a href="#" >Carapicuiba</a></li>
				<li><a href="#" >Cotia</a></li>
				<li><a href="#" >Vargem Grande Paulista</a></li>
				<li><a href="#" >São Roque</a></li>
				<li><a href="#" >Indaiatuba</a></li>
			</ul>
		</div>
		<div class="col-md-3">
			<p class="text-center">Alagoas</p>
			<ul >
				<li><a href="#" >Carapicuiba</a></li>
				<li><a href="#" >Cotia</a></li>
				<li><a href="#" >Vargem Grande Paulista</a></li>
				<li><a href="#" >São Roque</a></li>
				<li><a href="#" >Indaiatuba</a></li>
				<li><a href="#" >Carapicuiba</a></li>
				<li><a href="#" >Cotia</a></li>
				<li><a href="#" >Vargem Grande Paulista</a></li>
				<li><a href="#" >São Roque</a></li>
				<li><a href="#" >Indaiatuba</a></li>
			</ul>
		</div>
		<div class="col-md-3">
			<p class="text-center">Ceará</p>
			<ul >
				<li><a href="#" >Carapicuiba</a></li>
				<li><a href="#" >Cotia</a></li>
				<li><a href="#" >Vargem Grande Paulista</a></li>
				<li><a href="#" >São Roque</a></li>
				<li><a href="#" >Indaiatuba</a></li>
				<li><a href="#" >Carapicuiba</a></li>
				<li><a href="#" >Cotia</a></li>
				<li><a href="#" >Vargem Grande Paulista</a></li>
				<li><a href="#" >São Roque</a></li>
				<li><a href="#" >Indaiatuba</a></li>
			</ul>
		</div>
	</div>
</section>
<script>
	function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
        	center: {lat: -34.397, lng: 150.644},
        	scrollwheel: false,
        	zoom: 8
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANymLp_H22SNB0xI-xspvyR0BlqsuRYDw&callback=initMap"
async defer></script>
<!-- fim links proximos -->

<?php }else{ ?>
<h3 align="center">Desculpe, não encontramos este local cadastrado</h3>
<?php } ?>