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


	<div id="postbox-container-1" class="postbox-container sidebar-right">
	<div class="meta-box-sortables">
		<div class="postbox">
			<h3><span><?php esc_attr_e('Get help','dx-template-options');?></span></h3>
			<div class="inside">
                <ul>
                    <li><a target="_blank" href="https://wordpress.org/plugins/dx-template-manager/"><span class="dashicons dashicons-admin-home"></span> <?php esc_attr_e( 'Plugin Homepage', 'dx-template-options' );?></a></li>
                    <li><a target="_blank" href="https://devrix.com/contact/"><span class="dashicons dashicons-email-alt"></span> <?php esc_attr_e( 'Contact us', 'dx-template-options' );?></a></li>
                    <li><a target="_blank" href="https://wordpress.org/support/plugin/dx-template-manager/"><span class="dashicons dashicons-groups"></span> <?php esc_attr_e( 'Support', 'dx-template-options' );?></a></li>
                    <li><a target="_blank" href="https://wordpress.org/support/plugin/dx-template-manager/reviews/"><span class="dashicons dashicons-star-filled"></span> <?php esc_attr_e( 'Review', 'dx-template-options' );?></a></li>
                </ul>
			</div>
		</div>
	</div>
	</div>

<?php
