<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Page thumbnail and title.
		//twentyfourteen_post_thumbnail();
		//the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
	?>

	<div class="entry-content js-masonry">
		<?php // the_content(); ?>
        

           
        <?php if(get_field('entry')): ?>
        
        <?php while(the_repeater_field('entry')): ?>
          
            
            <?php 
                    $image = get_sub_field('thumbnail');

                    if( !empty($image) ): 

                        // vars
                        $url = $image['url'];
                        $title = $image['title'];
                        $alt = $image['alt'];
                        $caption = $image['caption'];

                        // thumbnail
                        $size = get_sub_field('thumbnail_size');
                        $thumb = $image['sizes'][ $size ];
                        $gname = get_sub_field('story_name');
            ?>

                        <a href="<?php echo $url; ?>" title="<?php echo $gname; echo ',&nbsp;'; echo $title; ?>" rel="lightbox[<?php echo $gname; ?>]" class="item <?php echo $size; ?>">
                            <img src="<?php echo $thumb; ?>"  />
                            
                            <?php endif; ?> 
                            
                         <?php  
                            $images = get_sub_field('gallery');
                            if( $images ): 
                             ?>
                        <?php foreach( $images as $image ): ?>
                            <a href="<?php echo $image['url']; ?>" title="<? php echo $gname; echo ',&nbsp;';  echo $image['caption'];?>" rel="lightbox[<?php echo $gname; ?>]" style="display:none;">
                                        </a>
                                <?php endforeach; ?>
                                
                            <?php endif; ?>    
                            
                        </a>
        
        <?php endwhile; ?>
            
        <?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
