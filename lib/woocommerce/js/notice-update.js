/**
 * Trigger AJAX request to save state when the WooCommerce notice is dismissed.
 *
 * @version 2.3.0
 *
 * @author SkillsAndMore
 * @license GPL-2.0-or-later
 * @package GenesisSample
 */

jQuery(document).on(
	"click",
	".sam-dev-starter-woocommerce-notice .notice-dismiss",
	function() {
		jQuery.ajax({
			url: ajaxurl,
			data: {
				action: "sam_dev_dismiss_woocommerce_notice"
			}
		});
	}
);
