<?php 
global $user;
$uid = $GLOBALS['user']->uid; 
?>

    <!-- Header -->
    <header>   

    <div class="container">  

      <button class="c-hamburger c-hamburger--htx">
        <span>Menu</span>
          <div class="menu-usuario">
              
          </div>
      </button> 
      

      <div class="logo"><a href="http://partiufestival.com"><img src="<?php print base_path() . path_to_theme() ?>/img/logo-2017.png" /></a></div>            

       <div id="busca">
          <?php
              $block = module_invoke('views', 'block_view', '-exp-festivais-page_1');
              print render($block['content']);
          ?>
        </div>

        <?php if($user->uid){ ?>

            <?php print views_embed_view('menu_usuario', 'default', $uid); ?>            

        <?php } else { ?>
              <div class="cadastrese"><a class="login" href="http://partiufestival.com/user">Login</a> <a class="cadastro btn" href="http://partiufestival.com/user/register">Cadastre-se</a></div>
        <?php } ?>

        <?php print render($page['header']); ?> 

      </div>

    </header> 

    <!--div class="second-header">     

      


    </div--> 