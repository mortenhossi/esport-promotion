<?php 
$title =  $settings->title;
$text = $settings->text;
?>

<div class="text-island-container">
    <?php if (!empty($title)) { ?>
        <div class="title-wrapper">
            <h2 class="title"><?php echo $title ?></h2>
        </div>
    <?php } ?>

    <div class="line"></div>

    <?php if (!empty($text)) { ?>
        <div class="text-wrapper">
            <p class="text"><?php echo $text ?></p>
        </div>
    <?php } ?>
</div>