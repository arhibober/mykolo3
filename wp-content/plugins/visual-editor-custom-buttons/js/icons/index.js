(function() {
    tinymce.create("tinymce.plugins.su_spacer_plugin", {

        //url argument holds the absolute url of our plugin directory
        init : function(ed, url) {

            //add new button    
            ed.addButton("su_spacer", {
                title : "Вставить линию-разделитель",
                cmd : "insert_spacer",
                image : "/wp-content/plugins/insert_spacer/img/horizontalLine.gif"
            });
			
            //button functionality.
            ed.addCommand("insert_spacer", function() {
                var return_text = '<div class="su-spacer"> </div>';
				
                ed.execCommand("mceInsertRawHTML", 0, return_text);

			//add an empty span with a unique id
			var endId = tinymce.DOM.uniqueId();
			ed.dom.add(ed.getBody(), 'span', {'id': endId}, '');

			//select that span
			var newNode = ed.dom.select('span#' + endId);
			ed.selection.select(newNode[0]);
			ed.focus();
            });
			
			//add new button    
            ed.addButton("su_float_clear", {
                title : "Отменить обтекание картинки текстом",
                cmd : "float_clear",
                image : "/wp-content/plugins/insert_spacer/img/float_clear.jpg"
            });

            //button functionality.
            ed.addCommand("float_clear", function() {
                var return_text = '<div class="dont-left"></div>';
				
                ed.execCommand("mceInsertRawHTML", 0, return_text);
				


				//add an empty span with a unique id
				var endId = tinymce.DOM.uniqueId();
				ed.dom.add(ed.getBody(), 'span', {'id': endId}, '');

				//select that span
				var newNode = ed.dom.select('span#' + endId);
				ed.selection.select(newNode[0]);
				ed.focus();
            });
			
        },

        createControl : function(n, cm) {
            return null;
        },

        getInfo : function() {
            return {
                longname : "Insert spacer tag",
                author : "Alex Lvovich",
                version : "1"
            };
        }
    });

    tinymce.PluginManager.add("su_spacer_plugin", tinymce.plugins.su_spacer_plugin);
})();