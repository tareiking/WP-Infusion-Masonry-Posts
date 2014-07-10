<!-- This file is used to markup the public-facing widget. -->
<?php

$r = new WP_Query( apply_filters( 'infusion_recent_posts_args', array(
	'posts_per_page'      => 12,
	'no_found_rows'       => true,
	'post_status'         => 'publish',
	'ignore_sticky_posts' => true
) ) );

if ($r->have_posts()) : ?>

<!-- @TODO: Must declare support if using foundation columns, helps go full screen -->
</div></div>

<!-- @TODO: If Widget Header specified -->
<div class="latest-articles">
	<div class="row">
		<div class="small-12">
			<h3><?php _e( 'Latest Articles') ?></h3>
		</div>
	</div>
</div>
<!-- @TODO: If Widget Header specified -->

<!-- Masonry Widget Render starts here... -->
<div id="masonry-loop">

<?php while ( $r->have_posts() ) : $r->the_post(); ?>

		<article class="masonry-entry" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
			<div class="masonry-thumbnail">
				<?php // if ( has_post_thumbnail() ) { ?>
					<?php //the_post_thumbnail('masonry-thumb'); ?>
				<?php //} else { ?>
					<img class="masonry-thumb" src="<?php echo get_template_directory_uri() . '/assets/img/0'. rand(1, 9) . '.jpg' ?>" alt="">
				<?php // } ?>
			</div><!--.masonry-thumbnail-->

			<div class="masonry-details">
				<h5 class="masonry-post-title"><a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><span> <?php the_title(); ?></span></a></h5>
				<span class="masonry-post-date">
					<a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><?php echo get_the_date( 'F j' ); ?></a>
				</span>
				<!-- <div class="masonry-post-excerpt"> -->
					<!-- <?php the_excerpt(); ?> -->
				<!-- </div>.masonry-post-excerpt -->
			</div><!--/.masonry-entry-details -->  
		</article><!--/.masonry-entry-->
	<?php endwhile; ?>

<?php endif; ?>

</div><!--/#masonry-loop-->

<!-- @TODO: Must declare support if using foundation columns, helps go full screen -->
<div class="row">
	<div class="small-12 columns">
