<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->registerJsFile('@web/js/ajax-admin-review.js',['depends' =>'yii\web\YiiAsset']);
$this->registerJsFile('@web/js/ajax-admin-review-delete.js',['depends' =>'yii\web\YiiAsset']);
$this->registerJsFile('@web/js/ajax-admin-additionalFeatures.js',['depends' =>'yii\web\YiiAsset']);
$this->registerJsFile('@web/js/ajax-admin-additionalFeatures-delete.js',['depends' =>'yii\web\YiiAsset']);
$this->registerJsFile('@web/js/ajax-admin-slider-delete-img.js',['depends' =>'yii\web\YiiAsset']);
?>

    <div id="myModalBox" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Заголовок модального окна</h4>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>заголовок</th>
                                    <th>картинка</th>
                                    <th>Статус</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                foreach ($aditionaladd as $item){
                                    ?>
                                    <tr>
                                        <td><?=$item->title?></td>
                                        <td><img src="<?=$item->img?>" style="width: 50px;"> </td>
                                        <td id="addr<?=Yii::$app->request->get('id')?>"><button class="btn btn-success additional" id="add<?=$item->id?>">Добавить</button></td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                </div>
                <!-- Футер модального окна -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary" id="reload">Сохранить изменения</button>
                </div>
            </div>
        </div>
    </div>

    <h2>Редактирование</h2>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?= $form->field($model, 'name')->textInput() ?>
<?= $form->field($model, 'price')->textInput() ?>
<?= $form->field($model, 'district')->textInput() ?>
<?= $form->field($model, 'content')->textarea() ?>
<?= $form->field($model, 'star')->textInput() ?>
<?= $form->field($model, 'x')->textInput() ?>
<?= $form->field($model, 'y')->textInput() ?>
<?= $form->field($model, 'description')->textarea() ?>
<?= $form->field($model, 'keywords')->textInput() ?>
<?= $form->field($img, 'img')->fileInput() ?>
<?= $form->field($img2, 'img[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'save'), ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

<?php



if($slider){?>
    <br>
    <h2> Слайдер </h2>
    <table class="table table-bordered" >
        <thead>
        <tr>
            <th>картинка</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>

        <?php

        foreach ($slider as $item){
            ?>
            <tr>
                <td><img src="<?=$item->url?>" style="width: 50px;"> </td>
                <td><button class="btn btn-warning delete-slider" id="delete<?=$item->id?>">Удалить!</button></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
    <?php
}else{
    echo "<h2>Изображения отсутствуют!</h2>";
}?>

    <br>

    <button class="btn btn-default" id="dop">Добавить доп услуги</button>
<?php



if($aditional){?>
    <br>
    <h2> Дополнительные услуги </h2>

    <table class="table">
        <thead>
        <tr>
            <th>заголовок</th>
            <th>картинка</th>
            <th>Статус</th>
        </tr>
        </thead>
        <tbody>

        <?php

        foreach ($aditional as $item){
            ?>
            <tr>
                <td><?=$item['additionalFeatures']->title?></td>
                <td><img src="<?=$item['additionalFeatures']->img?>" style="width: 50px;"> </td>
                <td id="dell<?=Yii::$app->request->get('id')?>"><button class="btn btn-warning delete" id="del<?=$item['additionalFeatures']->id?>">Удалить!</button></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
    <?php
}else{
    echo "<h2>Дополнительные услуги отсутствуют!</h2>";
}?>

<br>
<?php
if($review){?>
<h2>Отзывы </h2>
<table class="table">
    <thead>
    <tr>
        <th>Имя</th>
        <th>Отзыв</th>
        <th>Статус</th>
    </tr>
    </thead>
    <tbody>

        <?php

        foreach ($review as $item){
        ?>
        <tr>
            <td><?=$item['reviews']->name?></td>
            <td><?=$item['reviews']->review?></td>
            <td><button class="btn btn-success rev" id="rel<?=$item->id?>"><?=$item->status?></button></td>
            <td id="<?=$item['reviews']->id?>"><button class="btn btn-warning war" id="<?=$item->id?>">Удалить</button></td>
        </tr>
        <?php }?>

    </tbody>
</table>
<?php
        }else{
            echo "<h2>Отзывы отсутствуют!</h2>";
        }?>
<br>
<?php
if($attractions){?>
    <h2>Достопримечательности </h2>
    <button class="btn btn-success attractions-add" id="attraction"> Добавить </button>
    <table class="table">
        <thead>
        <tr>
            <th>Название</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>

        <?php

        foreach ($attractions as $item){
            ?>
            <tr>
                <td><?=$item->name?></td>
                <td><button class="btn btn-warning attractions" id="attr<?=$item->id?>">Удалить</button></td>
            </tr>
        <?php }?>

        </tbody>
    </table>
    <?php
}else{
    echo "<h2>Достопримечательности отсутствуют!</h2><button class=\"btn btn-success attractions-add\" id=\"attraction\"> Добавить </button>";
}?>
<div id="myModalBox2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Заголовок модального окна</h4>
            </div>
            <!-- Основное содержимое модального окна -->
            <div class="modal-body">
                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
                <?= $form->field($attractionsadd, 'name[]')->textInput() ?>
                <?= $form->field($attractionsadd, 'name[]')->textInput() ?>
                <?= $form->field($attractionsadd, 'name[]')->textInput() ?>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'save'), ['class' => 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
            <!-- Футер модального окна -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary" id="reload">Сохранить изменения</button>
            </div>
        </div>
    </div>
</div>