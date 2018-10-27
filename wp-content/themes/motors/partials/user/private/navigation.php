<?php
$current = stm_account_current_page();
?>
<div class="stm-actions-list heading-font">

	<?php do_action( 'stm_before_account_navigation' ) ?>

	<?php foreach ( stm_account_navigation() as $key => $item ) { ?>
		<a href="<?php echo esc_url( $item['url'] ); ?>" class="<?php echo $current == $key ? 'active' : ''; ?>">
			<?php if ( isset( $item['icon'] ) ) { ?><i class="<?php echo $item['icon'] ?>"></i><?php } ?>
			<?php echo $item['label'] ?>
		</a>
	<?php } ?>

	<?php do_action( 'stm_after_account_navigation' ) ?>

</div>
