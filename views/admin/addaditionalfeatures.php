<?php
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h2>Дополнительные услуги</h2>
<a href="<?= Url::to('aditionalfeatures')?>" class="btn btn-success"> Назад </a>

<h2>Редактирование</h2>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?= $form->field($feature, 'title')->textInput() ?>
<?= $form->field($img, 'img')->fileInput() ?>


<div class="form-group">
    <?= Html::submitButton(Yii::t('app', 'save'), ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
