jQuery(document).ready(function($) {
    "use strict";
    $('.wd-color-picker').colorpicker(
        {format: 'rgba'}
    );



    $('.iris-square-value').on('mousedown', function(e) {
        //alert('clicked');
    }).on('mouseup', function(e) {
        $(this).parent().parent().parent().parent().parent().parent().css('background', $(this).parent().parent().parent().parent().parent().find('.wd-color-picker').val() );
    })

    $('.option-item.tile .iris-square-value').each(function( index ) {
        $(this).parent().parent().parent().parent().parent().parent().css('background', $(this).parent().parent().parent().parent().parent().find('.wd-color-picker').val() );
    });

    //---------------logo script-----------
    jQuery('#phonerepair_upload_btn').on('click',function(){
        wp.media.editor.send.attachment = function(props, attachment){
            jQuery('#phonerepair_logo_filed').val(attachment.url);
        }
        wp.media.editor.open(this);

        return false;
    });
    //---------------title bg image script-----------
    jQuery('#phonerepair_title_bg_btn').on('click',function(){
        wp.media.editor.send.attachment = function(props, attachment){
            jQuery('#phonerepair_title_bg_filed').val(attachment.url);
        }
        wp.media.editor.open(this);

        return false;
    });
    //---------------footer bg image script-----------
    jQuery('#phonerepair_footer_bg_btn').on('click',function(){
        wp.media.editor.send.attachment = function(props, attachment){
            jQuery('#phonerepair_footer_bg_filed').val(attachment.url);
        }
        wp.media.editor.open(this);

        return false;
    });
    //---------------404 page-----------
    jQuery('#phonerepair_bg_404_page').on('click',function(){
        wp.media.editor.send.attachment = function(props, attachment){
            jQuery('#phonerepair_404_page_filed').val(attachment.url);
        }
        wp.media.editor.open(this);

        return false;
    });


    //------favicon script-----
    jQuery('#phonerepair_upload_favicon').on('click',function(){
        wp.media.editor.send.attachment = function(props, attachment){
            jQuery('#phonerepair_favicon_filed').val(attachment.url);
        }
        wp.media.editor.open(this);
        return false;
    });

    //------ Menu Background image -----
    jQuery('#phonerepair_upload_btn_bg').on('click',function(){
        var that = this;
        wp.media.editor.send.attachment = function(props, attachment){
            jQuery('#phonerepair_menu_bg_img_filed').val(attachment.url);

        }
        wp.media.editor.open(this);
        return false;
    });



    jQuery('.img-container .remove-img').on('click',function(){
        jQuery(this).parent().parent().find('input[type="text"]').val('none');
        jQuery(this).parent().remove();
    });
    //-------------------------------------


    $('.option-item.big.tile select').on('change',function () {
        var optionSelected = $(this).find("option:selected");
        var valueSelected  = optionSelected.val();

        if( valueSelected == 'big-custom_text'){
            $(this).parent().find('textarea').show();
        }else{
            $(this).parent().find('textarea').hide();
        }
    });


    /**--------logo --------*/
    $('.chekbox_logo').on('change',function () {
        if ($(this).attr("checked"))
        {

            $('.path_logo').fadeIn();
            return;
        }
        $('.path_logo').fadeOut();
    });

    /**--------social icon --------*/
    $('.checkbox_social').on('change',function () {
        if ($(this).attr("checked"))
        {

            $('.social_link').fadeIn();
            return;
        }
        $('.social_link').fadeOut();
    });
});