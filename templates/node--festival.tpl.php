	

	<div class="header header-filter">
    	<div class="capa">
    		<?php print views_embed_view('festival_capa', 'default', $nid); ?>
    	</div>
	</div>

	<div class="basic-info">
		<div class="container">
    		<?php //print views_embed_view('festival_info', 'default', $nid); ?> 

    		<!--div class="abas card">
				    <ul class="nav nav-tabs">
				      <li class="active sobre"><a href="#sobre" data-toggle="tab">Sobre o Festival</a></li>
				      <li class="excursoes"><a href="#excursoes" data-toggle="tab">Divulgue sua Excursão</a></li>
				      <li class="compra-ingresso"><a href="#compra-ingresso" data-toggle="tab">Compre Ingressos</a></li>
				      <li class="venda-ingresso"><a href="#venda-ingresso" data-toggle="tab">Venda seu Ingresso</a></li>
				      <li class="oferece-carona"><a href="#oferece-carona" data-toggle="tab">Ofereça Carona</a></li>
				      <li class="procura-carona"><a href="#procura-carona" data-toggle="tab">Procure Carona</a></li>
				    </ul>
			</div-->
    	</div>
    </div>
       

	<div class="conteudo">

	<div class="container">		

		<?php 

		global $messages;
		if($messages){ print $messages; } 

		?>

        <div class="row">			

			<div class="postagens">

				

				<div class="acoes">
				<div class="row">	

				<div class="col-sm-12">
					<h1><?php print $title; ?></h1>
					<?php print views_embed_view('festival_data', 'default', $nid); ?>					
				</div>

				<div class="col-sm-8">
					<div class="tab-content">					 

					<div class="tab-pane active" id="sobre">
			      			<div class="container-form">
			      				<?php print views_embed_view('festival_sobre', 'default', $nid); ?>
			      			</div>
				      </div>				      

				      <div class="tab-pane" id="excursoes">
					      	<div class="card">
					      		<h3>Você está organizando uma excursão para esse festival? Divulgue agora mesmo!</h3>
					      		<?php if($user->uid){ ?>
					      			<div class="container-form form-excursoes">
					      				
					      			</div>
					      		<?php } else { ?>
									<div class="aviso"><a href="http://partiufestival.com/user/register">Crie uma conta</a> ou <a href="http://partiufestival.com/user">faça login</a> para interagir com o público do Partiu Festival.</div>
								<?php } ?>
							</div>
				      </div>

				      <div class="tab-pane" id="compra-ingresso">
					      	<div class="card">
					      		<h3>Procurando ingressos para comprar? Deixe o seu recado!</h3>
					      		<?php if($user->uid){ ?>
				      			<div class="container-form form-compra">
				      				
				      			</div>
				      			<?php } else { ?>
									<div class="aviso"><a href="http://partiufestival.com/user/register">Crie uma conta</a> ou <a href="http://partiufestival.com/user">faça login</a> para interagir com o público do Partiu Festival.</div>
								<?php } ?>
							</div>
				      </div>

				      <div class="tab-pane" id="venda-ingresso">
					      	<div class="card">
					      		<h3>Você tem ingressos para esse festival? Então publique o seu anúncio e venda já!</h3>
					      		<?php if($user->uid){ ?>
				      			<div class="container-form form-venda">
				      				
				      			</div>	
				      			<?php } else { ?>
									<div class="aviso"><a href="http://partiufestival.com/user/register">Crie uma conta</a> ou <a href="http://partiufestival.com/user">faça login</a> para interagir com o público do Partiu Festival.</div>
								<?php } ?>
							</div>
				      </div>

				      <div class="tab-pane" id="procura-carona">
					      	<div class="card">
					      		<h3>Procurando carona para esse festival? Deixe aqui sua mensagem!</h3>
					      		<?php if($user->uid){ ?>
				      			<div class="container-form form-procura-carona">
				      				
				      			</div>
				      			<?php } else { ?>
									<div class="aviso"><a href="http://partiufestival.com/user/register">Crie uma conta</a> ou <a href="http://partiufestival.com/user">faça login</a> para interagir com o público do Partiu Festival.</div>
								<?php } ?>
							</div>
				      </div>

				       <div class="tab-pane" id="oferece-carona">
					       	<div class="card">
					       		<?php if($user->uid){ ?>
				      			<div class="container-form form-oferece-carona">
				      				<h3>Sobrando lugar no carro? Ofereça carona aqui!</h3>
				      			</div>
				      			<?php } else { ?>
									<div class="aviso"><a href="http://partiufestival.com/user/register">Crie uma conta</a> ou <a href="http://partiufestival.com/user">faça login</a> para interagir com o público do Partiu Festival.</div>
								<?php } ?>
							</div>
				      </div>
				      					      

			    	</div>
				</div>

				<div class="col-sm-4">					
					<div class="container-abas">
				    	<div class="abas">
							    <ul class="nav nav-tabs">
							      <!--li class="active sobre"><a href="#publicacoes" data-toggle="tab">Todas as<br/> Publicações</a></li-->
							      <li class="active sobre"><a href="#sobre" data-toggle="tab">Sobre o Festival</a></li>
							      <li class="excursoes"><a href="#excursoes" data-toggle="tab">Divulgue sua Excursão</a></li>
							      <!--li class="compra-ingresso"><a href="#compra-ingresso" data-toggle="tab">Compre Ingressos</a></li-->
							      <li class="venda-ingresso"><a href="#venda-ingresso" data-toggle="tab">Venda seu Ingresso</a></li>
							      <!--li class="oferece-carona"><a href="#oferece-carona" data-toggle="tab">Ofereça Carona</a></li-->
							      <li class="procura-carona"><a href="#procura-carona" data-toggle="tab">Procure Carona</a></li>
							      <?php //print views_embed_view('festival_info', 'default', $nid); ?>
							    </ul>
						</div>
					</div>
				</div>
					

				</div>	

				</div>							

			</div>				

        </div>	

		<!--div class="sobre">
			<?php //print views_embed_view('festival_sobre', 'default', $nid); ?>
		</div-->

	</div>

		<?php //if($user->uid){ ?>		

			 <div id="publicacoes">
			    <div class="container">
			    	<h2>Encontre pessoas oferecendo o que você procura</h2>
			    	<?php print views_embed_view('publicacoes_recentes_festival2', 'default'); ?>
			    </div>
			 </div>

		<?php //} ?>		

	</div>


	


		

  <div class="proximos-festivais">

    	<div class="container">
      	<h2>Próximos Festivais</h2>
      	<?php print views_embed_view('festivais_proximos', 'default'); ?>
      </div>

  </div>


  
     

