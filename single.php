<?php get_header(); ?>

	<main role="main">

		<section class="container">

		<?php while (have_posts()) : the_post(); ?>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<section class="flky">
				<section class="feature">
					<figure data-aos="fade-left" data-aos-offset="0" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
						<p>
							<?php $thumb = get_post_thumbnail_id(); ?>
							<img
								alt=""
								src="<?php echo wp_get_attachment_image_src($thumb, 'w01')[0]; ?>"
								sizes="auto"
								data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 'w03'); ?>"
								class="lazyload" />
						</p>
					</figure>
				</section>
				<section class="feature">
					<figure data-aos="fade-left" data-aos-offset="0" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="200">
						<p>
							<?php $thumb = get_post_thumbnail_id(); ?>
							<img
								alt=""
								src="<?php echo wp_get_attachment_image_src($thumb, 'w01')[0]; ?>"
								sizes="auto"
								data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 'w03'); ?>"
								class="lazyload" />
						</p>
					</figure>
				</section>
				<section class="feature">
					<figure data-aos="fade-up" data-aos-offset="0" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
						<p>
							<?php $thumb = get_post_thumbnail_id(); ?>
							<img
								alt=""
								src="<?php echo wp_get_attachment_image_src($thumb, 'w01')[0]; ?>"
								sizes="auto"
								data-srcset="<?php echo wp_get_attachment_image_srcset($thumb, 'w03'); ?>"
								class="lazyload" />
						</p>
					</figure>
				</section>
			</section>
			<?php the_content(); ?>
		<?php endwhile; ?>

		</section>

		<script>

			(function ($, root, undefined) {
				$(function () {

					var loaded, flky, scrollTop, delta;

					$(document).ready(function() {
						init();
					});

					$(window).load(function() {
						reveal();
						animate();
					});

					function init() {

					}

					function reveal() {

					}

					function animate() {
						requestAnimationFrame( animate );

					}

					(function() {
						var lastTime = 0;
						var vendors = ['ms', 'moz', 'webkit', 'o'];
						for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
							window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
							window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
						}

						if (!window.requestAnimationFrame) {
							window.requestAnimationFrame = function(callback, element) {
								var currTime = new Date().getTime();
								var timeToCall = Math.max(0, 16 - (currTime - lastTime));
								var id = window.setTimeout(function() { callback(currTime + timeToCall); },
								timeToCall);
								lastTime = currTime + timeToCall;
								return id;
							}
						}

						if (!window.cancelAnimationFrame) {
							window.cancelAnimationFrame = function(id) {
								clearTimeout(id);
							}
						}
					}());

				});
			})(jQuery, this);

		</script>

	</main>

<?php get_footer(); ?>
