<?php include "header.tpl.php"; ?>     

    <div class="busca">         
        <div class="busca-home">
            <h2><strong>Festivais</strong>, <strong>Excursões</strong> e <strong>Caronas</strong> em um só lugar!</h2>
            <?php
                /*$block = module_invoke('views', 'block_view', '-exp-festivais-page_1');
                print render($block['content']);*/
            ?>
        </div>
    </div>

    <div class="content-section-b" id="excursao">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-6">                    
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Praticidade para excursionistas e promoters</h2>
                    <p class="lead">O Partiu Festival é um serviço que simplifica o trabalho do excursionista reunindo todas às excursões do Brasil em um só lugar. Através desse serviço o público pode procurar pela excursão que mais se adapta as suas necessidades.</p>
                    <a href="http://partiufestival.com/user/register" class="btn chamada">Cadastre-se!</a>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <img src="<?php print base_path() . path_to_theme() ?>/img/busao.png" class="img-responsive" />
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-section-b -->
	
    <div class="content-section-a" id="publico">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6 col-sm-push-6 ">                    
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Você frequenta raves e festivais?</h2>
                    <p class="lead">Encontre excursões, festivais, ingressos e caronas com praticidade. Basta se cadastrar e aproveitar tudo isso de forma gratuita.</p>
                    <a href="http://partiufestival.com/user/register" class="btn chamada">Cadastre-se!</a>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6 col-sm-pull-6">
                    <img src="<?php print base_path() . path_to_theme() ?>/img/mochila.png" class="img-responsive" />
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-a -->

    <div class="publicacoes-recentes">
        <div class="container">
        <h2>Publicações Recentes</h2>
        <?php print views_embed_view('publicacoes_recentes', 'default'); ?>
        
      </div>

    <div class="proximos-festivais">
        <div class="container">
        <h2>Próximos Festivais</h2>
        <?php print views_embed_view('festivais_proximos_home', 'default'); ?>
        <div class="veja-mais">
            <a class="btn"  href="http://partiufestival.com/festivais">Ver Todos</a>
        </div>
      </div>
  </div>

  <div class="mapa-festivais">
    <!--h2>Festivais pelo Brasil</h2-->
    <?php print views_embed_view('mapa_festivais2','default'); ?>   
  </div>

<?php include "footer.tpl.php"; ?>


