<?php 
global $user;
$uid = $GLOBALS['user']->uid; 
?>

    <!-- Header -->
    <header>        

            <!-- Single button -->
            <!--div class="btn-group" style="float: left; margin-top: 15px; height: 25px;">
              <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 25px; background: transparent; padding: 0; foat: left; border: none;">
                <div id="nav-icon2">
                  <span></span>
                    <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
                <span>Menu</span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="http://partiufestival.com/festivais">Pesquisar Festivais</a></li>
                <li><a href="#" data-toggle="modal" data-target="#cadastro-festivais">Envie um Festival</a></li>
                <?php if(!$user->uid){ ?>
                  <li><a class="cadastro" href="http://partiufestival.com/user/register">Cadastre-se</a></li>
                <?php } ?>
                <?php if($user->uid){ ?>
                  <li><a href="#" data-toggle="modal" data-target="#cadastro-excursoes">Cadastre uma Excursão</a></li>
                <?php } ?>
                <li><a href="#" data-toggle="modal" data-target="#form-contato">Contato</a></li>
              </ul>
            </div-->
            <div class="logo"><a href="http://partiufestival.com"><img src="<?php print base_path() . path_to_theme() ?>/img/logo-1.png" /></a></div>            

            <!--div id="busca">
              <?php
                  /*$block = module_invoke('views', 'block_view', '-exp-festivais-page_1');
                  print render($block['content']);*/
              ?>
            </div-->

            
            <!--a href="http://partiufestival.com/festivais" class="btn cadastro-festival">Encontre um Festival</a-->
            
              <?php if($user->uid){ ?>
                  <?php print views_embed_view('menu_usuario', 'default', $uid); ?>
              <?php } else { ?>
                  <div class="cadastrese"><a class="login" href="http://partiufestival.com/user">Login</a> <a class="cadastro btn" href="http://partiufestival.com/user/register">Cadastre-se</a></div>
              <?php } ?>


    </header> 

    <div class="second-header">
      <ul>
        <li><a href="http://partiufestival.com/festivais">Pesquisar Festivais</a></li>
          <li><a href="#" data-toggle="modal" data-target="#cadastro-festivais">Envie um Festival</a></li>
          <?php if(!$user->uid){ ?>
            <li><a class="cadastro" href="http://partiufestival.com/user/register">Cadastre-se</a></li>
          <?php } ?>
          <?php if($user->uid){ ?>
            <li><a href="#" data-toggle="modal" data-target="#cadastro-excursoes">Cadastre uma Excursão</a></li>
          <?php } ?>
          <li><a href="#" data-toggle="modal" data-target="#form-contato">Contato</a></li>
      </ul>
    </div> 