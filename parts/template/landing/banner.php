<?php
/**
 * Landing Banner
 *
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 */

$content = get_field('landing_banner_content');
$link = get_field('landing_banner_button');
?>
<?php if($content): ?>

  <section class="landing-banner">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <?php echo $content; ?>
          <?php if($link): ?>
            <a href="<?php echo esc_url($link['url']); ?>" class="button button--landing" title="<?php echo $link['title']; ?>" target="<?php echo $link['target']; ?>">
              <?php echo $link['title']; ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>