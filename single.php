<?php 

setup_postdata( $post );
$thumbID = get_post_thumbnail_id( $post->ID );
$imgDestacada = wp_get_attachment_image_src( $thumbID, 'large' );



get_header(); ?>
<main class="Main" id="Single">
    <?php get_template_part( 'navbar'); ?>


    <div  class="Nosotros-Background" style="background-size:100% auto; height:250px; background-image: url( <?php echo !empty($imgDestacada) ? $imgDestacada[0]: get_template_directory_uri() . '/images/quienes_somos.jpg' ?> )"></div>










    <section class="Content">
        
        <article class="the_content">
            <h1><?php the_title() ?> </h1>
            <?php the_content() ?>
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

        <div class="owl-carousel">
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
                    <img src="<?php echo !empty($imgDestacada) ? $imgDestacada[0] : get_template_directory_uri() . '/images/noti2.png' ?>" alt="" />
                    <div class="inner">
                        <span class="date"><?php the_time('d/m/Y') ?> </span>
                        <h2><?php the_title() ?></h2>
                    </div>
                    </a>
                </div>

        <?php 
            endwhile;
            
        endif;
        ?>
            
        </div>
    
      
        
</section>

<hr>




</main>

<?php get_footer(); ?>