
<?php 

/*
Template Name: Noticias
*/

$args = array(
    'taxonomy'	=> "category",
    'parent'	=> 0,
    'hide_empty' => 0
);

$categories = get_categories($args);



get_header(); ?>
<main class="Main" id="Noticias">
    <?php get_template_part( 'navbar'); ?>

    <div class="Content">
        <div class="Title">
            <h1>Noticias</h1>
            <p>Enterate de nuestras últimas noticias e innovaciones</p>
        </div>

        <section class="Tags">
            <p class="Tag-Message">selecciona la categoría que quieres ver</p>
            <button id="Tag-Button">selecciona la categoría que quieres ver</button>
            <article class="Tag-Content">
            <a href="<?php echo get_site_url() . '/noticias' ?>" class="Tag-Item active">Todo</a>
            <?php foreach($categories as $category) : ?>
                <a href="<?php echo get_category_link($category) ?>" class="Tag-Item"><?php echo $category->cat_name ?> </a>
            <?php endforeach; ?>
                
            </article>
        </section>

<?php global $post;

$last_posts = get_posts(array('posts_per_page' => 9));


?>
        <section class="Article-List">
            <?php foreach ($last_posts as $post) : 
                
                setup_postdata( $post );
                $thumbID = get_post_thumbnail_id( $post->ID );
                $imgDestacada = wp_get_attachment_image_src( $thumbID, 'medium' );

                if( !empty($imgDestacada) ){
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
                        <span class="Article-Text__paragraph"><?php echo has_excerpt() ? get_the_excerpt() : 'Sin descripción' ?></span>
                        <!--<span class="Article-Text__link"><?php the_author( ) ?></span>-->
                        <span class="Article-Text__read">Leer más ...</span>
                    </div>
                </a>
            </article>
            <?php endforeach; ?>

        </section>
        <section class="pagination">
            <?php echo paginate_links(  ) ?>
        </section>

    </div>
</main>

<?php get_footer(); ?>