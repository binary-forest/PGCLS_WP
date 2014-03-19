<?php get_header(); ?>
        <div class="row">
                <div class="col-md-8">

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                                <div class="panel-body">
                                        <div class="row text-left">
                                                    <?php the_content(); ?>
                                        </div>
                                </div>
                        </div>

                        <?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

                </div> <!-- end col-md-8 -->
                <div class="col-md-4">
                        <?php get_sidebar(); ?>
                </div> <!-- end col-md-4 -->

        </div> <!-- end row -->
<?php get_footer(); ?>