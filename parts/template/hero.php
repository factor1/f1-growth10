<?php
/**
 * Template Hero
 *
 * Template part used on index.php and other views
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 */

$bgImage = wp_get_attachment_image_src(get_field('templete_hero_image'), 'full');
$logo = wp_get_attachment_image_src(get_field('template_hero_logo'), 'full');

?>

<section class="template-hero" style="background: url('<?php echo $bgImage[0]; ?>') bottom/cover no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2>header</h2>
      </div>
    </div>
  </div>
</section>