<?php
/*
 * Staff profile section
 *
 * Template part used on the single staff template
 *
 */

// staff profile Custom Fields
$first = get_field('first_name');
$last = get_field('last_name');
$title = get_field('title');
$phone = get_field('phone');
$email = get_field('email_address');
$bio = get_field('staff_bio');
$tw = get_field('twitter_url');
$fb = get_field('facebook_url');
$li = get_field('linkedin_url');
$in = get_field('instagram_url');
$cta = get_field('cta_link');

$socials = [
  [$fb, '<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>'],
  [$in, '<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>'],
  [$tw, '<i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>'],
  [$li, '<i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>']
];

//Staff data
$image = get_the_post_thumbnail_url();

?>

<section class="staff-profile">
  <div class="container">
    <div class="row row--reverse">
      <div class="col-4 text-center stretch staff-profile__image-container">
        <img src="<?php echo $image; ?>" alt="Staff bio" class="staff-profile__image" />
        <?php if( $fb || $in || $tw || $li ) : ?>
          <div class="staff-profile__social-media">
            <?php foreach( $socials as $social ) :
              if( $social[0] ) : ?>
                <a href="<?php echo $social[0]; ?>" target="_blank"><?php echo $social[1]; ?></a>
              <?php endif;
            endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-8 stretch">
        <h3><?php echo $first . ' ' . $last; ?></h3>
        <hr>
        <p><?php echo $title; ?></p>
        <p><?php echo $bio; ?></p>
        <?php if( $email ) : ?>
          <a href="mailto:<?php echo $email; ?>" class="button button--teal" role="link" title="email address" target="_blank">
            <?php echo $email; ?>
          </a>
        <?php endif;
        if( $cta ) : ?>
          <a href="<?php echo esc_url($cta['url']); ?>" class="button button--teal" role="link" title="<?php echo $cta['title']; ?>" target="<?php echo $cta['target']; ?>">
            <?php echo $cta['title']; ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
