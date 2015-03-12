// Register the Handlebars compiler with MediaWiki.
( function() {
	/*
	 * @class HandlebarsTemplateCompiler
	 * @singleton
	 */
	var handlebars = {
		/*
		 * Compiler source code into a template object
		 *
		 * @method
		 * @param {String} src the source of a template
		 * @return {HandleBars.Template} template object
		 */
		compile: function( src ) {
			return {
				/* @param {*} data */
				render: Handlebars.compile( src )
			};
		}
	};

	// register Handlebars with core.
	mw.template.registerCompiler( 'handlebars', handlebars );
}() );
