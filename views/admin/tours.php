<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
?>
    <h2>Список Туров</h2>
    <a href="<?= Url::to('toursadd')?>" class="btn btn-success"> Добавить </a>
    <!--<a href="<?= Url::to('aditionalfeatures')?>" class="btn btn-success"> Добавить дополнительную услугу </a>-->
    <p></p>
<?php
//echo "<pre>".print_r($model)."</pre>";

?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'name',
        'price',
        'content',
        [
            'label' => 'Изображение',
            'format' => 'raw',
            'value' => function($post){
                return Html::img(Url::toRoute($post->img),[
                    'alt'=>'yii2 - картинка в gridview',
                    'style' => 'width:100px;'
                ]);
            },
        ],
        ['class' => 'yii\grid\ActionColumn',
            'template' => '{view}&nbsp;&nbsp;&nbsp;{update}&nbsp;&nbsp;&nbsp;{delete}',
            'urlCreator'=>function($action, $model){
                if($action=='update') {
                    return \yii\helpers\Url::to(['admin/tour'.$action, 'id' => $model->id]);
                }
                if($action=='view') {
                    return \yii\helpers\Url::home();
                }
                if($action=='delete'){
                    return \yii\helpers\Url::to(['admin/tour'.$action, 'id' => $model->id]);
                }
            }
        ],
    ],
]); ?>