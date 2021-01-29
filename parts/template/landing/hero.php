<?php
/**
 * Template Hero
 *
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 */

$bgImage = wp_get_attachment_image_src(get_field('landing_hero_image'), 'full');
$logo = wp_get_attachment_image_src(get_field('landing_hero_logo'), 'full');
$alt = get_post_meta(get_field('landing_hero_logo'), '_wp_attachment_image_alt', true);
$content = get_field('landing_hero_content');
?>

<section class="landing-hero" style="background: url('<?php echo $bgImage[0]; ?>') bottom/cover no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <img src="<?php echo $logo[0]; ?>" alt="<?php echo $alt; ?>">
        <?php echo $content; ?>
        <?php if( have_rows('landing_hero_social_links') ): ?>
          <div class="landing-hero__social-links">
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