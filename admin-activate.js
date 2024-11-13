/**
 * Ajax install the Theme Plugin
 *
 */
(function($, window, document, undefined){
	"use strict";
	$(function(){
		$( '#codex-notice-starter-templates .notice-dismiss' ).on( 'click', function( event ) {
			codex_dismissNotice();
		} );
		function codex_dismissNotice(){
			var data = new FormData();
			data.append( 'action', 'codex_dismiss_notice' );
			data.append( 'security', codexStarterInstall.ajax_nonce );
			$.ajax({
				url : codexStarterInstall.ajax_url,
				method:  'POST',
				data: data,
				contentType: false,
				processData: false,
			});
		}
		$( '#codex-notice-starter-templates .codex-install-starter-btn' ).on( 'click', function( event ) {
			var $button = $( event.target );
			event.preventDefault();
			/**
			 * Keep button from running twice
			 */
			if ( $button.hasClass( 'updating-message' ) || $button.hasClass( 'button-disabled' ) ) {
				return;
			}

			var data = new FormData();
			data.append( 'action', 'codex_install_starter' );
			data.append( 'security', codexStarterInstall.ajax_nonce );
			data.append( 'status', codexStarterInstall.status );

			/**
			 * Install a plugin
			 *
			 * @return void
			 */
			function installPlugin(){
				$.ajax({
					method: 'POST',
					url: codexStarterInstall.ajax_url,
					data: data,
					contentType: false,
					processData: false,
					beforeSend: function () {
						buttonStatusInProgress( $button.data('installing-label') );
					},
					success: function( response ) {
						if ( response.success ) {
							buttonStatusInstalled( $button.data('installed-label') );
							buttonStatusDisabled( $button.data('activated-label') );
							codex_dismissNotice();
							location.replace( $button.data('redirect-url') );
						} else {
							console.log( response );
							buttonStatusDisabled( response.data );
						}
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log( xhr.responseText );
						// Installation failed
						buttonStatusDisabled( 'Error' );
					}
				});
			}

			/**
			 * Activate a plugin
			 *
			 * @return void
			 */
			function activatePlugin(){

				$.ajax({
					url: codexStarterInstall.ajax_url,
					method:  'POST',
					data: data,
					contentType: false,
					processData: false,
					beforeSend: function () {
						buttonStatusInProgress( $button.data('activating-label') );
					},
					success: function( response ) {
						if ( response.success ) {
							buttonStatusDisabled( $button.data('activated-label') );
							codex_dismissNotice();
							location.replace( $button.data('redirect-url') );
						} else {
							console.log( response );
							buttonStatusDisabled( response.data );
						}
					},
					error: function (xhr, ajaxOptions, thrownError) {
						 // Activation failed
						console.log( xhr.responseText );
						buttonStatusDisabled( 'Error' );
					}
				});
			}

			/**
			 * Change button status to in-progress
			 *
			 * @return void
			 */
			function buttonStatusInProgress( message ){
				$button.addClass('updating-message').removeClass('button-disabled kt-not-installed installed').text( message );
			}

			/**
			 * Change button status to disabled
			 *
			 * @return void
			 */
			function buttonStatusDisabled( message ){
				$button.removeClass('updating-message kt-not-installed installed')
				.addClass('button-disabled')
				.text( message );
			}

			/**
			 * Change button status to installed
			 *
			 * @return void
			 */
			function buttonStatusInstalled( message ){
				$button.removeClass('updating-message kt-not-installed')
					.addClass('installed')
					.text( message );
			}


			if ( codexStarterInstall.status === 'install' ){
				installPlugin();
			} else if( codexStarterInstall.status === 'activate' ){
				activatePlugin();
			}
		});
	});
})(jQuery, window, document);