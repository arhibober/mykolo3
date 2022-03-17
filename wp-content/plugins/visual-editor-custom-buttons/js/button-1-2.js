// JavaScript Document

function getBaseURL () {
   return location.protocol + '//' + location.hostname + 
      (location.port && ':' + location.port) + '/';
}

(function() {
    tinymce.create('tinymce.plugins.vecb_button2', {
        init : function(ed, url) {
            ed.addButton('vecb_button2', {
                title : 'Оформить',image : url+'/icons/box.png',onclick : function() {
                     ed.selection.setContent('<div style="display:inline-block; width:auto;hight:140px;border:solid 2px #aaa;float:left">' + ed.selection.getContent() + '</div><div style="clear:left;></div>');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('vecb_button2', tinymce.plugins.vecb_button2);
})();