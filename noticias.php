
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
            <article class="Tag-Content">
            <a href="/noticias" class="Tag-Item active">Todo</a>
            <?php foreach($categories as $category) : ?>
                <a href="<?php echo get_category_link($category) ?>" class="Tag-Item"><?php echo $category->cat_name ?> </a>
            <?php endforeach; ?>
                
            </article>
        </section>


        <section class="Article-List">
            <?php while ( have_posts() ) : the_post(); ?>
            <article class="Article-Item" style="background-image: url(<?php echo get_template_directory_uri() . '/images/noti3.png' ?>)">
                <a href="<?php the_permalink() ?>" class="Article-Link">
                    <div class="Article-Text">
                        <span class="Article-Text__date">01/01/201</span>
                        <h4 class="Article-Text__title">Servicios de terapias</h4>
                        <p class="Article-Text__paragraph">Las bajas temperaturas, cambios climaticos bruscos y la contaminación ambiental son factores que contribuyen a la aparición de la gripe. </p>
                        <span class="Article-Text__link">Terapias físicas y respiratorias</span>
                        <span class="Article-Text__read">Leer más ...</span>
                    </div>
                </a>
            </article>
            <?php endwhile; ?>
            <article class="Article-Item" style="background-image: url(<?php echo get_template_directory_uri() . '/images/noti3.png' ?>)">
                <a href="#" class="Article-Link">
                    <div class="Article-Text">
                        <span class="Article-Text__date">01/01/2019</span>
                        <h4 class="Article-Text__title">Servicios de terapias</h4>
                        <p class="Article-Text__paragraph">Las bajas temperaturas, cambios climaticos bruscos y la contaminación ambiental son factores que contribuyen a la aparición de la gripe. </p>
                        <span class="Article-Text__link">Terapias físicas y respiratorias</span>
                        <span class="Article-Text__read">Leer más ...</span>
                    </div>
                </a>
            </article>
            <article class="Article-Item" style="background-image: url(<?php echo get_template_directory_uri() . '/images/noti3.png' ?>)">
                <a href="#" class="Article-Link">
                    <div class="Article-Text">
                        <span class="Article-Text__date">01/01/2019</span>
                        <h4 class="Article-Text__title">Servicios de terapias</h4>
                        <p class="Article-Text__paragraph">Las bajas temperaturas, cambios climaticos bruscos y la contaminación ambiental son factores que contribuyen a la aparición de la gripe. </p>
                        <span class="Article-Text__link">Terapias físicas y respiratorias</span>
                        <span class="Article-Text__read">Leer más ...</span>
                    </div>
                </a>
            </article>
            <article class="Article-Item" style="background-image: url(<?php echo get_template_directory_uri() . '/images/noti3.png' ?>)">
                <a href="#" class="Article-Link">
                    <div class="Article-Text">
                        <span class="Article-Text__date">01/01/2019</span>
                        <h4 class="Article-Text__title">Servicios de terapias</h4>
                        <p class="Article-Text__paragraph">Las bajas temperaturas, cambios climaticos bruscos y la contaminación ambiental son factores que contribuyen a la aparición de la gripe. </p>
                        <span class="Article-Text__link">Terapias físicas y respiratorias</span>
                        <span class="Article-Text__read">Leer más ...</span>
                    </div>
                </a>
            </article>

            <article class="Article-Item" style="background-image: url(<?php echo get_template_directory_uri() . '/images/noti3.png' ?>)">
                <a href="#" class="Article-Link">
                    <div class="Article-Text">
                        <span class="Article-Text__date">01/01/2019</span>
                        <h4 class="Article-Text__title">Servicios de terapias</h4>
                        <p class="Article-Text__paragraph">Las bajas temperaturas, cambios climaticos bruscos y la contaminación ambiental son factores que contribuyen a la aparición de la gripe. </p>
                        <span class="Article-Text__link">Terapias físicas y respiratorias</span>
                        <span class="Article-Text__read">Leer más ...</span>
                    </div>
                </a>
            </article>

        </section>
    </div>
</main>

<?php get_footer(); ?>