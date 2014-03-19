<?php get_header(); ?>
        <div class="row">
                <div class="col-md-8">

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h1 class="panel-title p-name"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                                </div>
                                <div class="panel-body">
                                        <div class="row text-left">
                                                <h4 class="media-heading text-center"><small><i>Posted on <?php the_time('F jS, Y') ?>, Posted in <?php the_category(', '); ?></i></small></h4>

                                                <?php if ( has_post_thumbnail() ) {
                                                        the_post_thumbnail('', array('class' => 'img-responsive center-block hidden-xs')); ?>
                                                <?php } ?>
                                                <?php the_content(); ?>
                                                <?php comments_template(); ?>
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