<?php
 $em_row_justify = $settings->em_row_justify;
 $em_gallery_margin = $settings->em_gallery_margin;

?>


(function ($) {
    $(function () {
        $('#em-gallery').justifiedGallery({
            lastRow : '<?php echo esc_html($em_row_justify);?>',
            rowHeight : 200,
            margins : <?php echo esc_html($em_gallery_margin);?>
        }).on('jg.complete', function () {
            $('.gallery-container').each(function() { // the containers for all your galleries
                $(this).magnificPopup({
                    delegate: 'a', // the selector for gallery item
                    type: 'image',
                    gallery: {
                        enabled:true
                    }
                });
            });
        });

    });
})(jQuery);


