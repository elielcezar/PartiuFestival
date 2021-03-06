     <div class="cadastro-festival">

            <div class="container">              



                <div class="col-sm-12 col-md-6 col-sm-8">

                    <h3>Está faltando algum festival em nossa lista?</h3>

                </div>

                <div class="col-sm-12 col-md-6 col-sm-4">

                    <a href="#" class="btn envie-agora" data-toggle="modal" data-target="#cadastro-festivais">Envie agora mesmo!</a>

                    <a href="http://partiufestival.com/festivais" class="btn confira-lista">Confira a Lista Completa</a>

                </div>

            </div>

        </div>

    <!-- Footer -->

    <footer>

        <div class="container">

            <div class="row">

                <div class="col-sm-3">  

                    <img src="<?php print base_path() . path_to_theme() ?>/img/logo-2017.png" class="logo img-responsive" />

                </div>

                <div class="col-sm-3">

                    <ul>
                        <li><a href="http://partiufestival.com/user">Login</a></li>

                        <li><a href="http://partiufestival.com/user/register">Crie uma Conta</a></li>

                        <li><a href="http://partiufestival.com/festivais">Encontrar Festivais</a></li>

                        <li><a href="#" data-toggle="modal" data-target="#cadastro-festivais">Cadastre um Festival</a></li>

                        
                    </ul>

                </div>

                <div class="col-sm-3">

                    <ul>                        

                        <li><a href="http://partiufestival.com">Sobre o Partiu Festival</a></li>

                        <li><a href="http://partiufestival.com/termos-e-condi%C3%A7%C3%B5es-de-uso">Termos de Uso</a></li>

                        <li class="denunciar"><a href="#" data-toggle="modal" data-target="#denunciar-conteudo">Denunciar Conteúdo Abusivo</a></li>

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

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<script type="text/javascript">

jQuery(function( $ ){

    /* menu do usuario */
    $('#block-system-user-menu').appendTo('.menu-usuario');

    /* menu hamburguer*/
    $('.c-hamburger').mouseenter(function(){
        $(this).addClass('is-active');
        $('header ul.menu').addClass('is-active');
    }).mouseleave(function(){
        $(this).removeClass('is-active');
        $('header ul.menu').removeClass('is-active');
    });

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

    /* mascara no form de edicao de venda de ingresso */
    $('.page-node-edit.node-type-venda-ingressos .field-name-field-valor input').maskMoney();

    /* pagina de exclusao de festival */
    $('.page-node-delete.node-type-festival .region.region-content').addClass('container');
    $('.page-node-delete.node-type-festival #block-system-main').addClass('card');

    /* pop-up / form de cdastro de excursoes */
    $('#cadastro-excursoes #edit-field-cidade2 #edit-field-cidade2-und').attr('placeholder','Saindo de');

   $('.banner-destaque-home').slick({
      //arrows: false,
      infinite: true,
      speed: 500,
      fade: true
    });

	

});

</script>





<script type="text/javascript">

jQuery(document).ready(function ($) {

    $('#edit-combine').attr('placeholder','Pesquise por Festival, Cidade ou Estado');
    $('#edit-field-data-value-value-datepicker-popup-0').attr('placeholder','Pesquise a partir de uma data'); 
    $('#edit-combine-autocomplete-aria-live').click(function(){
        $('header #edit-combine-wrapper .form-item-combine').submit();
    });

    /* adiciona link no icone do carrinho no topo */
    $('header #block-commerce-cart-cart h2').wrap('<a href="http://partiufestival.com/cart"></a>');

    /* aviso na pagina de um ingresso */
    $('.node-type-ingresso #edit-line-item-fields--2').prepend('<span class="aviso">No Partiu Festival os ingressos são personalizados para cada usuário. Por isso, pedimos que você informe abaixo os dados <strong>DA PESSOA QUE IRÁ UTILIZAR O INGRESSO</strong>. Insira um por vez clique em comprar. Repita o processo para cada pessoa que você estiver comprando.</span>');

    /* ajustes na lista de pedidos do usuario */
    var $Divs = $('.page-meus-pedidos .view-pedidos-usuario tr td:nth-child(1)');
    $Divs.each(function(i) {
      if ($(this).find("img").length == 0) {
           $(this).html('<img src="http://partiufestival.com/sites/all/themes/partiucadastro/img/ingresso-thumb.jpg" /  >');
      } 
    });

    /* ajuste na tela de vendas por usuario */
    $('.page-minhas-vendas .conteudo table').addClass('table table-hover table-striped')
});

</script>

<!-- livezilla.net code --><script type="text/javascript" id="fe67d208264a33f504f1fd5c023c5fa9" src="http://suporte.partiufestival.com/script.php?id=fe67d208264a33f504f1fd5c023c5fa9"></script><!-- http://www.livezilla.net -->