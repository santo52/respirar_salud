
<?php 

get_header(); ?>
<input type="hidden" id="uri_json_temp" value="<?php echo get_template_directory_uri() . '/json/quienes_somos.json'; ?>">
<main class="Main" id="error">
    <?php get_template_part( 'navbar'); ?>
        
    <section class="Content">
        <h1>404</h1>    
        <b>La página que solicitas no está disponible.</b>
        <p>No hemos encontrado la página que estás buscando, puede que esté temporalmente no disponible o que haya sido eliminada.</p>
    </section>
</main>
<?php get_footer(); ?>