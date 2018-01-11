<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<h2>Список отелей</h2>
<a href="<?= Url::to('addaditionalfeatures')?>" class="btn btn-success"> Добавить доп услугу </a>
<p></p>
<?php
//echo "<pre>".print_r($model)."</pre>";

?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'title',
        [
            'label' => 'Изображение',
            'format' => 'raw',
            'value' => function($post){
                return Html::img(Url::toRoute($post->img),[
                    'alt'=>'yii2 - картинка в gridview',
                    'style' => 'width:50px;'
                ]);
            },
        ],
        ['class' => 'yii\grid\ActionColumn',
            'template' => '{update}&nbsp;&nbsp;&nbsp;{delete}',
            'urlCreator'=>function($action, $model){
                if($action=='update') {
                    return \yii\helpers\Url::to(['admin/'.$action.'aditionalfeatures', 'id' => $model->id]);
                }
                if($action=='delete'){
                    return \yii\helpers\Url::to(['admin/'.$action.'aditionalfeatures', 'id' => $model->id]);
                }
            }
        ],
    ],
]); ?>
