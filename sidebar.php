<?php
/**
 * Sidebar
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.5.0
 */ 

// Get current user 
$currentUser = get_current_user_id();

// Get current post ID 
$currentID = get_the_ID();

// Get course term
$course = get_the_terms(get_the_ID(), 'course')[0]; 

// WP Query arguments 
$args = array(
  'post_type' => 'lesson',
  'post_parent' => 0,
  'posts_per_page' => -1,
  'orderby' => 'menu_order',
  'order' => 'ASC',
  'tax_query' => array(
    array(
      'taxonomy' => 'course',
      'field' => 'slug',
      'terms' => $course->slug,
    )
  ),
); 

// WP Query
$lessons = new WP_Query($args); 

if( $lessons->have_posts() ) : ?>

  <aside class="sidebar--lesson">
    <div class="sm-only">
      <button class="menu-icon menu-icon--lesson"><span></span> Course Menu</button>
    </div>

    <ul class="sidebar--lesson__menu">

      <?php while( $lessons->have_posts() ) : $lessons->the_post(); 
        $id = get_the_ID();

        // For "active" link 
        $parentActive = $id == $currentID ? ' class="active"' : '';

        // For parent post's mark as read functionality 
        $userHasRead = get_user_meta($currentUser, 'read_post_' . $id, true);
        $liClass = $userHasRead ? ' class="read"' : '';
      
        // Check if children posts exist 
        $children = get_children( 
          array( 
            'post_parent' => $id,
            'post_type' => 'lesson',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'tax_query' => array(
              array(
                'taxonomy' => 'course',
                'field' => 'slug',
                'terms' => $course->slug,
              )
            ),
          ) 
        ); 

        // Isolate children ids for easier comparison
        $childIDs = [];
        if( !empty($children) ) : 
          foreach( $children as $child ) : 
            $childIDs[] = $child->ID;
          endforeach;
        endif;
        
        // For visual indications 
        $onParent = $id == $currentID && !empty($children); // if on parent and there are children
        $onChild = in_array($currentID, $childIDs); // is open if on child
        $isOpen = $onParent || $onChild ? ' class="open"' : ''; ?>

        <li<?php echo $liClass; ?>>

          <a href="<?php the_permalink(); ?>"<?php echo $parentActive; ?>><?php the_title(); ?></a>

          <?php if( !empty($children) ) : ?>

            <ul<?php echo $isOpen; ?>>

              <?php foreach( $children as $child ) : 
                $childActive = $currentID == $child->ID ? ' class="active"' : ''; 
                $userHasReadChild = get_user_meta($currentUser, 'read_post_' . $child->ID, true);
                $childLiClass = $userHasReadChild ? ' class="read"' : ''; ?>

                <li<?php echo $childLiClass; ?>>
                  <a href="<?php the_permalink($child->ID); ?>"<?php echo $childActive; ?>><?php echo $child->post_title; ?></a>
                </li>

              <?php endforeach; ?>

            </ul>

          <?php endif; ?>

        </li>

      <?php endwhile; ?>

    </ul>
  </aside>

<?php endif; wp_reset_postdata(); ?>