<?php
/**
 * Non-JS fallback markup for the About page — currently unused (see
 * index.php's admin_menu()); kept in case a future non-JS render path
 * is needed.
 *
 * @package orlyn
 */

$theme                 = wp_get_theme();
$gutenify_is_installed = file_exists( WP_PLUGIN_DIR . '/gutenify' );
$gutenify_is_active    = is_plugin_active( 'gutenify/gutenify.php' );
?>
<div class="gutenify-starter--getting-started--wrapper">
		<div id="gutenify-starter-admin-about-page">
				<div class="gutenify-starter-about-container  gutenify-admin-card gutenify-admin-card-header admin-grid-2">
						<div class="gutenify-starter-header-left admin-col">
								<h2>
										<?php echo esc_html( $theme->get( 'Name' ) ); ?>
								</h2>
								<p>
										<?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'orlyn' ); ?>
								</p>

							</div>
						<div class="gutenify-starter-header-left admin-col">
							<div class="gutenify-starter-card-header-button-group">
								<?php if ( defined( 'GUTENIFY_VERSION' ) && class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( admin_url( 'admin.php?page=gutenify-demo-importer' ) ); ?>"
												class="gutenify-starter-admin-button" rel="noreferrer"><span class="dashicons dashicons-admin-customizer"></span> <?php esc_html_e( 'Site Demo', 'orlyn' ); ?></a>
								<?php endif; ?>
								<?php if ( ! $gutenify_is_installed && ! $gutenify_is_active ) : ?>
								<a href="javascript:void(0);" class="gutenify-starter-admin-button gutenify-starter-install-gutenify"><span class="dashicons dashicons-admin-customizer"></span> <?php esc_html_e( 'Import Site Demo', 'orlyn' ); ?> </a>
								<?php endif; ?>
								<?php if ( $gutenify_is_installed && ! $gutenify_is_active ) : ?>
								<a href="javascript:void(0);" class="gutenify-starter-admin-button gutenify-starter-activate-gutenify"><span class="dashicons dashicons-admin-customizer"></span> <?php esc_html_e( 'Import Site Demo', 'orlyn' ); ?> </a>
								<?php endif; ?>
								<?php if ( $gutenify_is_active && ! class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( __( 'https://gutenify.com/pricing', 'orlyn' ) ); ?>" class="gutenify-starter-admin-button" rel="noreferrer" target="_blank"><i
														class="fa fa-paint-brush"></i> <?php esc_html_e( 'Get Gutenify Pro', 'orlyn' ); ?> </a>
								<?php endif; ?>
								<a  href="<?php echo esc_url( __( 'https://woocommerce.com/document/orlyn/', 'orlyn' ) ); ?>" class="gutenify-starter-admin-button premium-button"
												target="_blank" rel="noreferrer"><span class="dashicons dashicons-book-alt"></span> <?php esc_html_e( 'Documentations', 'orlyn' ); ?></a></div>
								</div>
							</div>
				<div class="gutenify-starter-about-container subscribe-panel admin-grid-3">
						<div class="admin-col">
								<div class="gutentor-get-started-content">
										<h3><?php esc_html_e( 'Gutenify Site Demo', 'orlyn' ); ?></h3>
										<p>
										<?php
										esc_html_e(
											'Gutenify has pre-built site demos for your site which will give your
                                                website a base structure.',
											'orlyn'
										);
										?>
										</p>
										<ul>
												<li> <span class="dashicons dashicons-welcome-learn-more"></span> <a
																href="https://gutenify.com/documentations/template-kits/"
																target="_blank" rel="noreferrer"><?php esc_html_e( 'Learn about site demo', 'orlyn' ); ?></a></li>
												<?php if ( defined( 'GUTENIFY_VERSION' ) ) : ?>
												<li> <span class="dashicons dashicons-search"></span> <a
																href="<?php echo esc_url( admin_url( 'admin.php?page=gutenify-demo-importer' ) ); ?>"
																rel="noreferrer"><?php esc_html_e( 'Browse Site Demo', 'orlyn' ); ?></a></li>
												<?php endif; ?>
												<?php if ( ! defined( 'GUTENIFY_VERSION' ) ) : ?>
												<li> <span class="dashicons dashicons-search"></span> <a
																href="https://gutenify.com/template-kits/" target="_blank"
																rel="noreferrer"><?php esc_html_e( 'Browse Site Demo', 'orlyn' ); ?></a></li>
												<?php endif; ?>
										</ul>
								</div>
						</div>
						<div class="admin-col">
								<div class="gutenify-starter-get-started-content">
										<h3><?php esc_html_e( 'Import Patterns', 'orlyn' ); ?></h3>
										<p>
										<?php
										esc_html_e(
											'From Edit screen of page/post, you can easily import Beautiful
                                                Patterns',
											'orlyn'
										);
										?>
										</p>
										<ul>
												<li> <span class="dashicons dashicons-welcome-learn-more"></span> <a
																href="https://gutenify.com/documentations/what-are-templates-how-do-we-add-templates-in-our-page-posts/"
																target="_blank" rel="noreferrer">
																<?php
																esc_html_e(
																	'Learn about
                                                                Patterns',
																	'orlyn'
																);
																?>
																</a></li>
												<li> <span class="dashicons dashicons-edit"></span> <a
																href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>"
																rel="noreferrer"><?php esc_html_e( 'Create page to add pattern', 'orlyn' ); ?></a>
												</li>
										</ul>
								</div>
						</div>
						<div class="admin-col">
								<div class="subscribe-panel">
										<h3><?php esc_html_e( 'To add fresh block follow below steps', 'orlyn' ); ?></h3>
										<ul>
												<li><span class="dashicons dashicons-yes"></span>
												<?php
												esc_html_e(
													'At the top left corner of the
                                                        page/post edit
                                                        Screen, click on Sign',
													'orlyn'
												);
												?>
												</li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php
												esc_html_e(
													'Type Block name in search bar, if
                                                        you already know
                                                        the block name.',
													'orlyn'
												);
												?>
												</li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php
												esc_html_e(
													'OR Scroll down and navigate to
                                                        Gutenify section and
                                                        Add New Block.',
													'orlyn'
												);
												?>
												</li>
										</ul>
								</div>
						</div>
				</div>
				<div class="gutenify-starter-about-container gutenify-starter-compare-table">
						<div class="admin-grid-1">
								<h3>
										<?php esc_html_e( 'Compare Free Vs Pro', 'orlyn' ); ?>
									</h3>
									<p class="gutenify-starter-compare-table-subtitle"><a href="<?php echo esc_url( __( 'https://gutenify.com/pricing', 'orlyn' ) ); ?>" target="__blank"><?php esc_html_e( 'Checkout all features', 'orlyn' ); ?> <i class="dashicons dashicons-arrow-right-alt"></i></a></p>
								<table>
										<thead>
												<tr>
														<th>
																<?php esc_html_e( 'Features', 'orlyn' ); ?>
														</th>
														<th>
																<?php esc_html_e( 'Free Gutenify Theme', 'orlyn' ); ?>
														</th>
														<th>
																<?php esc_html_e( 'Gutenify Pro Plugin', 'orlyn' ); ?>
														</th>
												</tr>
										</thead>
										<tbody>
												<tr>
														<td>
																<?php esc_html_e( 'Responsive Design', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-yes"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Painless Setup', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-yes"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Color Options', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-yes"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Premium site demos', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-no"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Multiple Block Layout', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-no"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Premium Patterns', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-no"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Multiple Fonts', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-no"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Slider Block ', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-no"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Post Listing Block', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-no"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'WooCommerce Filter Block', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-no"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Gallery Block', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-no"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Star Rating Block', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-no"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Icon Block', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-no"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Post Carousel Block', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-no"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Google Map Block', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-no"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Testimonials Block', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-no"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
												<tr>
														<td>
																<?php esc_html_e( 'Team Block', 'orlyn' ); ?>
																</th>
														<td><span class="dashicons dashicons-no"></span></th>
														<td><span class="dashicons dashicons-yes"></span></th>
												</tr>
										</tbody>
								</table>
						</div>
				</div>

				<div class="feature-list">
						<div class="gutenify-starter-about-container gutenify-about-content">
								<div class="gutenify-starter-admin-card features">
										<h4 class="gutenify-starter-admin-card-title is-medium is-sub"><?php esc_html_e( 'gutenify Core Features', 'orlyn' ); ?>
										</h4>
										<ul class="gutenify-starter-options-features">
												<li><span class="dashicons dashicons-yes"></span>
												<?php
												esc_html_e(
													'Global page settings(typography,
                                                        color, ...)',
													'orlyn'
												);
												?>
												</li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Site Demo', 'orlyn' ); ?>   </li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Predefined sections', 'orlyn' ); ?>   </li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Fully Responsive', 'orlyn' ); ?>   </li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Highly customizable row columns', 'orlyn' ); ?>
												</li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Color Options', 'orlyn' ); ?>   </li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Device specific responsive controls', 'orlyn' ); ?>
												</li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Google fonts', 'orlyn' ); ?> </li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php
												esc_html_e(
													'Classic &amp; gradient color and
                                                        background',
													'orlyn'
												);
												?>
												</li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Box-shadow', 'orlyn' ); ?></li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Border', 'orlyn' ); ?> </li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Advanced Typography', 'orlyn' ); ?> </li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( 'Font Awesome 4 icon picker', 'orlyn' ); ?></li>
												<li><span class="dashicons dashicons-yes"></span>
												<?php esc_html_e( '&amp; More...', 'orlyn' ); ?> </li>
										</ul>
								</div>
						</div>
						<div class="gutenify-starter-about-side">
								<div class="gutenify-starter-admin-card member"><span><i class="fa fa-star"
														aria-hidden="true"></i> <i class="fa fa-star"
														aria-hidden="true"></i> <i class="fa fa-star"
														aria-hidden="true"></i> <i class="fa fa-star"
														aria-hidden="true"></i> <i class="fa fa-star"
														aria-hidden="true"></i></span>
										<h3 class="gutenify-starter-admin-card-title is-small"><?php esc_html_e( 'Love our product?', 'orlyn' ); ?>
										</h3>
										<h4 class="gutenify-starter-admin-card-title is-small">
										<?php
										esc_html_e(
											'Motivate us by
                                                giving 5 star on
                                                our profile.',
											'orlyn'
										);
										?>
										</h4><a
												href="https://wordpress.org/support/theme/gutenify-starter/reviews/?filter=5"
												class="gutenify-starter-admin-button large gutenify-block is-default"
												target="__blank"><?php esc_html_e( 'Rate Us', 'orlyn' ); ?></a>
								</div>
								<div class="gutenify-starter-admin-card cart-two">
										<h3 class="gutenify-starter-admin-card-title is-small">
										<?php
										esc_html_e(
											'Still have question?
                                                Ask Us, now!',
											'orlyn'
										);
										?>
										</h3>
										<p><?php esc_html_e( 'We are always ready with all fix issues you stuck to ensure smoothly works with gutenify', 'orlyn' ); ?></p><a href="<?php echo esc_url( __( 'https://gutenify.com/contact/', 'orlyn' ) ); ?>"
												class="gutenify-starter-admin-button primary large gutenify-block"><?php esc_html_e( 'Get Support', 'orlyn' ); ?></a>
								</div>
						</div>
				</div>
		</div>
		<div class="gutenify-starter-card-header-button-group">

		<?php if ( defined( 'GUTENIFY_VERSION' ) && class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( admin_url( 'admin.php?page=gutenify-demo-importer' ) ); ?>"
												class="gutenify-starter-admin-button" rel="noreferrer"><i
														class="fa fa-paint-brush"></i> <?php esc_html_e( 'Site Demo', 'orlyn' ); ?></a>
								<?php endif; ?>
								<?php if ( ! defined( 'GUTENIFY_VERSION' ) || ! class_exists( 'Gutenify_Pro' ) ) : ?>
								<a href="<?php echo esc_url( __( 'https://gutenify.com/pricing', 'orlyn' ) ); ?>" class="gutenify-starter-admin-button" rel="noreferrer" target="_blank"><i
														class="fa fa-paint-brush"></i> <?php esc_html_e( 'Get Gutenify Pro', 'orlyn' ); ?> </a>
								<?php endif; ?>
								<a  href="<?php echo esc_url( __( 'https://woocommerce.com/document/orlyn/', 'orlyn' ) ); ?>" class="gutenify-starter-admin-button premium-button"
												target="_blank" rel="noreferrer"><i class="fa fa-book"></i>
												<?php esc_html_e( 'Documentations', 'orlyn' ); ?></a>
							</div>
</div>
