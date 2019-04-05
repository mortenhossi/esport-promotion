<?php 
$title = $settings->title;
$image = $settings->image;
$title_or_image = $settings->title_or_image;
?>

<div class="cover-section">
    
    <?php if ($title_or_image === 'title' and !empty($title)) { ?>
        <div class="cover-title">
            <h1> <?php echo $title; ?> </h1>
        </div>
    <?php } ?>
    

    <?php if ($title_or_image === 'image' and !empty($image)) { ?>
        <div class="cover-image">
            <img src="<?php echo wp_get_attachment_url($image) ?>" alt="<?php get_the_title($image) ?>">
        </div>
    <?php } ?>
    
</div>