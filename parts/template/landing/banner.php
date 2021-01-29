<?php
/**
 * Landing Banner
 *
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 */

$content = get_field('landing_banner_content');
$button = get_field('landing_banner_button');
?>
<?php if($content): ?>

  <section class="landing-banner">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <?php echo $content; ?>
          <a href="#" class="button button--landing">Test</a>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>