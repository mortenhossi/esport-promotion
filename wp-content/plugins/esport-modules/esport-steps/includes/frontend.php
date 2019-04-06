<?php 
$title = $settings->title;
?>



<div class="steps-container">

    <?php if (!empty($title)) { ?>
        <h2 class="title"><?php echo $title ?></h2>
    <?php } ?>

    <div class="line"></div>

    <div class="steps-wrapper">
        <div class="step">
            <div class="step-title">
                <h3> <?php echo $settings->step_1_title ?></h3>
            </div>
            <div class="step-text">
            <p> <?php echo $settings->step_1_text ?></p>
            </div>
        </div>

        <div class="step">
            <div class="step-title">
                <h3> <?php echo $settings->step_2_title ?></h3>
            </div>
            <div class="step-text">
            <p> <?php echo $settings->step_2_text ?></p>
            </div>
        </div>

        <div class="step">
            <div class="step-title">
                <h3> <?php echo $settings->step_3_title ?></h3>
            </div>
            <div class="step-text">
            <p> <?php echo $settings->step_3_text ?></p>
            </div>
        </div>

        <div class="step">
            <div class="step-title">
                <h3> <?php echo $settings->step_4_title ?></h3>
            </div>
            <div class="step-text">
            <p> <?php echo $settings->step_4_text ?></p>
            </div>
        </div>
    </div>

</div>