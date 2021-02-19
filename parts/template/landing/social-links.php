<?php
/**
 * Social links
 *
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 */

$intro = get_field('landing_intro_content');
$tw = get_field('landing_twitter_url');
$fb = get_field('landing_facebook_url');
$li = get_field('landing_linkedin_url');
$in = get_field('landing_instagram_url');

$socials = [
  [$fb, '<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>'],
  [$li, '<i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>'],
  [$tw, '<i class="fa fa-twitter fa-2x" aria-hidden="true"></i>'],
  [$in, '<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>']
];

?>
<?php if( $fb || $in || $tw || $li ): ?>

  <section class="social-links">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div>
            <?php echo $intro; ?>
          </div>
          <?php if( $fb || $in || $tw || $li ) : ?>
            <div class="social-links__container">
              <?php foreach( $socials as $social ) :
                if( $social[0] ) : ?>
                  <a href="<?php echo $social[0]; ?>" target="_blank" ><?php echo $social[1]; ?></a>
                <?php endif;
              endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>