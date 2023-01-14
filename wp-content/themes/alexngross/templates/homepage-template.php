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


<section class='main-content'>
    <div class='main-content-container'>
        <div class='image-text-container'>
            <h2>
                <?php the_field('heading_1_title'); ?>
            </h2>

            <div class='image-text'>
                <?php if (get_field('banner_image')): ?>
                    <img src="<?php the_field('heading1_image'); ?>" alt="ABB-IMAGE"/>
                <?php endif; ?>
                <div class='image-text-description'>
                    <?php the_field('heading_1_text'); ?>
                    <div class='image-text-button'>
                        <?php $button_text = get_field('button_text'); ?>
                        <?php $button_link = get_field('button_link'); ?>

                        <!-- Check if the button text and link fields have values -->
                        <?php if ($button_text && $button_link): ?>
                            <a href="<?php echo $button_link; ?>">
                                <?php echo $button_text; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<section class='articles'>
    <div class='articles-container'>
    <h2><?php the_field('article_heading'); ?></h2>
    <div class='articles-content'>
        <?php
        $field_groups = array(
            'articles',
            'articles_2',
            'articles_3',
        );
        
        foreach ($field_groups as $field_group) {
            if (have_rows($field_group)):
                while (have_rows($field_group)):
                    the_row();
                    $title = get_sub_field('article_title');
                    $image = get_sub_field('article_image');
                    $description = get_sub_field('article_description');
                    $button_text = get_sub_field('article_button_text');
                    $button_link = get_sub_field('article_link');
                    ?>
                    <div class='articles-item'>
                        <h3><?php echo $title; ?></h3>
                        <img src="<?php echo $image; ?>" alt="">
                        <p>
                            <?php echo $description; ?>
                        </p>

                        <div class='articles-button'>


                            <!-- Check if the button text and link fields have values -->
                            <?php if ($button_text && $button_link): ?>
                                <a href="<?php echo $button_link; ?>">
                                    <?php echo $button_text; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
        }
        ?>
    </div>
    </div>
</section>


<section class='media-block'>
 
    <div class='media-block-container'>
        <?php
        $field_groups = array(
            'media_block_1',
            'media_block_2',
            'media_block_3',
            'media_block_4',
        );
        $counter = 1;
        foreach ($field_groups as $field_group) {
            if (have_rows($field_group)):
                while (have_rows($field_group)):
                    the_row();
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $description = get_sub_field('text_area');
                    $button_text = get_sub_field('button_text');
                    $button_link = get_sub_field('button_link');
                    $container_class = 'media-block-1';
                    if ($counter == 2) {
                        $container_class = 'media-block-2';
                    }
                    if ($counter == 3) {
                        $container_class = 'media-block-3';
                    }
                    if ($counter == 4) {
                        $container_class = 'media-block-4';
                    }
                    ?>
                    <div class='media-block-item'>
                        
                    <div class='<?php echo $container_class; ?>'>

                       
    <img class='<?php echo $container_class; ?>-img' src="<?php echo $image; ?>" alt="ABB Image">
                        <div class='<?php echo $container_class; ?>-content'>
                        <h3><?php echo $title; ?></h3>
                        <p>
                            <?php echo $description; ?>
                        </p>

                        <div class='articles-button'>


                            <!-- if the button text and link fields have values -->
                            <?php if ($button_text && $button_link): ?>
                                <a href="<?php echo $button_link; ?>">
                                    <?php echo $button_text; ?>
                                </a>
                            <?php endif; ?>
                            </div>
                            </div>
                            </div>
                            </div>
                <?php
                $counter++;
                endwhile;
            endif;
        }
        ?>



    </section>

<?php
get_footer();