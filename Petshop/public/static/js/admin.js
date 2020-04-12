/* funcion de ckeditor, tiene una variable llamada base que voy a crear de forma global. La variable genera una ruta absoluta hacia el dominio 
 */
var base = location.protocol+'//'+location.host;

/* inicializo la funcion  */
$(document).ready(function(){
    editor_init('editor');
})

function editor_init(field){
    //CKEDITOR.plugins.addExternal( 'codesnippet', base+'/static/libs/ckeditor/plugins/codesnippet/', 'plugin.js' );
    CKEDITOR.replace(field,{
        //skin: 'moono',
        //extraPlugins: 'codesnippet,ajax,sml,textmatch,autocomplete,textwatcher,emoji,panelbutton,preview,wordcount',
        toolbar:[
            { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', '-', 'Undo', 'Redo' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'BulletedList', 'Strike', 'Image', 'Link', 'Unlink', 'Blockquote' ] },
            { name: 'document', items: [ 'CodeSnippet', 'EmojiPanel', 'Preview', 'Source' ] }
        ]
    });
}