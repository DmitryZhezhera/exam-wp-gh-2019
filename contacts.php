<?php
/* Template Name: contacts */
get_header();

if ( have_posts() ) :?>
    <main class="exam-contacts">
        <div class="exam-contacts__left">
            <img class="exam-contacts__left-img" src="<?php bloginfo( 'template_url' ); ?>/img/contacts-img.jpg" alt="img">
            <div class="exam-contacts__left-main">
                <h2 class="exam-contacts__left-title">Contact
                    us _</h2>
                <p class="exam-contacts__left-subtitle">mass impressions</p>
            </div>
            <a class="exam-btn exam-contacts__left-btn" href="#">get directions</a>
        </div>
        <div class="exam-contacts__right">
            <div class="exam-contacts__right-main">
                <p class="exam-contacts__right-main-title">
                    we would love to hear from you, whether you want more information on any of our acts or wish to discover how our artists can support your event.
                    our acts or wish to discover how our artists can support your event.
                </p>
                <ul class="exam-contacts__list">
                    <li class="exam-contacts__list-item">
                        <img class="exam-contacts__list-item-img" src="<?php bloginfo( 'template_url' ); ?>/img/contacts-home.png" alt="img">
                        <p class="exam-contacts__list-item-text">
                            79 - 81 Berkeley Square <br>
                            London <br>
                            WC923 9TT
                        </p>
                    </li>
                    <li class="exam-contacts__list-item">
                        <img class="exam-contacts__list-item-img" src="<?php bloginfo( 'template_url' ); ?>/img/contacts-phone.png" alt="img">
                        <p class="exam-contacts__list-item-text">
                            +44 (0) 234 567 8910 <br>
                            +44 (0) 234 567 8910
                        </p>
                    </li>
                    <li class="exam-contacts__list-item">
                        <img class="exam-contacts__list-item-img" src="<?php bloginfo( 'template_url' ); ?>/img/contacts-mail.png" alt="img">
                        <p class="exam-contacts__list-item-text">
                            hello@mitalent.com
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </main>
<?php else :
//			get_template_part( 'template-parts/content', 'none' );
endif;
get_footer();
