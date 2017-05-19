//resizes image : has different params -- very flexable
// this will take the images and resize them, waiting until they are loaded to finish
// img_selector , uses jquery selector to pick the images
// box_model, options are : 'contrain_inside_box', 'fit_to_width', 'fit_to_height','none','fill'
        // contrain_inside_box ==> all dimentions are inside the box
        // fit_to_width ==> the width is made exactly the same as cx
        // fit_to_height ==> the height is made exactly the same as cy
        // none ==> nothing is done (usually used when b_grow_to_box is left on)
        // fill => the entire image fills the box, with the overflow of width or height determiend by which gives less overflow
                // fill automatically turns on grow by box, which since that is true by default just means a false will be overridden

        //default is fill

// cy and cx are the size of the image to grow/shrink
// b_grow_to_box_first, default true makes sure the image dimentions is at least as large as the box before any possible shrinking

// b_delete_if_broke, default true will remove the image if it does not load
// b_delete_parent_if_bad, default false will remove the parent if the image is bad
// b_resize_before_load_also, default true, will try to resize the images immediates, and them process the ones skipped or can wait after they are all loaded

// process_image_callback is called after the image is shrunk and grown. only called for images whose dimentions have changed and only called once per now
    // it has the signature (jq_image,img_width,img_height,cx,cy) where cx and cy are the bounding boxes

// all_complete_callback is called after all the images are processed

//reference small used to be 50x50, med 200 wide x 175, large 620 x 400


