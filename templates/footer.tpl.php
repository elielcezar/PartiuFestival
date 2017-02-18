     <div class="cadastro-festival">
            <div class="container">              

                <div class="col-sm-12 col-md-6">
                    <h3>Está faltando algum festival em nossa lista?</h3>
                </div>
                <div class="col-sm-12 col-md-6">
                    <a href="#" class="btn" data-toggle="modal" data-target="#cadastro-festivais">Envie agora mesmo!</a>
                    <a href="http://partiufestival.com/festivais" class="btn">confira a Lista Completa</a>
                </div>
            </div>
        </div>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">  
                    <img src="<?php print base_path() . path_to_theme() ?>/img/logo-rodape.png" class="logo img-responsive" />
                </div>
                <div class="col-sm-3">
                    <ul>
                        <li><a href="http://partiufestival.com">Sobre o Partiu Festival</a></li>
                        <li><a href="http://partiufestival.com/termos-e-condi%C3%A7%C3%B5es-de-uso">Termos de Uso</a></li>
                        <li class="denunciar"><a href="#" data-toggle="modal" data-target="#denunciar-conteudo">Denunciar Conteúdo Abusivo</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul>
                        <li><a href="http://partiufestival.com/festivais">Encontrar Festivais</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#cadastro-festivais">Cadastre um Festival</a></li>
                        <li><a href="http://partiufestival.com/">Anuncie</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#form-contato">Entre em Contato</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">  
                    <div class="contato">
                        <p>Dúvidas e informações:</p>
                        <p>contato@partiufestival.com</p>
                        <p class="social"><a href="https://www.facebook.com/partiufestival/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> &nbsp;&nbsp; <a href="https://twitter.com/partiufestival"><i class="fa fa-twitter" aria-hidden="true"></i></a> &nbsp;&nbsp; <a href="https://www.instagram.com/partiufestival/"><i class="fa fa-instagram" aria-hidden="true"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  
 <!-- Modal -->
<div class="modal fade" id="cadastro-festivais" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title" id="myModalLabel">Indique um festival e ajude<br/> a completar o nosso mapa!</h2>
          </div>
      <div class="modal-body">             
        <?php
            $block = module_invoke('webform', 'block_view', 'client-block-23');
            print render($block['content']);
        ?>
      </div>             
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="form-contato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title" id="myModalLabel">Entre com Contato</h2>
          </div>
      <div class="modal-body">             
        <?php
            $block = module_invoke('webform', 'block_view', 'client-block-165');
            print render($block['content']);
        ?>
      </div>             
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="cadastro-excursoes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title" id="myModalLabel">Cadastro de Excursões</h2>
          </div>
      <div class="modal-body">             
        <?php
            $block = module_invoke('formblock', 'block_view', 'excursao');
            print render($block['content']);

            $block = module_invoke('formblock', 'excursao');
            print render($block['content']);
        ?>

      </div>             
    </div>
  </div>
</div>
    
 <!-- Modal -->
<div class="modal fade" id="denunciar-conteudo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title" id="myModalLabel">Denunciar Conteúdo</h2>
          </div>
      <div class="modal-body">             
        <?php
            $block = module_invoke('webform', 'block_view', 'client-block-164');
            print render($block['content']);
        ?>
      </div>             
    </div>
  </div>
</div>
<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.scrollTo-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.localscroll-min.js"></script>
<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.maskMoney.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function( $ ){
    $('header .btn-group').mouseenter(function(){
        $(this).addClass('open');
    }).mouseleave(function(){
        $(this).removeClass('open');
    });
	//$('.intro-header').localScroll();
	/* campo 'Outro'*/
	var campo_outro = $('form .form-item-submitted-o-que-voce-faz-other');
	campo_outro.hide();
	$('.form-item-submitted-o-que-voce-faz-select-select-or-other input, .form-item-submitted-o-que-voce-faz-select-select-or-other input').click(function(){		
		if ($('#edit-submitted-o-que-voce-faz-select-4').is(':checked')) {
			campo_outro.show();
		} else{
			campo_outro.hide();
		}
	});
    /* home */ 
    //$('.page-front .view-filters').appendTo('.getlocations_map_wrapper_inner');   
    /* mapa */
    //$('.page-mapa-dos-festivais .view-filters').appendTo('.getlocations_map_wrapper_inner');    
    /* pesquisa mapa */
    //$('#edit-title-wrapper #edit-title').attr('placeholder','Pesquise pelo nome do festival'); 
    /* mascara no form de edicao de venda de ingresso */
    $('.page-node-edit.node-type-venda-ingressos .field-name-field-valor input').maskMoney();
    /* pagina de exclusao de festival */
    $('.page-node-delete.node-type-festival .region.region-content').addClass('container');
    $('.page-node-delete.node-type-festival #block-system-main').addClass('card');

    /* pop-up / form de cdastro de excursoes */
    $('#cadastro-excursoes #edit-field-cidade2 #edit-field-cidade2-und').attr('placeholder','Saindo de');
   
	
});
</script>


<script type="text/javascript">
jQuery(document).ready(function ($) {
    /* adiciona detalhes a busca */    
    //$('#edit-combine-wrapper').after('<span class="ou">OU</span>');
    $('#edit-combine').attr('placeholder','Pesquise pelo nome do Festival, pela cidade ou estado');
    $('#edit-field-data-value-value-datepicker-popup-0').attr('placeholder','Pesquise a partir de uma data'); 
    $('#edit-combine-autocomplete-aria-live').click(function(){
        $('header #edit-combine-wrapper .form-item-combine').submit();
    });

    /* redireciona para o site de pagamento (Pagseguro/Paypal) */    
    $('.page-checkout-payment .conteudo .checkout-help').html('<h3>Aguarde, você será redirecionado para realizar o pagamento.</h3><br/><img src="http://partiufestival.com/sites/all/themes/partiucadastro/img/loading.gif" />');
    $('.page-checkout-payment .payment-redirect-form form').submit();

});
</script>