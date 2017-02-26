
			<!-- inicio slider -->
			<section id="slider">
				<div class="container slider">
					<div class="col-md-12 text-center">
						<div id="carousel-div" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->

							<ol class="carousel-indicators" style="bottom: -30px !important;">
								<li data-target="#carousel-div" data-slide-to="0" class="active" style="background-color: #000;"></li>
								<li data-target="#carousel-div" data-slide-to="1" style="background-color: #000;"></li>

							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
					
					<?php 
						if($estados){
						foreach ($estados as $key => $estado) {
					
					?>
								<div class="item active">
									<img src="<?=$estado->foto_retangular?>" alt="<?=$estado->titulo_foto?>" class="img-responsive" widith="1092" height="364">
									<div class="carousel-caption">

									</div>
								
									</div>
								<?php }}?>
								
							</div>

							<!-- Controls -->
							<a class="left carousel-control" href="#carousel-div" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Anterior</span>
							</a>
							<a class="right carousel-control" href="#carousel-div" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Próximo</span>
							</a>
						</div>
					</div>
				</div>
			</section> <!-- fim slider -->
			<!-- inicio locais -->
			<section id="locais">
				<div class="container locais text-center">
					<?php 
						if($estados){
						foreach ($estados as $key => $estado) {
					
					?>

					<div class="col-md-3 col-sm-6 col-xs-12 local">
						<div class="foto">
							<img src="<?=$estado->foto_quadrada?>" width="200" height="130" />
						</div>
						<h2><?=$estado->titulo?></h2>
						<p><?= substr(strip_tags($estado->descricao),0,70);?>...</p>
					</div>

					<?php } }?>
					
				
				</div>
			</section>
			<!-- fim locais -->
			<section id="links">
				<div class="container links text-center">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<h2>Qual seu tipo de Viagem ?</h2>
						<div class="col-md-5 col-md-offset-1 text-left pull-left">
							<a href="#"><h4>Crianças</h4></a>
							<a href="#"><h4>Natureza</h4></a>
							<a href="#"><h4>Lua de Mel</h4></a>
							<a href="#"><h4>Praias</h4></a>
						</div>
						<div class="col-md-6 text-left pull-right">
							<a href="#"><h4>Verão</h4></a>
							<a href="#"><h4>Outono</h4></a>
							<a href="#"><h4>Inverno</h4></a>
							<a href="#"><h4>Primavera</h4></a>
						</div>
					</div>
					<div class="col-md-8 text-center">
						<img src="http://www.cangerenoticias.com.br/wp-content/uploads/2016/06/Anuncio-728-x-90.png" class="img-responsive">
					</div>
				</div>
			</section>
