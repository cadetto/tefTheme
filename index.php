<?php get_header() ?>



<section class="jumbotron">

    <div class="jumbotron-text">
        <svg id="animated-svg" width="241" height="103" viewBox="0 0 241 103" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M79.6172 11.7344H46.7109V103H33.2812V11.7344H0.445312V0.625H79.6172V11.7344Z" stroke="#dadada" stroke-width="3"/>
            <path d="M152.672 55.6797H108.305V91.9609H159.844V103H94.8047V0.625H159.141V11.7344H108.305V44.6406H152.672V55.6797Z" stroke="#dadada" stroke-width="3"/>
            <path d="M233.109 57.7891H190.148V103H176.648V0.625H240.07V11.7344H190.148V46.75H233.109V57.7891Z" stroke="#dadada" stroke-width="3"/>
        </svg>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("texto-principal") ) : ?>
        <?php endif;?>
        <button class="cta">Contáctanos</button>
    </div>

    <div class="jumbo-img">
        <img src="<?php echo get_template_directory_uri() . '/assets/jumbo-img(1).png'?>" alt="">
    </div>

</section>


</div>



<section class="services">

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("servicios") ) : ?>
<?php endif;?>

</section>

<section class="about">
    <div class="about-row">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sobre-nosotros-1") ) : ?>
        <?php endif;?>
    </div>


    <div class="about-row">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sobre-nosotros-2") ) : ?>
        <?php endif;?>
    </div>


</section>


<h1 class="title">Nuestros clientes</h1>

<section class="clientes-section">



    <div class="clients">
        <?php
        $args= array(
            'posts_per_page' => '7',
            'post_type' => 'clients'
        );
        $query = new WP_Query($args);
        while($query->have_posts()):
            if($query->have_posts()):
                $query->the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'slider' );
                ?>
                <div class="slick-slide">
                    <div
                        class="slick-image"
                        style="background-image : url('<?php echo $url ?>')"
                    ></div>
                </div>
                <?php
            endif;
        endwhile;
        ?>
    </div>

</section>

<section class="contacto" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url('<?php echo get_template_directory_uri() . '/assets/contact-banner.jpg' ?>')">
        ¿En qué podemos ayudarte?
        <button class="cta">Contáctanos</button>
</section>



<?php get_footer() ?>