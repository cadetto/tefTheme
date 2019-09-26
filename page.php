<?php get_header()?>

<?php
    if(have_posts()):
        the_post()
?>

    <div class="single-page-thumbnail"
        style="background-image:
            linear-gradient(
                rgba(0, 0, 0, 0.6),
                rgba(0, 0, 0, 0.6)
            ),
        url('<?= get_the_post_thumbnail_url() ?>')"
    >
        <div class="page-title">
            <h1><?= the_title() ?></h1>
        </div>
    </div>

    <div class="single-page-wrapper">
        <div class="single-page-content">

            <p><?= the_content() ?></p>
        </div>

    </div>


<?php endif ?>

<?php get_footer() ?>