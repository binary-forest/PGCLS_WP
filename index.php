<?php get_header(); ?>
	<div class="row">
		<div class="col-md-8">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="panel panel-default">
				<div class="panel-heading">
				 	<h1 class="panel-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<a class="thumbnail hidden-xs" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('medium'); ?>
								<?php } else { ?>
									<img class='hidden-xs' src="http://placehold.it/200x100">
								<?php } ?>
					        </a>
						</div>
						<div class="col-sm-8 col-md-8 text-left">
							<h4 class="media-heading"><small><i>Posted on <?php the_time('F jS, Y') ?>, Posted in <?php the_category(', '); ?></i></small></h4>
							<?php the_excerpt(); ?> 
						</div>
					</div>
				</div>
			</div>

			<?php endwhile; ?>
			<!-- End of the main loop -->

			<!-- Add the pagination functions here. -->
			<ul class="pager">
				<li class="previous"><?php next_posts_link( '&larr; Older posts' ); ?></li>
  				<li class="next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></li>
			</ul>
			<?php else : ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

		</div> <!-- end col-md-8 -->
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div> <!-- end col-md-4 -->

	</div> <!-- end row -->
<?php get_footer(); ?>