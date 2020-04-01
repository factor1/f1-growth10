<?php
/*
 * Hero (home)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Hero Custom Fields
$img = featuredURL('home_hero');
$headline = get_field('home_hero_headline_text'); ?>

<section class="hero--home" style="background: url('<?php echo $img; ?>') center/cover no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-10 sm-col-11 col-centered text-center">
        <h1><?php echo $headline; ?></h1>
      </div>
    </div>
  </div>
</section>
