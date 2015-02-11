<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

<!-- FASHION -->            
    <section id="fashion" class="masonry" >      
    <?php if(get_field('entry', 135)): ?>
        
        <?php while(the_repeater_field('entry', 135)): ?>
          
            
            <?php 
                    $image = get_sub_field('thumbnail', 135);

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

                        <a href="<?php echo $url; ?>" title="<?php echo $gname;?>" rel="lightbox[fashion]" class="c-item <?php echo $size; ?>">
                            <!--<img data-original="<?php // echo $thumb; ?>"  />-->
                            <img data-original="<?php echo $thumb; ?>"  />
                            <?php endif; ?>     
                        </a>
        
        <?php endwhile; ?>
            
        <?php endif; ?>
            
 </section><!-- #entry-content -->
<!-- FASHION --> 

<!-- BEAUTY -->            
    <section id="beauty" class="masonry">      
    <?php if(get_field('entry', 61)): ?>
        
        <?php while(the_repeater_field('entry', 61)): ?>
          
            
            <?php 
                    $image = get_sub_field('thumbnail', 61);

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

                        <a href="<?php echo $url; ?>" title="<?php echo $gname; ?>" rel="lightbox[beauty]" class="b-item <?php echo $size; ?>">
                            <img data-original="<?php echo $thumb; ?>"  />
                            
                            <?php endif; ?> 
                               
                            
                        </a>
        
        <?php endwhile; ?>
            
        <?php endif; ?>
            
 </section><!-- #entry-content -->
<!-- BEAUTY -->  
            
            
<!-- ADVERTISING -->            
    <section id="advertising" class="masonry">      
    <?php if(get_field('entry', 152)): ?>
        
        <?php while(the_repeater_field('entry', 152)): ?>
          
            
            <?php 
                    $image = get_sub_field('thumbnail', 152);

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

                        <a href="<?php echo $url; ?>" title="<?php echo $gname; ?>" rel="lightbox[advertising]" class="a-item <?php echo $size; ?>">
                            <img data-original="<?php echo $thumb; ?>"  />
                            
                            <?php endif; ?> 
                                                    
                        </a>
        
        <?php endwhile; ?>
            
        <?php endif; ?>
            
 </section><!-- #entry-content -->
<!-- ADVERTISING -->    
            
            

            
            
<!-- PROFILE -->                         
            <section id="profile" class="entry-content">

<?php if( have_rows('profile', 165) ): ?> 
                
<ul class="profile_list">

	<?php while( have_rows('profile', 165) ): the_row(); 
		// vars
		$textjp = get_sub_field('jp');
		$texten = get_sub_field('en');
		?>

		<li>
            <span class="jp"><?php echo $textjp; ?></span>
            <span class="en"><?php echo $texten; ?></span>
		</li>
	<?php endwhile; ?>
	</ul>                                
<?php endif; ?>                  
                
                <?php 
                    $id=165; $post = get_post($id); $content = apply_filters('the_content', $post->post_content); echo $content;   
                    ?>
              </section>
<!-- PROFILE -->  
            
              
            
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php // get_sidebar( 'content' ); ?>
</div><!-- #main-content -->





<?php
// get_sidebar();
get_footer();
