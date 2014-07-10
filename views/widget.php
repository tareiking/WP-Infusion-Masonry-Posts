<!-- This file is used to markup the public-facing widget. -->
<?php

$r = new WP_Query( apply_filters( 'infusion_recent_posts_args', array(
	'posts_per_page'      => 12,
	'no_found_rows'       => true,
	'post_status'         => 'publish',
	'ignore_sticky_posts' => true
) ) );

if ($r->have_posts()) : ?>

</div></div>

<div id="masonry-loop">

<?php while ( $r->have_posts() ) : $r->the_post(); ?>

		<article class="masonry-entry" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		    <div class="masonry-thumbnail">
				<?php if ( has_post_thumbnail() ) { ?>
					<?php the_post_thumbnail('masonry-thumb'); ?>
				<?php } else { ?>
					<img class="masonry-thumb" src="<?php echo get_template_directory_uri() . '/assets/img/c02.jpg' ?>" alt="">
				<?php } ?>
		    </div><!--.masonry-thumbnail-->

		    <div class="masonry-details">
		        <h5><a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><span class="masonry-post-title"> <?php the_title(); ?></span></a></h5>
		        <div class="masonry-post-excerpt">
		            <?php the_excerpt(); ?>
		        </div><!--.masonry-post-excerpt-->
		    </div><!--/.masonry-entry-details -->  
		</article><!--/.masonry-entry-->
	<?php endwhile; ?>

<?php endif; ?>

</div><!--/#masonry-loop-->

<div class="row">
	<div class="small-12 columns">
