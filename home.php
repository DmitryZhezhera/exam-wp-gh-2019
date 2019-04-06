<?php
/* Template Name: home */
get_header();

if ( have_posts() ) :?>
    <main>
        <section class="exam-home-header">
            <div class="exam-container">
                <div class="exam-home__carousel">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="exam-home-header__slide">
                                    <ul class="exam-home-header__slide-socials">
                                        <li class="exam-home-header__slide-social"><a class="exam-home-header__slide-social-link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="exam-home-header__slide-social"><a class="exam-home-header__slide-social-link"  href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li class="exam-home-header__slide-social"><a class="exam-home-header__slide-social-link"  href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li class="exam-home-header__slide-social"><a class="exam-home-header__slide-social-link"  href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>

                                    <div class="exam-home-header__slide-texts">
                                        <h2 class="exam-home-header__slide-title">Georgina Alson</h2>
                                        <p class="exam-home-header__slide-subtitle">young model 2020</p>
                                    </div>
                                    <img class="exam-home-header__slide-img" src="<?php bloginfo( 'template_url' ); ?>/img/slide-main-img.jpg" alt="img">
                                    <label class="exam-home-header__slide-btn-wrap">
                                        <a class="exam-btn exam-home-header__slide-btn" href="#">VIEW PROFILE</a>
                                    </label>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="exam-home-header__slide">
                                    <ul class="exam-home-header__slide-socials">
                                        <li class="exam-home-header__slide-social"><a class="exam-home-header__slide-social-link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="exam-home-header__slide-social"><a class="exam-home-header__slide-social-link"  href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li class="exam-home-header__slide-social"><a class="exam-home-header__slide-social-link"  href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li class="exam-home-header__slide-social"><a class="exam-home-header__slide-social-link"  href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>

                                    <div class="exam-home-header__slide-texts">
                                        <h2 class="exam-home-header__slide-title">Georgina Alson</h2>
                                        <p class="exam-home-header__slide-subtitle">young model 2020</p>
                                    </div>
                                    <img class="exam-home-header__slide-img" src="<?php bloginfo( 'template_url' ); ?>/img/slide-main-img.jpg" alt="img">
                                    <label class="exam-home-header__slide-btn-wrap">
                                        <a class="exam-btn exam-home-header__slide-btn" href="#">VIEW PROFILE</a>
                                    </label>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="exam-home-header__slide">
                                    <ul class="exam-home-header__slide-socials">
                                        <li class="exam-home-header__slide-social"><a class="exam-home-header__slide-social-link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="exam-home-header__slide-social"><a class="exam-home-header__slide-social-link"  href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li class="exam-home-header__slide-social"><a class="exam-home-header__slide-social-link"  href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li class="exam-home-header__slide-social"><a class="exam-home-header__slide-social-link"  href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>

                                    <div class="exam-home-header__slide-texts">
                                        <h2 class="exam-home-header__slide-title">Georgina Alson</h2>
                                        <p class="exam-home-header__slide-subtitle">young model 2020</p>
                                    </div>
                                    <img class="exam-home-header__slide-img" src="<?php bloginfo( 'template_url' ); ?>/img/slide-main-img.jpg" alt="img">
                                    <label class="exam-home-header__slide-btn-wrap">
                                        <a class="exam-btn exam-home-header__slide-btn" href="#">VIEW PROFILE</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="exam-container">
            <section class="exam-talents">
                <ul class="exam-talents__categories">
                    <li class="exam-talents__category"><a class="exam-talents__category-link" href="#">Actor</a></li>
                    <li class="exam-talents__category"><a class="exam-talents__category-link" href="#">Musician</a></li>
                    <li class="exam-talents__category"><a class="exam-talents__category-link" href="#">Comedian</a></li>
                    <li class="exam-talents__category"><a class="exam-talents__category-link" href="#">Model</a></li>
                </ul>
				<?php
				$args = array(
					'post_type'      => 'talent',
					'posts_per_page' => 8,
				);

				$advantages = get_posts( $args );
				?>
                <ul class="exam-talents__cards">
					<?php
					foreach ( $advantages as $post ) {
						setup_postdata( $post ); ?>
                        <li class="exam-talents__card">
							<?php the_post_thumbnail(); ?>
                            <div class="exam-talents__card-modal">
                                <div class="exam-talents__card-modal__content">
                                    <h2 class="exam-talents__card-name"><?php the_title(); ?></h2>
                                    <p class="exam-talents__card-category">comedian</p>
                                </div>
                            </div>
                        </li>
					<?php }
					wp_reset_postdata();
					?>
                </ul>

                <a class="exam-btn exam-btn--more" href="#">explore more</a>
            </section>
            <section class="exam-news">
                <h2 class="exam-section-title exam-text-center">Latest News</h2>

	            <?php
	            $args = array(
		            'post_type'      => 'post',
		            'posts_per_page' => 3,
	            );

	            $advantages = get_posts( $args );
	            ?>
                <ul class="exam-news__list">
		            <?php
		            foreach ( $advantages as $post ) {
			            setup_postdata( $post ); ?>
                        <li class="exam-news__list-item">
                            <div class="exam-news__list-item-img-wrap">
	                            <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="exam-news__list-item-main">
                                <h3 class="exam-news__list-item-title"><?php the_title(); ?></h3>
                                <span class="exam-news__list-item-date"><?php echo get_post_time( 'Y F j' )?></span>
                            </div>
                        </li>
		            <?php }
		            wp_reset_postdata();
		            ?>
                </ul>
            </section>
        </div>
    </main>
<?php else :
//			get_template_part( 'template-parts/content', 'none' );
endif;
get_footer();
