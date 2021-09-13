<?= $this->context->renderPartial('_copyright') ?>
<table>
    <tr>
        <th>Title</th>
        <th>Date</th>
    </tr>
    <?php foreach($List as $item) { ?>
        <tr>
            <td>
                <a href="<?= Yii::$app->urlManager->createUrl(['news/item', 'title' => $item['title']]) ?>"> <?= $item['title'] ?></a>
            </td>
            <td>
                <?= Yii::$app->formatter->asDatetime($item['date'], "php:d.m.Y") ?>
            </td>
        </tr>
    <?php } ?>
</table>