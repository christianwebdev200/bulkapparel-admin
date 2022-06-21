<?php
$card_id = $media['id'];
$checkbox_select_id = 'checkSelect-' . $media['id'];
$checkbox_custom_model_id = 'defaultModel-' . $media['id'];
$switch_active_id = 'active-' . $media['id'];

switch ($media['type']) {
    case 'image':
        $card_type = 'image';
        $card_icon = '';
        $image_url = $media['image_url'];
        break;

    case 'video':
        $card_type = 'video';
        $card_icon = '<i class="bi bi-play-btn"></i>';
        $image_url = $media['video_thumbnail_url'];
        break;

    case 'youtube':
        $card_type = 'youtube';
        $card_icon = '<i class="bi bi-youtube"></i>';
        $image_url = $media['youtube_thumbnail_url'];
        break;
}

$is_active = $media['active'] ? 'checked' : '';
$is_custom_model = $media['is_custom_model_image'] ? 'checked' : '';
$card_type_class = 'card-media--' . $card_type;
$custom_model_class = $is_custom_model ? 'card-media--custom-model' : '';
$card_class = join(' ', ['card card-media', $card_type_class, $custom_model_class]);

?>

<div class="<?= $card_class ?>" data-id="<?= $card_id ?>">
    <div class="card-media__select custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input card-media-select" id="<?= $checkbox_select_id ?>" data-id="<?= $card_id ?>">
        <label class="custom-control-label" for="<?= $checkbox_select_id ?>"></label>
    </div>
    <div class="card-media__custom-model custom-control custom-checkbox">
        <input type="checkbox" name="custom-model" <?= $is_custom_model ?> class="custom-control-input card-media-custom-model" id="<?= $checkbox_custom_model_id ?>" data-id="<?= $card_id ?>">
        <label class="custom-control-label" for="<?= $checkbox_custom_model_id ?>"></label>
    </div>
    <button class="card-media__delete btn delete-btn" data-id="<?= $card_id ?>">
        &times;
    </button>
    <div class="card-media__active custom-control custom-switch">
        <input type="checkbox" class="custom-control-input card-media-active" id="<?= $switch_active_id ?>" <?= $is_active ?>>
        <label class="custom-control-label" for="<?= $switch_active_id ?>"></label>
    </div>
    <img src="<?= $image_url ?>" height="306px" alt="" draggable="false">


    <?php if ($card_icon) { ?>
        <div class="card-media__icon">
            <?= $card_icon ?>
        </div>
    <?php }; ?>
</div>