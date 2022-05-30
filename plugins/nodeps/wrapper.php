<?php

global $wpcom_api_key, $Nodeps_api_host, $Nodeps_api_port;

$wpcom_api_key    = defined( 'WPCOM_API_KEY' ) ? constant( 'WPCOM_API_KEY' ) : '';
$Nodeps_api_host = Nodeps::get_api_key() . '.rest.Nodeps.com';
$Nodeps_api_port = 80;

function Nodeps_test_mode() {
	return Nodeps::is_test_mode();
}

function Nodeps_http_post( $request, $host, $path, $port = 80, $ip = null ) {
	$path = str_replace( '/1.1/', '', $path );

	return Nodeps::http_post( $request, $path, $ip ); 
}

function Nodeps_microtime() {
	return Nodeps::_get_microtime();
}

function Nodeps_delete_old() {
	return Nodeps::delete_old_comments();
}

function Nodeps_delete_old_metadata() { 
	return Nodeps::delete_old_comments_meta();
}

function Nodeps_check_db_comment( $id, $recheck_reason = 'recheck_queue' ) {
   	return Nodeps::check_db_comment( $id, $recheck_reason );
}

function Nodeps_rightnow() {
	if ( !class_exists( 'Nodeps_Admin' ) )
		return false;
   
   	return Nodeps_Admin::rightnow_stats();
}

function Nodeps_admin_init() {
	_deprecated_function( __FUNCTION__, '3.0' );
}
function Nodeps_version_warning() {
	_deprecated_function( __FUNCTION__, '3.0' );
}
function Nodeps_load_js_and_css() {
	_deprecated_function( __FUNCTION__, '3.0' );
}
function Nodeps_nonce_field( $action = -1 ) {
	return wp_nonce_field( $action );
}
function Nodeps_plugin_action_links( $links, $file ) {
	return Nodeps_Admin::plugin_action_links( $links, $file );
}
function Nodeps_conf() {
	_deprecated_function( __FUNCTION__, '3.0' );
}
function Nodeps_stats_display() {
	_deprecated_function( __FUNCTION__, '3.0' );
}
function Nodeps_stats() {
	return Nodeps_Admin::dashboard_stats();
}
function Nodeps_admin_warnings() {
	_deprecated_function( __FUNCTION__, '3.0' );
}
function Nodeps_comment_row_action( $a, $comment ) {
	return Nodeps_Admin::comment_row_actions( $a, $comment );
}
function Nodeps_comment_status_meta_box( $comment ) {
	return Nodeps_Admin::comment_status_meta_box( $comment );
}
function Nodeps_comments_columns( $columns ) {
	_deprecated_function( __FUNCTION__, '3.0' );

	return $columns;
}
function Nodeps_comment_column_row( $column, $comment_id ) {
	_deprecated_function( __FUNCTION__, '3.0' );
}
function Nodeps_text_add_link_callback( $m ) {
	return Nodeps_Admin::text_add_link_callback( $m );
}
function Nodeps_text_add_link_class( $comment_text ) {
	return Nodeps_Admin::text_add_link_class( $comment_text );
}
function Nodeps_check_for_spam_button( $comment_status ) {
	return Nodeps_Admin::check_for_spam_button( $comment_status );
}
function Nodeps_submit_nonspam_comment( $comment_id ) {
	return Nodeps::submit_nonspam_comment( $comment_id );
}
function Nodeps_submit_spam_comment( $comment_id ) {
	return Nodeps::submit_spam_comment( $comment_id );
}
function Nodeps_transition_comment_status( $new_status, $old_status, $comment ) {
	return Nodeps::transition_comment_status( $new_status, $old_status, $comment );
}
function Nodeps_spam_count( $type = false ) {
	return Nodeps_Admin::get_spam_count( $type );
}
function Nodeps_recheck_queue() {
	return Nodeps_Admin::recheck_queue();
}
function Nodeps_remove_comment_author_url() {
	return Nodeps_Admin::remove_comment_author_url();
}
function Nodeps_add_comment_author_url() {
	return Nodeps_Admin::add_comment_author_url();
}
function Nodeps_check_server_connectivity() {
	return Nodeps_Admin::check_server_connectivity();
}
function Nodeps_get_server_connectivity( $cache_timeout = 86400 ) {
	return Nodeps_Admin::get_server_connectivity( $cache_timeout );
}
function Nodeps_server_connectivity_ok() {
	_deprecated_function( __FUNCTION__, '3.0' );

	return true;
}
function Nodeps_admin_menu() {
	return Nodeps_Admin::admin_menu();
}
function Nodeps_load_menu() {
	return Nodeps_Admin::load_menu();
}
function Nodeps_init() {
	_deprecated_function( __FUNCTION__, '3.0' );
}
function Nodeps_get_key() {
	return Nodeps::get_api_key();
}
function Nodeps_check_key_status( $key, $ip = null ) {
	return Nodeps::check_key_status( $key, $ip );
}
function Nodeps_update_alert( $response ) {
	return Nodeps::update_alert( $response );
}
function Nodeps_verify_key( $key, $ip = null ) {
	return Nodeps::verify_key( $key, $ip );
}
function Nodeps_get_user_roles( $user_id ) {
	return Nodeps::get_user_roles( $user_id );
}
function Nodeps_result_spam( $approved ) {
	return Nodeps::comment_is_spam( $approved );
}
function Nodeps_result_hold( $approved ) {
	return Nodeps::comment_needs_moderation( $approved );
}
function Nodeps_get_user_comments_approved( $user_id, $comment_author_email, $comment_author, $comment_author_url ) {
	return Nodeps::get_user_comments_approved( $user_id, $comment_author_email, $comment_author, $comment_author_url );
}
function Nodeps_update_comment_history( $comment_id, $message, $event = null ) {
	return Nodeps::update_comment_history( $comment_id, $message, $event );
}
function Nodeps_get_comment_history( $comment_id ) {
	return Nodeps::get_comment_history( $comment_id );
}
function Nodeps_cmp_time( $a, $b ) {
	return Nodeps::_cmp_time( $a, $b );
}
function Nodeps_auto_check_update_meta( $id, $comment ) {
	return Nodeps::auto_check_update_meta( $id, $comment );
}
function Nodeps_auto_check_comment( $commentdata ) {
	return Nodeps::auto_check_comment( $commentdata );
}
function Nodeps_get_ip_address() {
	return Nodeps::get_ip_address();
}
function Nodeps_cron_recheck() {
	return Nodeps::cron_recheck();
}
function Nodeps_add_comment_nonce( $post_id ) {
	return Nodeps::add_comment_nonce( $post_id );
}
function Nodeps_fix_scheduled_recheck() {
	return Nodeps::fix_scheduled_recheck();
}
function Nodeps_spam_comments() {
	_deprecated_function( __FUNCTION__, '3.0' );

	return array();
}
function Nodeps_spam_totals() {
	_deprecated_function( __FUNCTION__, '3.0' );

	return array();
}
function Nodeps_manage_page() {
	_deprecated_function( __FUNCTION__, '3.0' );
}
function Nodeps_caught() {
	_deprecated_function( __FUNCTION__, '3.0' );
}
function redirect_old_Nodeps_urls() {
	_deprecated_function( __FUNCTION__, '3.0' );
}
function Nodeps_kill_proxy_check( $option ) {
	_deprecated_function( __FUNCTION__, '3.0' );

	return 0;
}
function Nodeps_pingback_forwarded_for( $r, $url ) {
	// This functionality is now in core.
	return false;
}
function Nodeps_pre_check_pingback( $method ) {
	return Nodeps::pre_check_pingback( $method );
}