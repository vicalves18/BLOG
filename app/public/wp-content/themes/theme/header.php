<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Traz título de forma dinâmica-->
    <title><?php wp_title();?></title>

    <!--traz estilo de forma dinâmica e verifica se na raiz do programa existe o arquivo de estilo-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"></link>
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
    <!--FrancyBox-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

    <!--Traz a blibioteca de scripts-->
    <?php wp_head(); ?>

   
</head>
<body>
    
<div class="header">
    <div class="wrap">
        <h1><i class="bi bi-wordpress"></i> Aprendendo WordPress</h1>
        <div class="infor">

            <?php 
                $args = array('post_type'=>'page','pagename'=>'sobre');
                $my_page= get_posts( $args );
            ?>

            <!--Vê se possui algum conteúdo na página criada-->
            <?php if($my_page) : foreach( $my_page as $post ) : setup_postdata( $post );?>

                <h2><?php the_title();?></h2>

                <?php the_excerpt();?>

                <!--Puxa o link da página criada-->
                <a href="<?php the_permalink(); ?>" class="custom-botao">Ler Mais</a>
            <?php endforeach; ?>
            
            <?php else: ?>
                <p> Nenhum conteudo inserido na página</p>
            <?php endif; ?>
            
            
           
        
        </div>
    </div>
</div>
