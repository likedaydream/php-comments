<?php view_include('header'); ?>

<div class="container">
    <?php view_include('message', [
        'message' => $message,
        'message_type' => $message_type,
    ]); ?>

    <section class="comments">
        <h2 class="comments__title sr-only">Список комментариев</h2>

        <ul class="comments__list">
            <?php foreach ($comments as $comment) : ?>
            <li class="comment comments__item">
                <div class="comment__header">
                    <h3 class="comment__title">
                        <?php echo Html::encode($comment->username) ?>
                    </h3>
                    <p class="comment__date">
                        <span class="comment__time">
                            <?php echo date('H:i', $comment->created_at); ?>
                        </span>
                        <span class="comment__day">
                            <?php echo date('d.m.Y', $comment->created_at); ?>
                        </span>
                    </p>
                </div>
                <div class="comment__text">
                    <?php echo Html::encode($comment->text) ?>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="comments-create">
        <h2 class="title">Оставить комментарий</h2>
        <div class="comments-create__form">
            <form action="/post.php" method="post">
                <div class="form-group">
                    <label class="form-label" for="comments-create-name">Ваше имя</label>
                    <input class="form-control" id="comments-create-name" name="username" type="text" value="Герасим" required>
                </div>
                <div class="form-group form-group--compact">
                    <label class="form-label" for="comments-create-text">Ваш комментарий</label>
                    <textarea class="form-control" id="comments-create-text" name="text"></textarea>
                </div>
                <div class="form-footer">
                    <button class="btn" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </section>
</div>

<?php view_include('footer'); ?>
