/**
 * Ajax install the Theme Plugin
 *
 */
(function($, window, document, undefined){
	"use strict";
	$(function(){
		$( '#codex-notice-gutenberg-plugin .notice-dismiss' ).on( 'click', function( event ) {
			codex_dismissGutenbergNotice();
		} );
		function codex_dismissGutenbergNotice(){
			var data = new FormData();
			data.append( 'action', 'codex_dismiss_gutenberg_notice' );
			data.append( 'security', codexGutenbergDeactivate.ajax_nonce );
			$.ajax({
				url : codexGutenbergDeactivate.ajax_url,
				method:  'POST',
				data: data,
				contentType: false,
				processData: false,
			});
		}
	});
})(jQuery, window, document);