<?php
/**
 * Checkout Payment Section
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

?>

<?php if ( ! is_ajax() ) : ?>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 stm_rental_payment_methods">
		<div class="colored-separator text-left">
			<div class="first-long"></div>
			<div class="last-short"></div>
		</div>
	<h4 id="payment_heading"><?php _e( 'Payment', 'motors' ); ?></h4>
	<?php do_action( 'woocommerce_review_order_before_payment' ); ?>
	
<?php endif; ?>

<div id="payment" class="woocommerce-checkout-payment">
	<?php if ( WC()->cart->needs_payment() ) : ?>
	<ul class="payment_methods methods">
		<?php
			if ( ! empty( $available_gateways ) ) {
				foreach ( $available_gateways as $gateway ) {
					wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) );
				}
			} else {
				if ( ! WC()->customer->get_billing_country() ) {
					$no_gateways_message = __( 'Please fill in your details above to see available payment methods.', 'motors' );
				} else {
					$no_gateways_message = __( 'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'motors' );
				}

				echo '<p>' . apply_filters( 'woocommerce_no_available_payment_methods_message', $no_gateways_message ) . '</p>';
			}
		?>
	</ul>
	<?php endif; ?>

	<div class="form-row place-order">

		<noscript><?php _e( 'Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'motors' ); ?><br/><input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="<?php _e( 'Update totals', 'motors' ); ?>" /></noscript>

		<?php wp_nonce_field( 'woocommerce-process_checkout' ); ?>

		<?php do_action( 'woocommerce_review_order_before_submit' ); ?>

        <?php wc_get_template( 'checkout/terms.php' ); ?>

        <?php echo apply_filters( 'woocommerce_order_button_html', '<input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '" />' ); ?>

		<?php do_action( 'woocommerce_review_order_after_submit' ); ?>

	</div>

	<div class="clear"></div>
</div>
<?php if ( ! is_ajax() ) : ?>
	<?php do_action( 'woocommerce_review_order_after_payment' ); ?>
	</div>
	</div>
<?php endif; ?>