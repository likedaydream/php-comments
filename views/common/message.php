<?php if ($message) : ?>
    <div class="message message--<?php echo Html::encode($message_type); ?>">
        <?php echo Html::encode($message); ?>
    </div>
<?php endif; ?>

