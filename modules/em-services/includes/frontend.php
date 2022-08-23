<?php

/**
 * This file should be used to render each module instance.
 *
 * $settings The module's settings.
 *
 */
$lh_service_items = $settings->lh_service_items;
$lh_service_column = $settings->lh_service_column;

$allowed_html = [
    'br' => [],
    'strong' => []
]
?>

<div class="em-service-section">
    <div class="container">
        <div class="row">
            <?php
            foreach ($lh_service_items as $lh_service_item):
                ?>
                <div class="<?php echo esc_attr($lh_service_column); ?>">
                    <div class="em-service-item">
                        <div class="em-service-single-item">
                            <div class="em-service-icon">
                                <div class="em-service-icon-circle">
                                    <i class="<?php echo esc_attr($lh_service_item->lh_service_icon);?>"></i>
                                </div>
                            </div>
                            <div class="em-service-content">
                                <h4><?php echo esc_html($lh_service_item->lh_service_title); ?></h4>
                                <p><?php echo wp_kses($lh_service_item->lh_service_content, $allowed_html); ?></p>
                                <a href="<?php echo esc_url($lh_service_item->lh_service_link); ?>"
                                   class="em-service-more-btn"
                                   target="_self"><?php echo esc_html($lh_service_item->lh_service_link_text); ?><i class="<?php echo esc_attr($lh_service_item->lh_service_view_icon);?>"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>