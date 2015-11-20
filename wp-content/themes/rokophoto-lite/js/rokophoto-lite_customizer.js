jQuery(document).ready(function() {
	
	jQuery('.wp-full-overlay-sidebar-content').prepend('<a style="margin-top: 5px;margin-bottom: 5px; margin-left: 93px;" href="https://themeisle.com/rokophoto-lite-documentation/" class="button" target="_blank">{documentation}</a>'.replace('{documentation}',objectL10n.documentation));
	
	jQuery('.wp-full-overlay-sidebar-content').prepend('<a style="margin-top: 5px;margin-bottom: 5px; margin-left: 87px;" href="https://themeisle.com/themes/rokophoto/" class="button" target="_blank">{pro}</a>'.replace('{pro}',objectL10n.pro));
	
});