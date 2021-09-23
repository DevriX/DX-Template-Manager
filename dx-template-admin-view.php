<div id="icon-plugins" class="icon32"></div>

<div class='wrap'>
	<h2>DX Template</h2>

	<p><strong>I realize that the plugin is using eval() and theoretically this could lead to malware script insertion
	even if this could only happen from that plugin through an administrative account (and only authorized people should have one). 
	</strong></p>

	<form id="dxtemplate-form" action="options.php" method="POST">
		
			<?php settings_fields('dxdt_setting') ?>
			<?php do_settings_sections( 'dx-template-options' ) ?>
			
			<input type="submit" class="button button-primary" value="Save" />

        <div class="wrap">
            <h1><strong>DX Template Support</strong></h1>

            <p>Do you like DX Template Manager, you need support or additional features/functionality? Help us out by leaving us a review!</p>
            <a class="button-primary" target="_blank" href="https://wordpress.org/support/plugin/dx-template-manager/">Give a review</a>

        </div>
	</form> <!-- end of #dxtemplate-form -->
</div>
<p></p>
<div id="postbox-container-1" class="postbox-container">
    <div class="meta-box-sortables">
        <div class="postbox">
            <h3><span>&emsp;Get help</span></h3>
            <div class="inside">
                <div>
                    <ul>
                        <li><a target="_blank" href="https://wordpress.org/plugins/dx-template-manager/"><span class="dashicons dashicons-admin-home"></span></a><b> Plugin Homepage</b></li>
                        <li><a target="_blank" href="https://wordpress.org/plugins/dx-template-manager/#installation"><span class="dashicons dashicons-media-text"></span></a><b> Documentation</b></li>
                        <li><a target="_blank" href="https://devrix.com/contact/"><span class="dashicons dashicons-sos"></span></a><b> Contact us</b></li>
                    </ul>
                </div>
                <div class="sidebar-footer">
                    <b>© 2021</b> <a class="no-underline text-highlighted" href="http://devrix.com" title="DevriX" target="_blank"><b>DevriX</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
