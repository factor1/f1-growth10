<?php
/*
 * Welcome from checkout Header
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */
 
global $current_user;
get_currentuserinfo();


?>

<div class="container" style="padding-top: 25px;">
      <div class="row row--justify-content-start">
        <div class="col-12 sm-text-center">
          <h2 class="text-center">          
          <?php $user_info = get_userdata(1);
      echo $user_info->first_name . ",\n";
?>
          Thank You for Joining the G10 Community!
          </h2>
          
          <?php the_content(); ?>
        </div>
      </div>
</div>
