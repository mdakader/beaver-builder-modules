<?php

/**
 * This file should be used to render each module instance.
 *
 * $settings The module's settings.
 *
 */
$em_gallery_photos = $settings->em_gallery_photos;
?>

<div class="em-gallery">
    <div class="gallery-container" id="em-gallery">
        <?php
        if (!empty($em_gallery_photos)):
            foreach ($em_gallery_photos as $em_gallery_photo):
                ?>
                <a class="image-gallery" data-gall="gallery01" href="<?php echo esc_url($em_gallery_photo->em_gallery_photo_src) ?>">
                    <img alt="<?php echo esc_html($em_gallery_photo->em_image_caption) ?>"
                         src="<?php echo esc_url($em_gallery_photo->em_gallery_photo_src) ?>"/>
                    <div class="em-image-info">
                        <?php if(!empty($em_gallery_photo->em_image_caption)):?>
                            <h2><?php echo esc_html($em_gallery_photo->em_image_caption) ?></h2>
                        <?php endif;?>
                    </div>
                </a>
            <?php endforeach; endif; ?>
    </div>

</div>