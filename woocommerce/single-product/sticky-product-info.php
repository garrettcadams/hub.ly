<?php
global $product;
$tabs = apply_filters( 'woocommerce_product_tabs', array() );
$i = 0;
?>
<div class="sticky-product-info-wapper" id="sticky-product-info-wapper">
	<div class="container">
		<div class="sticky-product-inner">
			<div class="sc-product-info">
				<div class="product-thumb">
					<?php echo $product->get_image( 'thumbnail' ); ?>
				</div>
				<div class="product-name">
					<h2><?php echo $product->get_title(); ?></h2>
					<ul class="sc-tabs">
						<?php foreach ( $tabs as $key => $tab ) :
							$css_class = 'tab-' . $key;
							if( $i == 0 ) {
								$css_class .= ' active';
							}
							$i ++;
							?>
							<li class="<?php echo esc_attr( $key ); ?>_tab">
								<a class="<?php echo esc_attr( $css_class ); ?>" data-tab="<?php echo esc_attr( $key ); ?>" href="#tab-<?php echo esc_attr( $key ); ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<div class="sc-product-cart">
				<p class="price"><?php echo $product->get_price_html(); ?></p>
				<a href="#" class="button"><?php esc_html_e( 'Add to Cart', 'martfury' ); ?></a>
			</div>
		</div>
	</div>
</div>