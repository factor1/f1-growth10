<?php
/*
 * Welcome from checkout Header
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

global $current_user;
$user_info = get_currentuserinfo();
$name = $user_info->first_name; ?>

<section class="dashboard-welcome">
  <div class="container">
    <div class="row row--justify-content-start">
      <div class="col-12 text-center">

        <h2>
          <?php echo $user_info->first_name . ",\n"; ?>
          Thank You for Joining the G10 Community!
        </h2>

        <?php the_content(); ?>

      </div>
    </div>
  </div>
</section>
