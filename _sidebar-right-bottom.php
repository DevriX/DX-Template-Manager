<?php
/**
 * Right sidebar for settings page
 *
 * @package   DX_Template_Manager
 * @link      http://devrix.com
 * @copyright 2021 DevriX
 */
?>

<?php
/**
 *-----------------------------------------
 * Do not delete this line
 * Added for security reasons: http://codex.wordpress.org/Theme_Development#Template_Files
 *-----------------------------------------
 */
defined('ABSPATH') or die("Direct access to the script does not allowed");
?>


	<div id="postbox-container2" class="postbox-container sidebar-right-bottom">
		<div class="meta-box-sortables">
			<div class="postbox">
				<h3><span><?php esc_attr_e('Other DevriX Plugins','dx-template-options');?></span></h3>
				<div class="inside">
					<div>
						<ul>
							<li><a target="_blank" href="https://bg.wordpress.org/plugins/easy-image-gallery/"><span class="dashicons dashicons-admin-plugins"></span> <?php esc_attr_e( 'Easy Image Gallery', 'dx-template-options' );?></a></li>
							<li><a target="_blank" href="https://wordpress.org/plugins/devrix-dark-site/"><span class="dashicons dashicons-admin-plugins"></span> <?php esc_attr_e( 'DX Dark Site', 'dx-template-options' );?></a></li>
							<li><a target="_blank" href="https://wordpress.org/plugins/dx-share-selection/"><span class="dashicons dashicons-admin-plugins"></span> <?php esc_attr_e( 'DX Share Selection', 'dx-template-options' );?></a></li>
                        </ul>
					</div>
					<div class="sidebar-footer">
						&copy; <?php echo date('Y');?> <a class="no-underline text-highlighted" href="http://devrix.com" title="DevriX" target="_blank">DevriX</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
