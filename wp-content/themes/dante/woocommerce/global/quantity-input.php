<?php
/**
 * Product quantity inputs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( $max_value && $min_value === $max_value ) {
	?>
	<div class="quantity hidden">
		<input type="hidden" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
	</div>
	<?php
} else {
	?>
	<div class="quantity">
		<input type="number" class="input-text qty text" step="<?php echo esc_attr( $step ); ?>" min="<?php echo esc_attr( $min_value ); ?>" max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $input_value ); ?>" title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'swiftframework' ) ?>" size="4" pattern="<?php echo esc_attr( $pattern ); ?>" inputmode="<?php echo esc_attr( $inputmode ); ?>" />
		<div class="qty-adjust"><a class="qty-plus" href="#"><i class="fa-chevron-up"></i></a><a class="qty-minus" href="#"><i class="fa-chevron-down"></i></a></div>
	</div>
	<?php
}

