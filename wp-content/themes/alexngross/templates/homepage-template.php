<?php
/*
Template Name: Homepage
*/


get_header();
?>


<section class='hero-banner'>
    <?php if (get_field('banner_image')): ?>
        <img src="<?php the_field('banner_image'); ?>" />

    <?php endif; ?>

    <div class='hero-banner-content'>
        <h2>
            <?php the_field('banner_title'); ?>
        </h2>

        <p>
            <?php the_field('banner_subtitle'); ?>
        </p>
    </div>
</section>

<section class="container">
    <div class="content-section">
        <p>
            <?php the_field('content_section_text'); ?>
        </p>

    </div>
</section>


<section class='main-content-section'>
    <div class='main-content-container'>
    <h2>
                <?php the_field('heading_1_title'); ?>
            </h2>
        <div class='main-content'>
            
           
                <?php if (get_field('banner_image')): ?>

                    <img src="<?php the_field('heading1_image'); ?>" />
                <?php endif; ?>
                <p><?php the_field('heading_1_text'); ?></p>
       
        </div>
    </div>
</section>



<?php
get_footer();