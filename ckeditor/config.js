/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	config.toolbar = [
		{ name: 'document', items: [ 'Source' ] },
		{ name: 'clipboard', items: [ 'PasteText', 'PasteFromWord' ] },
		{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] },
		{ name: 'links', items: [ 'Link', 'Unlink' ] },
		{ name: 'alignment', items : [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
		{ name: 'editing', groups: [ 'spellchecker' ] }
	];
};

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	CKEDITOR.config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	CKEDITOR.config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	CKEDITOR.config.removeDialogTabs = 'image:advanced;link:advanced';
