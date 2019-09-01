<?php
/*
Template Name: Testimonials Page
*/
?>
<?php get_header(); ?>
	<div id="content" class="content">
		<div class="inner-content wrapper cf grid--four-two">
			<main id="main" class="module module--primary" role="main" itemscope itemprop="mainContentOfPage">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'module__inner' ); ?> role="article">
					<header class="article-header module__inner__header">
						<h1 class="page-title" itemprop="headline"><a href = "<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					</header> <?php // end article header ?>
					<section class="entry-content cf module__inner__section" itemprop="articleBody">
						<?php the_excerpt(); ?>
					</section> <?php // end article section ?>
				</article>
				<?php endwhile; else : ?>
					<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
							<p><?php _e( 'This is the error message in the testimonials.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>
				<?php endif; ?>
			</main><!-- /End main -->
		</div><!-- /end .inner-content -->
		<div class="inner-content wrapper cf grid--five-one">
			<div class="five-layout">
				<article role="article">
					<section class="entry-content" itemprop="articleBody">
						<?php
							//'posts_per_page' => -1: It returns all posts from wp_posts table
							$testimonials_args = array (
								'post_type' => 'testimonials',
								'posts_per_page' => -1,
								'orderby' => 'date',
								'order' => 'DESC'
							);
							$testimonials_posts = new WP_Query( $testimonials_args );
							if ( $testimonials_posts->have_posts() ) { ?>
								<div class="testimonials-list">
									<?php while ( $testimonials_posts->have_posts() ) {
										$testimonials_posts->the_post();
									?>
										<div class="quote" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
											<blockquote class="testimonials-text" itemprop="reviewBody">
												<p><?php the_excerpt(); ?></p>
												<hr>
												<p><i><?php the_date(); ?></i></p>
											</blockquote>
											<cite class="author" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
												<a href = "<?php the_permalink() ?>"><?php the_title(); ?></a>
											</cite><!--/.author-->
										</div><!-- End .quote -->
									<?php } ?>
								</div><!-- /end .class="testimonials-list" -->
						<?php }
						wp_reset_postdata();
						?>
					</section> <!-- end article section -->
				</article> <!-- end article -->
			</div> <!-- end .full-layout -->
		</div><!-- /end .inner-content -->
		<div class="inner-content wrapper cf grid--four-two">
			<aside class="module module--primary four-layout">
				<?php if (have_posts()) :?>
				<?php else : ?>
					<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
							<p><?php _e( 'This is the error message in the template-testimonials-page.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>
				<?php endif; ?>
			</aside><!-- /End aside -->
		</div><!-- /end .inner-content -->
	</div>
<?php get_footer(); ?>