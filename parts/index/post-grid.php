<?php
/**
 * Post Grid (Index)
 *
 * Template part used on index.php
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

$cat = get_queried_object();

if( have_posts() ) : ?>

  <section class="post-grid">
    <div class="container">
      <div class="row">
        <div class="col-12 sm-text-center">
          <h2>All <?php echo $cat->name; ?> Ideas &amp; Resources</h2>
        </div>

        <?php while( have_posts() ) : the_post();
          // Post Fields
          $image = featuredURL('post_grid');
          $type = get_the_terms($post->ID, 'resource')[0]->slug;
          $iconWhite = wp_get_attachment_image_src(get_field('category_icon_white', $cat), 'category_icon');
          $size = $image ? 'cover' : 'auto 50%';
          $video = get_field('video_link');
          $audio = get_field('audio_link');
          $worksheet = get_field('worksheet');

          // Images
          if( $image ) :
            $img = $image;
            $class = '';
          elseif( $type == 'book' || $type == 'link' ) :
            $img = '';
            $class = ' ' . $type;
          else :
            $img = $iconWhite[0];
            $class = '';
          endif; ?>

          <div class="col-6 stretch">
            <div class="post-block">
              <a href="<?php the_permalink(); ?>" class="post-block__img<?php echo $class; ?>" style="background: #0356a4 url('<?php echo $img; ?>') center/<?php echo $size; ?> no-repeat"></a>

              <a href="<?php the_permalink(); ?>" class="post-block__info">
                <div>
                  <h4><?php the_title(); ?></h4>

                  <h5>By <?php the_author(); ?></h5>

                  <p><em><?php echo do_shortcode('[rt_reading_time postfix="min read"]'); ?></em></p>
                </div>

                <div class="post-block__formats">

                  <?php if( $worksheet ) : ?>
                    <i class="far fa-file-alt"></i>
                  <?php endif;

                  if( $video ) : ?>
                    <i class="fab fa-youtube"></i>
                  <?php endif;

                  if( $audio ) : ?>
                    <i class="far fa-microphone-alt"></i>
                  <?php endif; ?>

                </div>
              </a>

              <div class="post-block__icons text-right">
                <i class="far fa-heart"></i>

                <i class="far fa-check-square"></i>
              </div>
            </div>
          </div>

        <?php endwhile; ?>

        <div class="col-12 text-center">
          <?php the_posts_pagination( array('mid_size' => 2) ); ?>
        </div>

      </div>
    </div>
  </section>

<?php endif; ?>
