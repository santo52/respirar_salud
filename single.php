<?php 

setup_postdata( $post );
$thumbID = get_post_thumbnail_id( $post->ID );
$imgDestacada = wp_get_attachment_image_src( $thumbID, 'large' );



get_header(); ?>
<main class="Main" id="Single">
    <?php get_template_part( 'navbar'); ?>


    <?php if(!empty($imgDestacada)) : ?>
        <div  class="Nosotros-Background" style="background-size:100% auto; height:250px; background-image: url( <?php echo  $imgDestacada[0] ?> )"></div>
    <?php endif; ?>


    <section class="Content">
        
        <article class="the_content">
            <h1><?php the_title() ?> </h1>
            <div class="the_content_text">
                <?php the_content() ?>
            </div>
            <br>
            <div class="the_content_information">
                <div class="the_author">
                    Autor: <?php echo get_the_author_firstname() . ' ' . get_the_author_lastname() ?>
                </div>
                <div class="the_time">
                    Publicado: <?php the_time('d/m/Y') ?>
                </div>
            </div>
        </article>
        
        <br>


        <?php 

            $terms = get_the_terms( get_the_ID(), 'category');
            $categ = array();   

            if ( $terms )
            {
                foreach ($terms as $term) 
                {
                    $categ[] = $term->term_id;
                }
            }

            
            if(!empty($categ)) {
                $loop	= new WP_QUERY(array(
                    'category__in'		=> $categ,
                    'posts_per_page'	=> 6,
                    'post__not_in'		=>array(get_the_ID()),
                    'orderby'			=>'desc'
                ));
            } else {
                $loop = get_post(array('posts_per_page'	=> 6));
            }
        
        ?>

        <section class="Article-List from-tablet-wide">
        <?php 
        if ( $loop->have_posts() ) : 
            while ( $loop->have_posts() ) :
                
                $loop->the_post(); 
                setup_postdata( $post );
                $thumbID = get_post_thumbnail_id( $post->ID );
                $imgDestacada = wp_get_attachment_image_src( $thumbID, 'medium' );
                
                if(!empty($imgDestacada)){
                    $rutaImagen = $imgDestacada[0];
                } else {
                    $rutaImagen = get_template_directory_uri() . '/images/nofoto.jpg';
                }

                ?>
            <article class="Article-Item" style="background-image: url(<?php echo $rutaImagen ?>)">
                <a href="<?php the_permalink() ?>" class="Article-Link">

                    <div class="Article-Text">
                        <span class="Article-Text__date"><?php the_time( 'd/m/Y' ) ?></span>
                        <h4 class="Article-Text__title"><?php the_title() ?></h4>
                        <span class="Article-Text__paragraph"> <?php the_excerpt() ?> </span>
                        <span class="Article-Text__link"><?php echo get_the_author()?></span>
                        <span class="Article-Text__read">Leer más ...</span>
                    </div>
                </a>
            </article>
            <?php 
                endwhile;
                
            endif;
            ?>
            
        </section>
      
        
</section>

<hr>

<div class="owl-carousel to-tablet-wide">
        <?php 
        if ( $loop->have_posts() ) : 
            while ( $loop->have_posts() ) :
                
                $loop->the_post(); 
                setup_postdata( $post );
                $thumbID = get_post_thumbnail_id( $post->ID );
                $imgDestacada = wp_get_attachment_image_src( $thumbID, 'medium' );
                
                ?>
                
                <div class="item">
                    <a href="<?php the_permalink() ?>">
                    <span class="owl-item-image"><img src="<?php echo !empty($imgDestacada) ? $imgDestacada[0] : get_template_directory_uri() . '/images/noti2.png' ?>" alt="" /></span>
                    <div class="inner">
                        <span class="date"><?php the_time('d/m/Y') ?> </span>
                        <h2><?php the_title() ?></h2>
                        <span class="excerpt">
                            <?php the_excerpt();?>
                        </span>
                    </div>
                    </a>
                </div>

        <?php 
            endwhile;
            
        endif;
        ?>
            
        </div>
    


</main>

<?php get_footer(); ?>