<script type="text/javascript">

jQuery(document).ready(function ($) {

   var image = $('.views-field-field-imagem-de-capa img').attr('src');

      $('.header-filter .capa').css({ 
         'background-image': 'url('+ image +')'
      });    

  	

    /* seleciona o evento no form de resposta */
    var node_nid = Drupal.settings.nid;
    $(".form-item-field-evento-und select").val(node_nid);

    /* posiciona os forms nas abas */
    $('.shortcuts').prependTo('.conteudo .container');
    $('#block-formblock-compra-ingressos').appendTo('.form-compra');
    $('#block-formblock-venda-ingressos').appendTo('.form-venda');
    $('#block-formblock-excursao').appendTo('.form-excursoes');
    $('#block-formblock-procura-carona').appendTo('.form-procura-carona');
    $('#block-formblock-oferecendo-carona').appendTo('.form-oferece-carona');



    /*ajuste na area sobr o evento */

    if ( $('.view-festival-sobre .col-sm-4').children().length == 0 ) {
	  $('.view-festival-sobre .col-sm-8').css('width','100%');
	  $('.view-festival-sobre .col-sm-4').hide();
	}



    /* abas com link */
    $(function(){
      var hash = window.location.hash;
      hash && $('ul.nav a[href="' + hash + '"]').tab('show');
      $('.nav-tabs a').click(function (e) {
        $(this).tab('show');
        var scrollmem = $('body').scrollTop() || $('html').scrollTop();
        window.location.hash = this.hash;
        $('html,body').scrollTop(scrollmem);
      });
    });

    /* ajustes no form de venda de ingressos */
    $('#venda-ingressos-node-form .field-name-field-valor input').maskMoney().attr('placeholder','Valor do seu ingresso');
    $('#venda-ingressos-node-form textarea').attr('placeholder','Informe mais detalhes como sua cidade e condições de pagamento');

    /* colorbox */
    $('p.acoes a').addClass('colorbox-node');


    /* move link de ingresso */
    var ingressos = $('.view-festival-data .ingressos').detach();
    $(ingressos).prependTo('.container-abas');

    /* unwrap itens Facebook e Ingressos */
    /*var links = $('.view-festival-info li').detach();
    $(links).appendTo('.nav.nav-tabs');*/


 });

	

</script>    

