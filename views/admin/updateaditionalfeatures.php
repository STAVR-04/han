<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
    <br><br><br><br>
    <h2>Редактирование</h2>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?= $form->field($model, 'title')->textInput() ?>
<?= $form->field($img, 'img')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'save'), ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>