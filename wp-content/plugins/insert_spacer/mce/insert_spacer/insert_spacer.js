(function(){
    tinymce.create("tinymce.plugins.DrInsertSpacer",{
        init:function(a, b){
            a.addCommand("drInsert", function(){
                a.windowManager.open({
                    file: b + "/dialog.htm",
                    width: 420,
                    height: 125,
                    inline: 1
                })
            });
           
            a.addButton("dr_insert_spacer",{
                title: "insert_spacer.desc",
                cmd: "drInsert",
                image: b + "/img/horizontalLine.gif"
            });
        },
 
        getInfo:function(){
            return{
                longname:"Insert spacer tag",
                author:"alex_lvovich",
                authorurl:"http://nuph.edu.ua",
                version:"1.0"
            }
        }
    });
     
    tinymce.PluginManager.add("dr_insert_spacer",tinymce.plugins.DrInsertSpacer)
})();