var bbnotes = {};
var b_dirty = false;


function set_save_indicator(status) {
    var t = $("#save-indicator");
    t.removeClass();
    if (status === 'clean') {
        t.addClass( "fa fa-fw fa-floppy-o save-status-clean" );
    } else if (status === 'dirty') {
        t.addClass( "fa fa-fw fa-floppy-o save-status-dirty" );
    } else if (status === 'saving') {
        t.addClass( "fa fa-fw fa-cloud-upload save-status-saving " );
    } else if (status === 'error') {
        t.addClass( "fa fa-fw fa-exclamation-triangle save-status-error" );
    }  else  {
        t.addClass( "fa fa-fw fa-question-circle save-status-saving" );
    }
}




function save_notes() {
     if (b_dirty) {
         set_save_indicator('saving');
         var what = {};
         for(var i in bbnotes) {
             var node = bbnotes[i];
             var deep_copy  = $.extend({},node);
             deep_copy.onDelete =  null;   // when deleted
             deep_copy.onCreated =  null;    //Triggered after note creation
             deep_copy.onChange =  null; //Triggered on each change
             what[deep_copy.full_id] = deep_copy;
         }
         $.post( "save_notes.php", { bb_notes: what },null,"json" )
            .done(
                 function( data ) {
                     //console.log(data.status);
                     if (data.valid ) {
                         set_save_indicator('clean');
                         b_dirty = false;
                     } else {
                         set_save_indicator('error');
                     }
                 }
            ).fail(
                 function(jqXHR, textStatus, errorThrown) {
                     //$("#error").html(jqXHR.responseText);
                     set_save_indicator('error');
                 }
             );
     }
}

$(function() {

    set_save_indicator('clean');

    $('#save-indicator').click(function() {save_notes();}) ;

    $.fn.postitall.globals = {
        prefix          : '#PIApostit_',//Id note prefixe
        filter          : 'page',     //Options: domain, page, all
        savable         : false,        //Save postit in storage
        randomColor     : true,         //Random color in new postits
        toolbar         : true,         //Show or hide toolbar
        autoHideToolBar : true,         //Animation effect on hover over postit showing/hiding toolbar options
        removable       : true,         //Set removable feature on or off
        askOnDelete     : true,         //Confirmation before note removal
        draggable       : true,         //Set draggable feature on or off
        resizable       : true,         //Set resizable feature on or off
        editable        : true,         //Set contenteditable and enable changing note content
        changeoptions   : true,         //Set options feature on or off
        blocked         : true,         //Postit can not be modified
        minimized       : true,         //true = minimized, false = maximixed
        expand          : true,         //Expand note
        fixed           : true,         //Allow to fix the note in page
        addNew          : true,         //Create a new postit
        showInfo        : true,         //Show info icon
        pasteHtml       : true,         //Allow paste html in contenteditor
        htmlEditor      : true,         //Html editor (trumbowyg)
        autoPosition    : true,         //Automatic reposition of the notes when user resizes the screen
        addArrow        : 'back',        //Add an arrow to notes : none, front, back, all
        showMeta        : true,
        askOnHide       : true
    };



    var note_id = 1;
    var last_save = null;

    $('#test-note').click(function() {
        if (last_save) {
            var deep_copy  = $.extend({},last_save);
            deep_copy.id = note_id++;
            deep_copy.content += '!!@!';
            deep_copy.onDelete =  delete_note_callback;   // when deleted
            deep_copy.onCreated =  create_note_callback;    //Triggered after note creation
            deep_copy.onChange =  on_change_note_callback; //Triggered on each change
            $.PostItAll.new(deep_copy);
        }
    });

    var delete_note_callback = function(id) {
        var lost = $(id).postitall('options');
        console.log("onDelete " + id  );
        //strip # off id and deelte it as key
        delete bbnotes[id.substr(1)];
        b_dirty = true;
        set_save_indicator('dirty');
        return undefined;
    };

    var create_note_callback = function(id, options, obj) {
        last_save = $(id).postitall('options');
        last_save.page_name = page_name;
        last_save.full_id = id.substr(1);
        bbnotes[last_save.full_id] = last_save;
        b_dirty = true;
        set_save_indicator('dirty');
        return undefined;
    };

    var on_change_note_callback = function(id) {
        //strip # off id and save it as key
        last_save = $(id).postitall('options');
        last_save.page_name = page_name;
        //console.log('changed!');
        //console.log (w);
        last_save.full_id = id.substr(1);
        bbnotes[last_save.full_id] = last_save;
        b_dirty = true;
        set_save_indicator('dirty');
        return undefined;
    };

    $('#make-new-note').on('click', function (e) {
        $.PostItAll.new({
            id : note_id ++,  //PIApostit_2
            content :"",
            style : {
                tresd : true,
                fontfamily      : 'verdana',
                fontsize        : 'small',
                textshadow      :  false,
                arrow           : 'none'
            },

            onDelete: delete_note_callback,   // when deleted
            onCreated: create_note_callback,    //Triggered after note creation
            onChange: on_change_note_callback, //Triggered on each change
        });
        //
    });


    for(var i  in old_bbnotes) {
        var node = old_bbnotes[i];

        $.PostItAll.new({
            id : note_id ++,  //PIApostit_2
            content :node.content,
            style : node.style,
            position : node.position,
            posX : node.posX,
            posY : node.posY,
            right : node.right,
            height : node.height,
            width : node.width,
            minHeight : node.minHeight,
            minWidth : node.minWidth,
            flags : node.flags,
            onDelete: delete_note_callback,   // when deleted
            onCreated: create_note_callback,    //Triggered after note creation
            onChange: on_change_note_callback, //Triggered on each change
        });

    }

    setInterval(save_notes,45000);


});

//save to server every 30 seconds
//make indicator to change image if dirty or clean
