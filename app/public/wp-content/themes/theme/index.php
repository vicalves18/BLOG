<?php get_header();?>

<div class="blog">
    <div class="wrap">
        <h2>BLOG</h2>
        <div class="box-liste-posts">

        <?php
           //Faz consulta para trazer um looping de 2 posts --- Pega informações do wordPress
            $args = array('post_type'=>'post','showposts'=>2);
            $my_posts = get_posts( $args );
        ?>
        <?php $cont = 1; if( $my_posts ) : foreach( $my_posts as $post ) : setup_postdata( $post );?>

            <div class="liste-posts <?php /*Verificar se há mais de um post para saber a posição na tela*/if($cont == 2) echo "segundo-post";?>">
                <!--Parametro para saber onde se encontra o diretório-->
                <?php the_post_thumbnail();?>
                <div class="box-content-post">
                    <h2><?php the_title();?></h2>
                    <?php the_excerpt();?>
                    <a href="<?php the_permalink();?>" class="custom-botao">Ler Mais</a>
                </div>
            </div>
            <?php $cont ++ ; endforeach; endif;?>

        </div>
    </div>
</div>
<!--Quebra de DIV-->
<div class="clear"></div>

<div class="galeria">
    <div class="wrap">
        <h2>GALERIA</h2>
            <?php
            //Faz consulta para trazer um looping de 2 posts --- Pega informações do wordPress
                $args = array('post_type'=>'page','pagename'=>'galeria');
                $my_page = get_posts( $args );
            ?>
            <?php $cont = 1; if( $my_page ) : foreach( $my_page as $post ) : setup_postdata( $post );?>

                <?php the_content();?>
                
                <!--Loop que exibe as imagens que estão na galeria-->
                <?php $images = easy_image_gallery_get_image_ids();?>
                <!--Consulta se a imagem existe-->
                <?php if($images) : foreach( $images as $attachment_id ):?>
                    <!--Imagem que ao ser clicado exibirá grande-->
                    <?php $imagefull = wp_get_attachment_image_src( $attachment_id, '');?>
                    <!--Verificar tamanho da imagem para passar para functions.php-->
                    <?php $image = wp_get_attachment_image_src( $attachment_id,'thumb-custom' );?>
                    
                    <!--FancyBox efeito do puglin instalado no WordPress-->
                    <a class="popup" rel="francybox[group]" href="<?php echo $imagefull[0]; ?>">
                        <img src="<?php echo $image[0];?>">
                    </a>

                <?php endforeach; endif;?>

            <?php $cont ++ ; endforeach; endif;?>
        
    </div>
</div>


<?php get_footer(); ?>