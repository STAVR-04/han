<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
    <br><br><br><br>
    <h2>Добавление</h2>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?= $form->field($slider, 'name')->textInput() ?>
<?= $form->field($slider, 'price')->textInput() ?>
<?= $form->field($slider, 'district')->textInput() ?>
<?= $form->field($slider, 'content')->textarea() ?>
<?= $form->field($slider, 'star')->textInput() ?>
<?= $form->field($img, 'img')->fileInput() ?>
<?= $form->field($img2, 'img[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'save'), ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>