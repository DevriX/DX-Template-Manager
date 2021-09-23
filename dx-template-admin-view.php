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

            <h2>Need help?</h2>
            <p>Do you like DX Template Manager, you need support or additional features/functionality? Help us out by leaving us a review!</p>
            <a class="button-primary" target="_blank" href="https://wordpress.org/support/plugin/dx-template-manager/">Give a review</a>

        </div>
	</form> <!-- end of #dxtemplate-form -->
</div>
