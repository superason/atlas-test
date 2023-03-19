<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<div class="page-content">
    <div class="section top-section screen-section">
        <?
        $top_block_title = getTitle(68);
        $top_block_main_info = getHeading(68)[0];
        $top_block_info = getParagraph(68)[0];
        ?>
        <div class="container">
            <div class="top-section-content">
                <div class="title-wrap">
                    <h1 class="title-xl"><?= $top_block_title; ?></h1>
                </div>
                <div class="top-section-info d-flex jc-sb">
                    <div class="top-section-col-left col-100-xs">
                        <div class="text"><?= $top_block_main_info; ?></div>
                    </div>
                    <div class="top-section-col-right col-100-xs">
                        <div class="text text-xs"><?= $top_block_info; ?>
                        </div>
                        <div class="top-section-contact-block">
                            <div class="top-links-wrap d-flex">
                                <a href="#" class="subtitle subtitle-xs wh-color">Our Story</a>
                                <div class="subtitle subtitle-xs">Join Our Team</div>
                            </div>
                            <div class="phone-wrap d-flex al-center">
                                <div class="phone">
                                    <div class="phone-text"><?php echo get_option('site_phone_text'); ?>:</div>
                                    <div class="phone-link-wrap"><a href="tel:<?php echo get_option('site_phone'); ?>" class="phone-link"><?php echo get_option('site_phone'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="scroll-next" class="next-step"></div>
    </div>
    <div class="section screen-section info-section">
        <?
        $second_block_title = getTitle(69);
        $second_block_info = getParagraph(69)[0];
        $second_block_pic = get_field("picture", 69);
        ?>
        <div class="logo-elem hidden-xs"></div>
        <div class="container-2">
            <div class="title-wrap">
                <h2 class="title"><?= $second_block_title; ?></h2>
            </div>
            <div class="section-block">
                <div class="d-flex special-block special-block-right col-100-xs">
                    <div class="special-block-pic img-wrap col-100-xs">
                        <img src="<?= $second_block_pic; ?>" alt="<?= $second_block_title; ?>" title="<?= $second_block_title; ?>">
                    </div>
                    <div class="special-block-info col-100-xs">
                        <div class="text text-xs"><?= $second_block_info; ?></div>
                        <div class="btn-wrap">
                            <a href="#" class="btn col-100-xs">Find Location Near You</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section theme-back section-xs">
        <div class="container-4">
            <div class="d-flex w-100">
                <div class="section-xs-col section-xs-col-left col-100-xs">
                    <div class="text">
                        Our commitment to excellence is reflected in each of Atlas’ distinct services.
                    </div>
                    <div class="btn-wrap d-flex al-center jc-center">
                        <a href="#" class="btn">Improve Your Health</a>
                    </div>
                </div>
                <div class="section-xs-col section-xs-col-right col-100-xs">
                    <div class="text text-xs">
                        As a leading consultant for the<br>
                        <span class="theme-mark">management, operations, acquisition,<br>
                            development & improvement</span><br> of senior healthcare facilities, we specialize in assisting underperforming facilities raise their standards of performance and outcomes.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section screen-section experts-section">
        <?
        $third_block_title = getTitle(73);
        $third_block_info = getParagraph(73)[0];
        $third_block_pic = get_field("picture", 73);
        ?>
        <div class="container-2">
            <div class="title-wrap">
                <h2 class="title"><?= $third_block_title; ?></h2>
            </div>
            <div class="section-block">
                <div class="d-flex special-block special-block-left special-block-colored col-100-xs">
                    <div class="special-block-info col-100-xs">
                        <div class="text text-xs"><?= $third_block_info; ?>
                            <br><span class="bold-mark">Now, we put it to work for yours.</span>
                        </div>
                        <div class="btn-wrap">
                            <a href="#" class="btn dark-btn col-100-xs">Our Services</a>
                        </div>
                    </div>
                    <div class="special-block-pic img-wrap col-100-xs">
                        <img src="<?= $third_block_pic; ?>" alt="<?= $third_block_title; ?>" title="<?= $third_block_title; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section screen-section support-section">
        <?
        $support_block_title = getTitle(75);
        $support_block_info = getParagraph(75)[0];
        ?>
        <div class="logo-elem hidden-xs"></div>
        <div class="container">
            <div class="title-wrap">
                <h2 class="title"><?= $support_block_title; ?></h2>
            </div>
            <div class="section-block">
                <div class="d-flex w-100">
                    <div class="support-col support-btn-wrap col-100-xs">
                        <a href="#" class="btn dark-btn w-100">Join Our Team</a>
                    </div>
                    <div class="support-col support-info col-100-xs">
                        <div class="text"><?= $support_block_info; ?></div>
                        <div class="phone-wrap theme-phone-wrap d-flex al-center">
                            <div class="phone">
                                <div class="phone-text"><?php echo get_option('site_phone_text'); ?>:</div>
                                <div class="phone-link-wrap"><a href="tel:<?php echo get_option('site_phone'); ?>" class="phone-link"><?php echo get_option('site_phone'); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a href="#" class="btn light-btn col-100-xs">News</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section facilities-section theme-back">
        <div class="container">
            <div class="title-wrap">
                <h2 class="title theme-color">Our Facilities</h2>
            </div>
            <div class="section-block">
                <div class="tabs-wrap">
                    <div class="tabs-nav w-100 d-flex al-center jc-center">
                        <? $i = 1; ?>
                        <? $terms = get_terms([
                            'taxonomy' => 'location-categories',
                            'hide_empty' => true,
                            'orderby' => 'id'
                        ]); ?>
                        <? foreach ($terms as $term) : ?>
                            <div class="tab theme-tab <? echo $i == 1 ? 'active' : '' ?>"><?= $term->name; ?></div>
                            <? $i++; ?>
                        <? endforeach; ?>
                    </div>
                    <div class="tabs-content-wrap">
                        <? $k = 1; ?>
                        <? foreach ($terms as $term) : ?>
                            <div class="tabs-content <? echo $k == 1 ? 'opened' : '' ?>">
                                <div class="facilities-wrap d-flex w-100">
                                    <?php
                                    global $post;
                                    $postslist = get_posts(array(
                                        'post_type' => 'facilities',
                                        'posts_per_page' => 100,
                                        'tax_query' => [
                                            [
                                                'taxonomy' => 'location-categories',
                                                'field' => 'term_id',
                                                'terms' => $term->term_id,
                                                'include_children' => false,
                                            ],
                                        ],
                                    ));

                                    $t = 1;
                                    foreach ($postslist as $post) {
                                        setup_postdata($post);
                                    ?>
                                        <div class="facilities-item col-100-xs <? echo $t > 6 ? 'hidden' : '' ?>">
                                            <a href="<?php echo get_field("link"); ?>" class="facilities-item-link" rel="nofollow" target="_blank">
                                                <? if ($preview = get_field("picture")) : ?>
                                                    <div class="facilities-item-pic img-wrap">
                                                        <img src="<?php echo $preview; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                                    </div>
                                                <? endif; ?>
                                                <div class="facilities-item-info">
                                                    <div class="facilities-item-name"><?php the_title(); ?></div>
                                                    <? if ($location = get_field("location")) : ?>
                                                        <div class="facilities-item-location"><?php echo $location; ?></div>
                                                    <? endif; ?>
                                                </div>
                                            </a>
                                        </div>
                                    <?php
                                        $t++;
                                    }
                                    wp_reset_postdata();
                                    ?>
                                </div>
                                <div class="show-more-btn">Show more</div>
                            </div>
                            <? $k++; ?>
                        <? endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section map-section theme-back">
        <div class="tabs-wrap">
            <div class="tabs-nav tabs-nav-light-section w-100 d-flex al-center jc-center">
                <? $i = 1; ?>
                <? $terms = get_terms([
                    'taxonomy' => 'location-categories',
                    'hide_empty' => true,
                    'orderby' => 'id'
                ]); ?>
                <? foreach ($terms as $term) : ?>
                    <div class="tab theme-tab dark-tab <? echo $i == 1 ? 'active' : '' ?>"><?= $term->name; ?></div>
                    <? $i++; ?>
                <? endforeach; ?>
            </div>
            <div class="tabs-content-wrap">
                <div class="tabs-content opened">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3042.230579644572!2d-74.5116298!3d40.315039899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3dc1d29cec851%3A0x697409fe3f00eecd!2zNjEgTWFwbGV3b29kIEF2ZSwgQ3JhbmJ1cnksIE5KIDA4NTEyLCDQodCo0JA!5e0!3m2!1sru!2sby!4v1678906250577!5m2!1sru!2sby" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="tabs-content">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3855.318917935514!2d-74.22060908430215!3d40.01718498776519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c177e1fead7ec9%3A0x7e127fccf425c4f5!2zMTgxNSBMYWtld29vZCBSZCwgVG9tcyBSaXZlciwgTkogMDg3NTUsINCh0KjQkA!5e1!3m2!1sru!2sby!4v1679132083330!5m2!1sru!2sby" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?
get_footer();
