<div id="icon-plugins" class="icon32"></div>
<div class='dx-template-wrapper'>
<div class='wrap content-wrapper'>
	<h2>DX Template</h2>

	<p><strong>I realize that the plugin is using eval() and theoretically this could lead to malware script insertion
	even if this could only happen from that plugin through an administrative account (and only authorized people should have one). 
	</strong></p>

	<form id="dxtemplate-form" action="options.php" method="POST">
		
			<?php settings_fields('dxdt_setting') ?>
			<?php do_settings_sections( 'dx-template-options' ) ?>
			
			<input type="submit" class="button button-primary" value="Save" />

    </div>
	</form> <!-- end of #dxtemplate-form -->
<div class="sidebars">
	<?php include_once( '_sidebar-right.php' );?>
	<?php include_once( '_sidebar-right-bottom.php' );?>
</div>
</div>