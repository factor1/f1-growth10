<?php
/*
 * 2-Column List | Video (home)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

// 3-Column Section Custom Fields
$headline = get_field('3_column_section_headline');

if( have_rows('3_column_section_columns') ) :
  $i = 0; ?>

<section class="three-column-section">
    <div class="container">
        <div class="row">
            <div class="col-4 sm-col-8 col-centered text-center">
				<h1>ACF IMAGE</h1>
            </div>
        
            <div class="col-7 sm-col-6 col-centered text-center">
				<h1>ACF WYSIWYG</h1>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>

<?php endif; ?>
