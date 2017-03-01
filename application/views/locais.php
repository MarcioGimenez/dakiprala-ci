<div class="container text-center">
	<div class="ads-728-90">
		<img src="http://www.cangerenoticias.com.br/wp-content/uploads/2016/06/Anuncio-728-x-90.png" class="img-responsive">
	</div>
</div>
<!-- inicio locais -->
<section id="locais">
	<div class="container locais text-center">
	<?php 
						if($locais){
						foreach ($locais as $key => $local) {
					
					?>
					
		<div class="col-md-6 col-sm-6 col-xs-12 local">
			<a href="<?=base_url().$local->tipo.'/'.urlSEO($local->titulo)?>">
			<div class="foto col-md-5">
				<img src="<?=$local->foto_quadrada?>" alt="<?=$local->titulo_foto?>" class="img-responsive" />
			</div>
			<div class="col-md-7 descricao">
				<h2><?=$local->titulo?></h2>
				<p><?= substr(strip_tags($local->descricao),0,170);?>...</p>
			</div>
</a>		
		</div>
		
<?php }} ?>
		<div class="col-sm-12 text-center">

			<nav aria-label="Page navigation">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							<span class="sr-only">Previous</span>
						</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">4</a></li>
					<li class="page-item"><a class="page-link" href="#">5</a></li>
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							<span class="sr-only">Next</span>
						</a>
					</li>
				</ul>
			</nav>

		</div>

	</div>
	<!-- Busca -->
	<section>
		<div class="container busca-centro">

			<div class="text-center busca">
				<label for="busca">Para onde você quer ir?&nbsp&nbsp </label>
				<input type="text" name="busca" class="input-busca" placeholder="Ex: Ubatuba" size="50">
				<button class="btn">Pesquisar</button>
			</div>

		</div>
	</section>
	<!-- Fim Busca -->
</section>
<!-- fim locais -->
<section id="ola">
	<div class="container links text-center">
		<div class="col-md-4 col-sm-12 col-xs-12">
			<div class="col-md-12 ola-convite">
				<div class="ola-nome">
			<img class="img-circle" src="https://clubeidg.com.br/application/public/imgs/profile-default.png" width="50" height="50">
				Olá Fulano!
				</div>

				<p class="text-justify">Nos conte sua experiência, como foi sua ultima viagem?</p>
				
				<button class="btn-verde pull-right">DÊ A SUA OPINIÃO</button>
			</div>
		</div>
		<div class="col-md-8 text-center">
			<img src="http://www.cangerenoticias.com.br/wp-content/uploads/2016/06/Anuncio-728-x-90.png" class="img-responsive">
		</div>
	</div>
</section>
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
<!-- fim links proximos -->