function ResizeImages(parameters) {


    function fill_box(jqImage) {

        var width =  jqImage.width() ? jqImage.width() :  jqImage.get(0).naturalWidth;   // Current image width
        var height = jqImage.height() ? jqImage.height() :jqImage.get(0).naturalHeight;   // Current image height

        //call fit to width or height based on the smallest differe
         // if the width is smallest then call fit to width
         // if the height is smallest then call fit to height

        //this function assumes that grow to box was done if necessary

        if ( (width - cx) < (height - cy)) {
            return fit_to_width(jqImage);
        } else {
            return fit_to_height(jqImage);
        }

    }


    function grow_to_box(jqImage) {

        var minWidth = cx; // Min width for the image
        var minHeight = cy;    // Min height for the image
        var ratio = 0;  // Used for aspect ratio
        var width =  jqImage.width() ? jqImage.width() :  jqImage.get(0).naturalWidth;   // Current image width
        var height = jqImage.height() ? jqImage.height() :jqImage.get(0).naturalHeight;   // Current image height
        var b_changed = false;

        //we need to make sure image is already min width and height, if its not then we need to grow the image

        if (width < minWidth) {
            ratio = minWidth/ width  ;   // get ratio for scaling image
            jqImage.css("width", minWidth); // Set new width
            jqImage.css("height", height * ratio);  // Scale height based on ratio
            height = height * ratio;    // Reset height to match scaled image
            width = width * ratio;    // Reset width to match scaled image
            b_changed = true;
        }

        if (height < minHeight) {
            ratio = minHeight/ height  ;   // get ratio for scaling image
            jqImage.css("height", minHeight); // Set new width
            jqImage.css("width", width * ratio);  // Scale height based on ratio
            height = height * ratio;    // Reset height to match scaled image
            width = width * ratio;    // Reset width to match scaled image
            b_changed = true;
        }

        return b_changed;
    }

    function contrain_inside_box(jqImage) {

        var maxWidth = cx; // Min width for the image
        var maxHeight = cy;    // Min height for the image
        var ratio = 0;  // Used for aspect ratio
        var width =  jqImage.width() ? jqImage.width() :  jqImage.get(0).naturalWidth;   // Current image width
        var height = jqImage.height() ? jqImage.height() :jqImage.get(0).naturalHeight;   // Current image height

        if (!width || !height) {throw "cannot get image dimentions"}

        //both the width of the image and the height must be no greater than the dimentions above

        //4 cases

        //first case image is already small enough

        //second case is when the width is greater but the height is ok

        //third case is when the height is greater but the width is okay

        //fourth case is when both the height and the width is outside the box

        if ( (width > maxWidth) && (height > maxHeight)) {
            //fourth case is when both the height and the width is outside the box
            //find a ratio that allows both to be shrunk inside the box
            if ( (width - maxWidth)  >  (height - maxHeight)) {
                //use the width ratio
                ratio = maxWidth/ width  ;   // get ratio for scaling
                jqImage.css({"height": height * ratio,"width" :maxWidth });  // Set new width, Scale height based on ratio
            } else {
                //use the height ratio
                ratio = maxHeight/ height  ;   // get ratio for scaling
                jqImage.css({"height": maxHeight,"width" :width * ratio }); // Set new height Scale, width based on ratio
            }

            return true;

        } else if ( (width <= maxWidth) && (height > maxHeight)) {
            //third case is when the height is greater but the width is okay
            ratio = maxHeight/ height  ;   // get ratio for scaling
            jqImage.css({"height": maxHeight,"width" :width * ratio }); // Set new height Scale, width based on ratio
            return true;
        } else if ( (width > maxWidth) && (height <= maxHeight)) {
            //second case is when the width is greater but the height is ok
            ratio = maxWidth/ width  ;   // get ratio for scaling
            jqImage.css({"height": height * ratio,"width" :maxWidth });  // Set new width, Scale height based on ratio
            return true;
        } else {
            //first case image is already small enough
            return false;
        }

    }

    function fit_to_width(jqImage) {

        var maxWidth = cx; // Min width for the image
        var ratio = 0;  // Used for aspect ratio
        var width =  jqImage.width() ? jqImage.width() :  jqImage.get(0).naturalWidth;   // Current image width
        var height = jqImage.height() ? jqImage.height() :jqImage.get(0).naturalHeight;   // Current image height

        if (!width || !height) {throw "cannot get image dimentions"}

        //grow and shrink the width based on the maxWidth

        //three cases,
        // width is smaller and needs to be grown, or width is taller both have one solution
        //width is already same

        if (width === maxWidth) {
            return false;
        } else {

            if (width < maxWidth) {
                ratio = width/maxWidth;
            } else {
                ratio = maxWidth/width;
            }

            jqImage.css({"height": height * ratio,"width" :maxWidth });  // Set new width, Scale height based on ratio
            return true;
        }

    }

    function fit_to_height(jqImage) {
        var maxHeight = cy;    // Min height for the image
        var ratio = 0;  // Used for aspect ratio
        var width =  jqImage.width() ? jqImage.width() :  jqImage.get(0).naturalWidth;   // Current image width
        var height = jqImage.height() ? jqImage.height() :jqImage.get(0).naturalHeight;   // Current image height

        if (!width || !height) {throw "cannot get image dimentions"}

        //grow and shrink the width based on the maxWidth

        //three cases,
        // height is smaller and needs to be grown, or height is taller both have one solution
        //height is already same

        if (height === maxHeight) {
            return false;
        } else {
            ratio = maxHeight/ height  ;   // get ratio for scaling
            jqImage.css({"height": maxHeight,"width" :width * ratio }); // Set new height Scale, width based on ratio
            return true;
        }
    }

    var img_selector = parameters.img_selector;
    var cx = parameters.cx;
    var cy = parameters.cy;

    var b_grow_to_box_first = true;
    if ('b_grow_to_box_first' in parameters) {
        b_grow_to_box_first = parameters.b_grow_to_box_first;
    }

    var box_model = null;
    switch (parameters.box_model) {
        case 'contrain_inside_box':
            box_model = contrain_inside_box;
            break;
        case 'fit_to_width':
            box_model = fit_to_width;
            break;
        case 'fit_to_height' :
            box_model = fit_to_height;
            break;
        case 'fill':
            box_model = fill_box;
            b_grow_to_box_first = true;
            break;
        case 'none' :
            box_model = null;
            break;
        default:
            box_model = fill_box;
            b_grow_to_box_first = true;
    }

    var process_image_callback = null;
    if ('process_image_callback' in parameters) {process_image_callback = parameters.process_image_callback; }

    var all_complete_callback = null;
    if ('all_complete_callback' in parameters) {
        all_complete_callback = parameters.all_complete_callback;
    }

    var b_resize_before_load_also = true;
    if ('b_resize_before_load_also' in parameters) {
        b_resize_before_load_also = parameters.b_resize_before_load_also;
    }

    var b_delete_if_broke = true;
    if ('b_delete_if_broke' in parameters) {
        b_delete_if_broke = parameters.b_delete_if_broke;
    }

    var b_delete_parent_if_bad = false;
    if ('b_delete_parent_if_bad' in parameters) {
        b_delete_parent_if_bad = parameters.b_delete_parent_if_bad;
    }



    //set to small if no size given
    this.min_width = cx;
    this.min_height = cy;

    this.img_selector = img_selector;

    function do_resize_internal() {

        $(img_selector).each(function () {
            var width =  this.naturalWidth;   // Current image width
            var height = this.naturalHeight;   // Current image height
            var jq_image = $(this);

            //if the width or height is zero it means it has not finished loading yet, so we skip over
            if (width === 0 || height === 0) {
                return true;
            }

            var processed = false;

            if (b_grow_to_box_first) {
                processed = grow_to_box(jq_image)
            }

            if (box_model) {
                var second_process = box_model(jq_image);
                if (!processed) {
                    processed = second_process;  //its possible for the box model to not change an image after the grow
                }
            }

            if (processed && process_image_callback) {
                process_image_callback(jq_image,jq_image.width(),jq_image.height(),cx,cy);
            }

        });
    }

    this.do_resize = function() {
        if (b_resize_before_load_also) {
            do_resize_internal();
        }

        var imgLoad = imagesLoaded(this.img_selector);
        //now wait for all images to loaded in
        $(this.img_selector).imagesLoaded()
            .always( function(  /*instance */ ) {
                for ( var i = 0, len = imgLoad.images.length; i < len; i++ ) {
                    var image = imgLoad.images[i];
                    var broke = !image.isLoaded;
                    if (broke) {
                        var ii = $(image.img);
                        var par = ii.parent();
                        //remove image
                        ii.remove();
                        if (b_delete_parent_if_bad) {
                            par.remove();
                        }

                    }
                }
                do_resize_internal();
                if (all_complete_callback) {
                    all_complete_callback();
                }
            })

    }

}