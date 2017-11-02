	

	<div class="header header-filter">
    	<div class="capa">
    		<?php print views_embed_view('festival_capa', 'default', $nid); ?>
    	</div>
	</div>


	<div class="top-content">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php 
						global $messages;
						if($messages){ print $messages; } 
					?>
					<h1><?php print $title; ?></h1>

					<div class="container-abas">
				    	<div class="abas categoria">
							    <ul class="nav nav-tabs">
							      <li class="active sobre"><a href="#sobre" data-toggle="tab">Sobre o Evento</a></li>
							      <!--li class="todas"><a href="#publicacoes" data-toggle="tab">Todos os Posts</a></li-->
							      <li class="excursoes"><a href="#excursoes" data-toggle="tab">Excursões</a></li>
							      <li class="venda-ingresso"><a href="#venda-ingresso" data-toggle="tab">Revenda de Ingressos</a></li>
							      <li class="procura-carona"><a href="#procura-carona" data-toggle="tab">Caronas</a></li>
							    </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="row">

			<div class="col-md-8">
				
				<div class="conteudo">

					<?php //print views_embed_view('festival_sobre', 'default', $nid); ?>

			

			<div class="tab-content">

					<div class="tab-pane active" id="sobre">
			      			<div class="container-form">
			      				<?php print views_embed_view('festival_sobre', 'default', $nid); ?>
			      			</div>
				      </div>							 

					<!--div class="tab-pane" id="publicacoes">
			      			<div class="container-form">
			      				<?php print views_embed_view('publicacoes_recentes_festival2', 'default'); ?>
			      			</div>
				      </div-->				      

				      <div class="tab-pane" id="excursoes">
				      		<?php print views_embed_view('oferecendo_excursao', 'default', $nid); ?>

					      	<div class="card send-post">
					      		<h3>Você está organizando uma excursão para esse festival? Divulgue agora mesmo!</h3>
					      		<?php if($user->uid){ ?>
					      			<div class="container-form form-excursoes">
					      				
					      			</div>
					      		<?php } else { ?>
									<div class="aviso"><a href="http://partiufestival.com/user/register">Crie uma conta</a> ou <a href="http://partiufestival.com/user">faça login</a> para interagir com o público do Partiu Festival.</div>
								<?php } ?>									
							</div>
							
				      </div>

				      <div class="tab-pane" id="venda-ingresso">
				      		<?php print views_embed_view('vendendo_ingresso2', 'default', $nid); ?>
					      	
					      	<div class="card send-post">
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
				      		<?php print views_embed_view('oferecendo_carona2', 'default', $nid); ?>

					      	<div class="card send-post">
					      		<h3>Procurando carona para esse festival? Deixe aqui sua mensagem!</h3>
					      		<?php if($user->uid){ ?>
				      			<div class="container-form form-procura-carona">
				      				
				      			</div>
				      			<?php } else { ?>
									<div class="aviso"><a href="http://partiufestival.com/user/register">Crie uma conta</a> ou <a href="http://partiufestival.com/user">faça login</a> para interagir com o público do Partiu Festival.</div>
								<?php } ?>								
							</div>							
				      </div>
      

			  </div>

		</div>				
	</div>

	<div class="col-md-4">
		<div class="info-mapa">
			<?php print views_embed_view('festival_data', 'attachment_1', $nid); ?>	
		</div>
		<div class="info-data">
			<?php print views_embed_view('festival_data', 'block_1', $nid); ?>	
		</div>		
		

		<!--/*
		  *
		  * Revive Adserver Tag de javascript
		  * - Generated with Revive Adserver v4.0.2
		  *
		  */-->

		<!--/*
		  * The backup image section of this tag has been generated for use on a
		  * non-SSL page. If this tag is to be placed on an SSL page, change the
		  *   'http://ecwd.net/adserver/www/delivery/...'
		  * to
		  *   'https://ecwd.net/adserver/www/delivery/...'
		  *
		  * This noscript section of this tag only shows image banners. There
		  * is no width or height in these banners, so if you want these tags to
		  * allocate space for the ad before it shows, you will need to add this
		  * information to the <img> tag.
		  *
		  * If you do not want to deal with the intricities of the noscript
		  * section, delete the tag (from <noscript>... to </noscript>). On
		  * average, the noscript tag is called from less than 1% of internet
		  * users.
		  */-->

		<script type='text/javascript'><!--//<![CDATA[
		   var m3_u = (location.protocol=='https:'?'https://ecwd.net/adserver/www/delivery/ajs.php':'http://ecwd.net/adserver/www/delivery/ajs.php');
		   var m3_r = Math.floor(Math.random()*99999999999);
		   if (!document.MAX_used) document.MAX_used = ',';
		   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
		   document.write ("?zoneid=6");
		   document.write ('&amp;cb=' + m3_r);
		   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
		   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
		   document.write ("&amp;loc=" + escape(window.location));
		   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
		   if (document.context) document.write ("&context=" + escape(document.context));
		   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
		   document.write ("'><\/scr"+"ipt>");
		//]]>--></script><noscript><a href='http://ecwd.net/adserver/www/delivery/ck.php?n=a14b8b98&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://ecwd.net/adserver/www/delivery/avw.php?zoneid=6&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a14b8b98' border='0' alt='' /></a></noscript>

	</div>

	</div>

	</div>



	

	<!--div class="conteudo">


		<?php //if($user->uid){ ?>		

			 <div id="publicacoes">
			    <div class="container">
			    	<h2>Encontre pessoas oferecendo o que você procura</h2>
			    	<?php print views_embed_view('publicacoes_recentes_festival2', 'default'); ?>
			    </div>
			 </div>

		<?php //} ?>		

	</div-->



		

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
    $('.shortcuts').prependTo('.top-content .container');
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
    /*var ingressos = $('.view-festival-data .ingressos').detach();
    $(ingressos).prependTo('.container-abas');*/

    /* unwrap itens Facebook e Ingressos */
    /*var links = $('.view-festival-info li').detach();
    $(links).appendTo('.nav.nav-tabs');*/


 });

	

</script>    

