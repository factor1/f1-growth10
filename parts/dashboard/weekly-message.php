<?php
/*
 * Weekly Message
 *
 * Template part used on the dashboard template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.3.0
 */

// Weekly Message Custom Fields
$content = get_field('dashboard_weekly_message'); ?>

<section class="weekly-message">
  <?php echo $content; ?>
</section>
