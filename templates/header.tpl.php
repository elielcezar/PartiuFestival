<?php 
global $user;
$uid = $GLOBALS['user']->uid; 
?>

    <!-- Header -->
    <header>   

    <div class="container">

      <div class="logo"><a href="http://partiufestival.com"><img src="<?php print base_path() . path_to_theme() ?>/img/logo-2017.png" /></a></div>            

       <div class="menu-usuario">

         <?php if($user->uid){ ?>
            <?php print views_embed_view('menu_usuario', 'default', $uid); ?>
          <?php } ?>

          <div class="c-hamburger c-hamburger--htx">
            <span> </span>
          </div> 
          
      </div>  
        
        <?php if(!$user->uid){ ?>            
              <div class="cadastrese"><a class="login" href="http://partiufestival.com/user">Login</a> <a class="cadastro btn" href="http://partiufestival.com/user/register">Cadastre-se</a></div>
        <?php } ?>

        <?php print render($page['header']); ?>

         <div id="busca">
          <?php
              $block = module_invoke('views', 'block_view', '-exp-festivais-page_1');
              print render($block['content']);
          ?>
        </div> 

        <ul class="menu-principal">
          <li><a href="http://partiufestival.com/festivais">+ Festivais</a></li>
          <li><a href="http://partiufestival.com/ingressos">Ingressos</a></li>
          <li><a href="http://partiufestival.com/cadastro-de-festivais">Cadastre um Festival</a></li>
        </ul>

      </div>

    </header> 