<?php
/*
 * 4-Column content (Global)
 *
 * Template part used on the various templates/views
 *
 */

// 4-Column content custom fields
$title = get_sub_field('four_column_title');
$sub_title = get_sub_field('four_column_sub_title');
$button_toggle = get_sub_field('four_column_button_toggle');
$btnClass = get_sub_field('four_column_button_class');
$btn = get_sub_field('four_column_button');

?>

<section class="four-column-content">
  <div class="container">
    <div class="row">

      <?php if($title || $sub_title): ?>
        <div class="col-12 four-column-content__title">
          <?php if($title): ?>
            <h3><?php echo $title; ?></h3>
          <?php endif; ?>
          <?php if($sub_title): ?>
            <h4><?php echo $sub_title; ?></h4>
          <?php endif; ?>
        </div>
      <?php endif; ?>

    </div>


    <?php if( have_rows('four_column_content') ): ?>
      <div class="row four-column-content__content-row row--justify-content-start">
        <?php while( have_rows('four_column_content') ): the_row();
          $toggle = get_sub_field('post_toggle');
          if($toggle) {
            $post_data = get_sub_field('post_data');
            $btn_toggle = get_sub_field('button_toggle');
          } else {
            $title = get_sub_field('title');
            $image = wp_get_attachment_image_src(get_sub_field('image'), 'medium');
            $link = get_sub_field('link');
            $btn_toggle = get_sub_field('button_toggle');
          }?>

          <?php if($toggle): ?>

            <div class="col-3 stretch">
              <div class="content-card text-center">
                <a href="<?php echo get_the_permalink($post_data); ?>">
                  <div class="main-image" style="background: url('<?php echo get_the_post_thumbnail_url($post_data); ?>') center/cover;"></div>
                </a>
                <h3><?php echo get_the_title($post_data); ?></h3>
                <?php if($btn_toggle): ?>
                  <a href="<?php echo esc_url(get_the_permalink($post_data)); ?>" class="button button--teal-block" role="link" title="<?php echo get_the_title($post_data); ?>"><?php echo get_the_title($post_data); ?></a>
                <?php endif; ?>
              </div>
            </div>
            
          <?php else: ?>

            <div class="col-3 stretch">
              <div class="content-card text-center">
                <a href="<?php echo $link['url']; ?>">
                  <div class="main-image" style="background: url('<?php echo $image[0]; ?>') center/cover;"></div>
                </a>
                <h3><?php echo $title; ?></h3>
                <?php if($btn_toggle && $link): ?>
                  <a href="<?php echo esc_url($link['url']); ?>" class="button button--teal-block" role="link" title="<?php echo $link['title']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                <?php endif; ?>
              </div>
            </div>

          <?php endif; ?>

        <?php endwhile; ?>
      </div>
    <?php endif; ?>


    <div class="row">
      <div class="col-12">
        <?php if( $button_toggle && $btn ) : ?>

          <div class="text-center">

            <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
              <?php echo $btn['title']; ?>
            </a>

          </div>

        <?php endif; ?>
      </div>
      <div class="col-12">
        <?php if( have_rows('landing_hero_social_links') ): ?>
          <div class="four-column-content__social-links text-center">
            <?php while( have_rows('landing_hero_social_links') ): the_row(); 
              $icon = wp_get_attachment_image_src(get_sub_field('social_icon'), 'full');
              $link = get_sub_field('social_link');
              $linkAlt = get_post_meta(get_sub_field('social_link'), '_wp_attachment_image_alt', true);
              ?>
               <a href="<?php echo esc_url($link['url']); ?>" class="social-link" title="<?php echo $btn['title']; ?>" target="<?php echo $link['target']; ?>">
                <img src="<?php echo $icon[0]; ?>" alt="<?php echo $linkAlt; ?>">
              </a>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
    

  </div>
</section>