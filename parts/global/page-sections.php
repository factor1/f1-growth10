<?php
/**
 * Page Sections
 *
 * Template part used on the flexible template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.2.0
 */

if( have_rows('page_sections') ) : while( have_rows('page_sections') ) : the_row();

  if( get_row_layout() == 'callout' ) :

    get_template_part('parts/global/callout');

  elseif( get_row_layout() == 'text_image_split' ) :

    get_template_part('parts/global/text-image-split');

  elseif( get_row_layout() == 'sixty_text_image_split' ) :

    get_template_part('parts/global/sixty-text-image-split');

  elseif( get_row_layout() == 'practice_leaders' ) :

    get_template_part('parts/global/practice-leaders');

  elseif( get_row_layout() == 'testimonials_slider' ) :

    get_template_part('parts/global/testimonials');

  elseif( get_row_layout() == 'cta' ) :

    get_template_part('parts/global/cta');
  
  elseif( get_row_layout() == 'cta2' ) :

    get_template_part('parts/global/cta-hashed');

  elseif( get_row_layout() == 'eighty_twenty_text_split' ) :

    get_template_part('parts/global/eighty-twenty-text-split');

  elseif( get_row_layout() == 'text_image_banner' ) :

    get_template_part('parts/global/text-image-banner');

  elseif( get_row_layout() == 'four_column_content' ) :

    get_template_part('parts/global/4-col-content');

  elseif( get_row_layout() == 'text_columns_split' ) :

    get_template_part('parts/global/2-column-video-3_rows');

  elseif( get_row_layout() == 'centered_card_banner' ) :

    get_template_part('parts/global/card-banner');

  elseif( get_row_layout() == 'tabbed_content_section' ) :

    get_template_part('parts/global/tabbed-content-section');

  elseif( get_row_layout() == 'timeline' ) :

    get_template_part('parts/global/timeline');

  elseif( get_row_layout() == 'icon_data' ) :

    get_template_part('parts/global/icon-data');

  elseif( get_row_layout() == 'logo_slider' ) :

    get_template_part('parts/global/logo-slider');

  elseif( get_row_layout() == 'three_column_content' ) :

    get_template_part('parts/global/three-column-content');

  endif;

endwhile; endif; ?>
