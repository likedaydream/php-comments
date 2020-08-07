<?php view_include('header'); ?>

<div class="container">
    <?php view_include('message', [
        'message' => $message,
        'message_type' => 'error',
    ]); ?>
</div>

<?php view_include('footer'); ?>
