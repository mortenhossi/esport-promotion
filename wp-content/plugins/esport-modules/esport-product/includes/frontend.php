<?php 
$title_or_image_first = $settings->title_or_image_first; 
$title = $settings->title;
$text = $settings->text;
$image = $settings->image;
?>

<div class="product-section <?php echo ($title_or_image_first === 'image') ? "image-first" : "" ?>">
    <div class="content-wrapper">
        <?php if (!empty($title)) { ?>
            <div class="title-wrapper">
                <h2><?php  echo $title?></h2>
            </div>
        <?php }?>

        <div class="line"></div>

        <?php if (!empty($text)) { ?>
            <div class="text-wrapper">
                <?php echo $text ?>
            </div>
        <?php }?>
    </div>

    <?php if (!empty($image)) { ?>
        <div class="image-wrapper">
        <img src="<?php echo wp_get_attachment_url($image) ?>" alt="<?php echo get_the_title($image) ?>">
        </div>
    <?php }?>
</div>