<?php

/** @var $model \app\models\Article */
?>

<br />
<div>
    <a href="<?php echo \yii\helpers\Url::to(['/article/view', 'slug' => $model->slug]); ?>">
        <h3><?php echo \yii\helpers\Html::encode($model->title); ?></h3>
    </a>

    <div>
        <?php echo \yii\helpers\StringHelper::truncateWords($model->getEncodeBody(), 50); ?>
    </div>
    <p class="text-muted text-right">
        <small>Created At: <b><?php echo Yii::$app->formatter->asRelativeTime($model->created_at); ?></b></small>
        By: <b><?php echo $model->createdBy->nick; ?></b>
    </p>
    <hr>
</div>
