/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = "en";
    config.disableObjectResizing = true;
    config.resize_enabled = false;
    config.height = 400;
    // config.uiColor = '#AADC6E';
    //config.entities_additional.push( /<pre>[\s\S]*?<\/pre>/g );
    config.htmlEncodeOutput = false;
    config.entities  = false;
    config.basicEntities = true;
    //config.entities_greek = false;
    //config.entities_latin = true;
    //config.disableNativeSpellChecker = true;
    // set the file uploader
};

//
//
//CKEDITOR.on('instanceReady', function( ev ) {
//    ev.editor.dataProcessor.writer.setRules('pre', {
//        breakBeforeOpen : true,
//        breakAfterOpen : false,
//        breakBeforeClose : false,
//        breakAfterClose : true,
//        entities: true
//    });
//});