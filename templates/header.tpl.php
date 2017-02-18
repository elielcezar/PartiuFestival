<?php 
global $user;
$uid = $GLOBALS['user']->uid; 
?>

    <!-- Header -->
    <header>        

        <div class="logo"><a href="http://partiufestival.com"><img src="<?php print base_path() . path_to_theme() ?>/img/logo-3.png" /></a></div>            

      <ul class="menu">
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

        <?php print render($page['header']); ?> 

        <?php if($user->uid){ ?>
        <?php print views_embed_view('menu_usuario', 'default', $uid); ?>
        <?php } else { ?>
        <div class="cadastrese"><a class="login" href="http://partiufestival.com/user">Login</a> <a class="cadastro btn" href="http://partiufestival.com/user/register">Cadastre-se</a></div>
        <?php } ?>


    </header> 

    <div class="second-header">     

       <div id="busca">
          <?php
              $block = module_invoke('views', 'block_view', '-exp-festivais-page_1');
              print render($block['content']);
          ?>
        </div>


    </div> 