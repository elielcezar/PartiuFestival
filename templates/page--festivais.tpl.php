<?php include "header.tpl.php"; ?>  
   
    <!--div class="busca">
        <div class="container">
            <?php
                $block = module_invoke('views', 'block_view', '-exp-festivais-page_1');
                print render($block['content']);
            ?>
        </div>
    </div-->
<div id="principal">
<section class="conteudo">  
        <div class="container">
        <div class="shortcuts">
            <?php print $messages; ?>           
        </div> 
        	
        	 <?php print render($page['content']); ?>   
           
        </div>
        <!-- /.container --> 
</section>
</div>
<?php include "footer.tpl.php"; ?>
<script type="text/javascript">
jQuery(document).ready(function ($) {
    /* adiciona detalhes a busca */    
    //$('#edit-combine-wrapper').after('<span class="ou">OU</span>');
    //$('#edit-combine').attr('placeholder','Pesquise pelo nome do Festival, pela cidade ou estado');
    //$('#edit-field-data-value-value-datepicker-popup-1').attr('placeholder','Pesquise a partir de uma data');
    /* reposiciona o filtro de ordenacao */
    $('#edit-sort-bef-combine-wrapper').prependTo('.view-festivais .view-content').css('display','block');
    $('#edit-sort-bef-combine').attr('form','views-exposed-form-festivais-page-1');
    $('option[value="title ASC"]').html('Nome A até Z');
    $('option[value="title DESC"]').html('Nome Z até A');
    /* aplica a ordenacao */
    $('#edit-sort-bef-combine').change(function() {
        $('#views-exposed-form-festivais-page-1').submit();
    });
});
</script>