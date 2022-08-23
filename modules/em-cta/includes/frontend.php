<?php

/**
 * This file should be used to render each module instance.
 *
 * $settings The module's settings.
 *
 */
$lh_cta_content = $settings->lh_cta_content;
$lh_cta_link = $settings->lh_cta_link;
$lh_cta_link_text = $settings->lh_cta_link_text;
$lh_cta_icon = $settings->lh_cta_icon;

?>

<div class="em-cta-section">
    <div class="em-cta-content">
        <div class="em-cta-text">
            <p><?php echo esc_html($lh_cta_content); ?></p>
        </div>
        <div class="em-cta-btn">
            <a href="<?php echo esc_url($lh_cta_link); ?>"
               target="_self"><?php echo esc_html($lh_cta_link_text); ?><i class="<?php echo esc_attr($lh_cta_icon); ?>"></i></a>
        </div>
    </div>
</div>