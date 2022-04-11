<?php
    FLBuilderCSS::responsive_rule([
       'settings'     => $settings,
       'setting_name' => 'em_image_caption_color',
       'selector'     => ".fl-builder-content .fl-node-$id .em-image-info h2",
       'prop'         => 'color',
    ] );

    FLBuilderCSS::typography_field_rule( [
        'settings'     => $settings,
        'setting_name' => 'em_image_caption_typography',
        'selector'     => ".fl-builder-content .fl-node-$id .em-image-info h2",
    ] );
?>

