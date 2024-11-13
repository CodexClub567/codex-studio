<?php
/**
 * Header Builder Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;
ob_start(); ?>
<div class="codex-compontent-description">
<h2><?php echo esc_html__( 'Social Network Links', 'codex' ); ?></h2>
</div>
<?php
$compontent_description = ob_get_clean();
$settings = array(
	'social_settings' => array(
		'control_type' => 'codex_blank_control',
		'section'      => 'general_social',
		'settings'     => false,
		'priority'     => 1,
		'description'  => $compontent_description,
	),
	'facebook_link' => array(
		'control_type' => 'codex_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => codex()->default( 'facebook_link' ),
		'label'        => esc_html__( 'Facebook', 'codex' ),
	),
	'twitter_link' => array(
		'control_type' => 'codex_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => codex()->default( 'twitter_link' ),
		'label'        => esc_html__( 'X formerly Twitter', 'codex' ),
	),
	'threads_link' => array(
		'control_type' => 'codex_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => codex()->default( 'threads_link' ),
		'label'        => esc_html__( 'Threads', 'codex' ),
	),
	'instagram_link' => array(
		'control_type' => 'codex_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => codex()->default( 'instagram_link' ),
		'label'        => esc_html__( 'Instagram', 'codex' ),
	),
	'youtube_link' => array(
		'control_type' => 'codex_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => codex()->default( 'youtube_link' ),
		'label'        => esc_html__( 'YouTube', 'codex' ),
	),
	'vimeo_link' => array(
		'control_type' => 'codex_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => codex()->default( 'vimeo_link' ),
		'label'        => esc_html__( 'Vimeo', 'codex' ),
	),
	'facebook_group_link' => array(
		'control_type' => 'codex_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => codex()->default( 'facebook_group_link' ),
		'label'        => esc_html__( 'Facebook Group', 'codex' ),
	),
	'pinterest_link' => array(
		'control_type' => 'codex_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => codex()->default( 'pinterest_link' ),
		'label'        => esc_html__( 'Pinterest', 'codex' ),
	),
	'linkedin_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'linkedin_link' ),
		'label'        => esc_html__( 'Linkedin', 'codex' ),
	),
	'dribbble_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'dribbble_link' ),
		'label'        => esc_html__( 'Dribbble', 'codex' ),
	),
	'behance_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'behance_link' ),
		'label'        => esc_html__( 'Behance', 'codex' ),
	),
	'patreon_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'patreon_link' ),
		'label'        => esc_html__( 'Patreon', 'codex' ),
	),
	'reddit_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'reddit_link' ),
		'label'        => esc_html__( 'Reddit', 'codex' ),
	),
	'medium_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'medium_link' ),
		'label'        => esc_html__( 'medium', 'codex' ),
	),
	'wordpress_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'wordpress_link' ),
		'label'        => esc_html__( 'WordPress', 'codex' ),
	),
	'github_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'github_link' ),
		'label'        => esc_html__( 'GitHub', 'codex' ),
	),
	'vk_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'vk_link' ),
		'label'        => esc_html__( 'VK', 'codex' ),
	),
	'xing_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'xing_link' ),
		'label'        => esc_html__( 'Xing', 'codex' ),
	),
	'rss_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'rss_link' ),
		'label'        => esc_html__( 'RSS', 'codex' ),
	),
	'google_reviews_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'google_reviews_link' ),
		'label'        => esc_html__( 'Google Reviews', 'codex' ),
	),
	'yelp_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'yelp_link' ),
		'label'        => esc_html__( 'Yelp', 'codex' ),
	),
	'trip_advisor_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'trip_advisor_link' ),
		'label'        => esc_html__( 'Trip Advisor', 'codex' ),
	),
	'imdb_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'imdb_link' ),
		'label'        => esc_html__( 'IMDB', 'codex' ),
	),
	'whatsapp_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'whatsapp_link' ),
		'label'        => esc_html__( 'WhatsApp', 'codex' ),
	),
	'telegram_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'telegram_link' ),
		'label'        => esc_html__( 'Telegram', 'codex' ),
	),
	'soundcloud_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'soundcloud_link' ),
		'label'        => esc_html__( 'SoundCloud', 'codex' ),
	),
	'tumblr_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'tumblr_link' ),
		'label'        => esc_html__( 'Tumblr', 'codex' ),
	),
	'tiktok_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'tiktok_link' ),
		'label'        => esc_html__( 'Tiktok', 'codex' ),
	),
	'discord_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'discord_link' ),
		'label'        => esc_html__( 'Discord', 'codex' ),
	),
	'spotify_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'spotify_link' ),
		'label'        => esc_html__( 'Spotify', 'codex' ),
	),
	'apple_podcasts_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'apple_podcasts_link' ),
		'label'        => esc_html__( 'Apple Podcast', 'codex' ),
	),
	'flickr_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'flickr_link' ),
		'label'        => esc_html__( 'Flickr', 'codex' ),
	),
	'500px_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( '500px_link' ),
		'label'        => esc_html__( '500PX', 'codex' ),
	),
	'bandcamp_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'bandcamp_link' ),
		'label'        => esc_html__( 'Bandcamp', 'codex' ),
	),
	'anchor_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'anchor_link' ),
		'label'        => esc_html__( 'Anchor', 'codex' ),
	),
	'email_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'sanitize_text_field',
		'default'      => codex()->default( 'email_link' ),
		'label'        => esc_html__( 'Email', 'codex' ),
	),
	'phone_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'sanitize_text_field',
		'default'      => codex()->default( 'phone_link' ),
		'label'        => esc_html__( 'Phone', 'codex' ),
	),
	'custom1_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'custom1_link' ),
		'label'        => esc_html__( 'Custom 1', 'codex' ),
	),
	'custom2_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'custom2_link' ),
		'label'        => esc_html__( 'Custom 2', 'codex' ),
	),
	'custom3_link' => array(
		'control_type' => 'codex_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => codex()->default( 'custom3_link' ),
		'label'        => esc_html__( 'Custom 3', 'codex' ),
	),
);

Theme_Customizer::add_settings( $settings );

