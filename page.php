
<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 */

get_header(); ?>
<input type="hidden" id="uri_json_temp" value="<?php echo get_template_directory_uri() . '/json/quienes_somos.json'; ?>">
<main class="Main" id="Nosotros">
    <?php get_template_part( 'navbar'); ?>
    
    <?php 

        
        if ( have_posts() ) : 
            setup_postdata( $post );
            $thumbID = get_post_thumbnail_id( $post->ID );
            get_class_methods($thumbID);
            $imgDestacada = wp_get_attachment_image_src( $thumbID, 'large' );
            if(!empty($imgDestacada[0])){
                echo "<section  class='Nosotros-Background' style='background-image: url(" . $imgDestacada[0] . ") '>";
            }


            while ( have_posts() ) : 
                the_post();
                
                

                the_content(); // displays whatever you wrote in the wordpress editor
            endwhile; 

            if(!empty($imgDestacada)){
                echo "</section>";
            }

        endif; //ends the loop
    ?>
    </section>
</main>
<?php get_footer(); ?>



