<?php 


global $category;
global $post;

$args = array(
    'taxonomy'	=> "category",
    'parent'	=> 0,
    'hide_empty' => 0
);

$categories = get_categories($args);
$thisCategory = get_category(get_query_var('cat'));

get_header(); ?>
<main class="Main" id="Noticias">
    <?php get_template_part( 'navbar'); ?>

    <div class="Content">
        <div class="Title">
            <h1>Noticias <?php echo $thisCategory->name ?> </h1>
            <p>Enterate de nuestras últimas noticias e innovaciones</p>
        </div>

        <section class="Tags">
            <p class="Tag-Message">selecciona la categoría que quieres ver</p>
            <article class="Tag-Content">
            <a href="#" class="Tag-Item">Todo</a>
            <?php foreach($categories as $category) : ?>
                <a href="<?php echo get_category_link($category) ?>" class="Tag-Item <?php echo $thisCategory->cat_ID == $category->cat_ID ? 'active' : '' ?> "><?php echo $category->cat_name ?> </a>
            <?php endforeach; ?>
                
            </article>
        </section>


        <section class="Article-List">
        <?php while ( have_posts() ) : the_post() ;
        
        
        setup_postdata( $post );
        $thumbID = get_post_thumbnail_id( $post->ID );
        $imgDestacada = wp_get_attachment_image_src( $thumbID, 'medium' );
        
        ?>
            <article class="Article-Item" style="background-image: url(<?php echo empty($imgDestacada) ? get_template_directory_uri() . '/images/noti2.png' : $imgDestacada[0]; ?>)">
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
            <?php endwhile; ?>
            
        </section>
        <section class="pagination">
            <?php echo paginate_links(  ) ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>