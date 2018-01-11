<?php
use yii\helpers\Url;
$this->registerJsFile('@web/js/profileSlider.js',['depends' =>'app\assets\AppAsset']);
$this->registerJsFile('@web/js/profileSlider-init.js',['depends' =>'app\assets\AppAsset']);
$this->registerJsFile('@web/js/tooltips-init.js',['depends' =>'app\assets\AppAsset']);
$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyABvqNSAslrpLr5Zbp8EJpPE7IwFiPsH7o&callback=initMap',['depends' =>'app\assets\AppAsset']);
$this->registerCssFile('@web/css/profileSlider.css',['depends' =>'app\assets\AppAsset']);
?>
<main class="inside-content">
    <section class="stock-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-24">
                    <a href="" onclick="history.back();return false;" class="returnBtn" data-toggle="tooltip" data-placement="right" title="Вернуться назад"></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-24 col-sm-24 col-md-12 col-lg-push-12">
                    <div class="profileHeader">
                        <div class="profileHeader-name">
                            <h1><?=$hotel[0]->name?></h1>
                        </div>
                        <div class="profileHeader-place"><?=$hotel[0]->district?></div>
                        <div class="rating rating-noBg">
                            <span class="stars-green" data-stars="<?=$hotel[0]->star?>">X</span>
                        </div>
                        <div class="profileHeader-price pull-right">
                            от <span><?=$hotel[0]->price?></span> руб.
                        </div>
                    </div>
                    <div class="adv-and-buy-wrp">
                        <div class="pull-left col-lg-12 col-md-12 padd-zero">
                            <div class="adv">
                                <img src="../images/dop/camera.svg" data-toggle="tooltip" data-placement="top" title="Охраняема парковка">
                                <img src="../images/dop/pool.svg" data-toggle="tooltip" data-placement="top" title="Басейн">
                                <img src="../images/dop/restaurant.svg" data-toggle="tooltip" data-placement="top" title="Wi-fi">
                                <img src="../images/dop/sport.svg" data-toggle="tooltip" data-placement="top" title="Спортивная площадка">
                                <img src="../images/dop/wifi.svg" data-toggle="tooltip" data-placement="top" title="Wi-fi">
                            </div>
                        </div>
                        <div class="buy pull-right pull-none">
                            <button class="btn btn-primary primary-rev-one" role="button" data-toggle="modal" data-target="#myModalBox">Забронировать</button>
                            <!-- HTML-код модального окна - бронь -->
                            <div id="myModalBox" class="modal fade">

                                <div class="modal-dialog">
                                    <div class="alert alert-success">
                                        <strong>Оформить бронь</strong> Вы можете позвонив по номеру
                                        <strong>+7 (906) 970-4400</strong>, либо заполнив форму ниже:
                                    </div>
                                    <div class="modal-content col-lg-24 padd-zero">
                                        <!-- Заголовок модального окна -->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <!-- Основное содержимое модального окна -->
                                        <div class="modal-body">
                                            <form class="fb-form">
                                                <div class="form-group col-lg-24">
                                                    <label for="inputEmail" class="control-label">Ваше имя</label>
                                                    <input type="text" class="form-control" id="inputName">
                                                </div>
                                                <div class="form-group col-lg-24">
                                                    <label for="inputEmail" class="control-label">Номер телефона</label>
                                                    <input type="text" class="form-control" id="inputName">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <label for="inputEmail" class="control-label">Количество человек</label>
                                                    <input type="text" class="form-control" id="inputName">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <label for="inputEmail" class="control-label">Количество суток</label>
                                                    <input type="text" class="form-control" id="inputName">
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Футер модального окна -->
                                        <div class="modal-footer col-lg-24">
                                            <div class="text-center"> <button class="btn btn-success" data-toggle="modal" data-target="#myModalBox" role="button">Отправить</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="profile-desc custom-txt">
                        <p>
                            <?=$hotel[0]->content?>
                        </p>
                    </div>
                    <div class="profileHeader-label">
                        <div class="adv-dop">Достопримечательности рядом:</div>
                        <span class="label label-default">Водопад</span>
                        <span class="label label-default">Озеро</span>
                    </div>
                </div>
                <div class="col-xs-24 col-sm-24 col-md-12 col-lg-pull-12">
                    <div class="sliderProfile-block">
                        <div class="gallery">
                            <div class="gallery-cell" style="background: url(../images/big_day7-4.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;"></div>
                            <div class="gallery-cell" style="background: url(../images/home-one.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;"></div>
                            <div class="gallery-cell" style="background: url(../images/home-two.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;"></div>
                        </div>

                        <ol class="gallery-nav">
                            <li class="is-selected" style="background: url(../images/big_day7-4.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;"></li>
                            <li class="is-selected" style="background: url(../images/home-one.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;"></li>
                            <li class="is-selected" style="background: url(../images/home-two.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;"></li>
                        </ol>
                    </div>
                    <div class="review-wrp">
                        <div class="review-block">
                            <div class="review-position">
                                <div class="review">
                                    <p>Отдыхале в феврале на турбазе. Администрация все просьбы выполнял быстро и качественно. По качеству питания, все очень очень вкусно и много! Цена соответствовала качеству предоставленных услуг. Все сотрудники вели себя вежливо и внимательно. Спасибо за отдых!</p>
                                    <a class="see-all-link" data-toggle="modal" data-target="#myModalBox-review-all">смотреть все отзывы <span></span></a>
                                </div>
                                <div class="review-author-wrp">
                                    <div class="review-author">
                                        <img src="../images/girl.svg">
                                        <span class="review-name">Екатерина Барсукова</span>
                                    </div>
                                    <button class="btn btn-primary pull-right pull-none" role="button" data-toggle="modal" data-target="#myModalBox-review">Оставить отзыв</button>
                                </div>
                            </div>
                            <!-- HTML-код модального окна - отправка отыва -->
                            <div id="myModalBox-review" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content col-lg-24 padd-zero">
                                        <!-- Заголовок модального окна -->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <!-- Основное содержимое модального окна-->
                                        <div class="modal-body">
                                            <form class="fb-form">
                                                <div class="form-group col-lg-24">
                                                    <label for="inputEmail" class="control-label">Ваше имя</label>
                                                    <input type="text" class="form-control" id="inputName">
                                                </div>
                                                <div class="form-group col-lg-24">
                                                    <label for="inputEmail" class="control-label">Ваш отзыв</label>
                                                    <textarea class="form-control" id="inputMassage"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Футер модального окна -->
                                        <div class="modal-footer col-lg-24">
                                            <div class="text-center"> <button class="btn btn-success" data-toggle="modal" data-target="" role="button">Оставить отзыв</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- HTML-код модального окна - список отзывов -->
                            <div id="myModalBox-review-all" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content col-lg-24 padd-zero modal-scroll">
                                        <!-- Заголовок модального окна -->
                                        <div class="modal-header">
                                            <h4>Отзывы о турбазе «Тихий берег»:</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <!-- Основное содержимое модального окна -->
                                        <div class="modal-body">
                                            <div class="review-position">
                                                <div class="review review-grey">
                                                    <p>Отдыхале в феврале на турбазе. Администрация все просьбы выполнял быстро и качественно. По качеству питания, все очень очень вкусно и много! Цена соответствовала качеству предоставленных услуг. Все сотрудники вели себя вежливо и внимательно. Спасибо за отдых!</p>
                                                </div>
                                                <div class="review-author-wrp">
                                                    <div class="review-author">
                                                        <img src="../images/girl.svg">
                                                        <span class="review-name">Екатерина Барсукова</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Футер модального окна -->
                                        <div class="modal-footer col-lg-24">
                                            <div class="text-center"> <button class="btn btn-success">Оставить отзыв</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="stock-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-24">
                    <div id="map"></div>
                    <script>
                        var map;
                        function initMap() {
                            var uluru = {lat: <?=$hotel[0]->x?>, lng: <?=$hotel[0]->y?>};
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 10,
                                center: uluru
                            });
                            var marker = new google.maps.Marker({
                                position: uluru,
                                map: map
                            });
                        }


                    </script>
                </div>
            </div>
        </div>
    </section>
    <section class="stock-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-24">
                    <div class="main-content-header">
                        <div class="col-lg-12 col-md-12 col-sm-13">
                            <h2>Похожие гостиницы</h2>
                        </div>
                        <div class="main-content-header-btn">
                            <button class="btn btn-primary" role="button">смотреть все</button>
                        </div>
                    </div>
                </div>
                <?php foreach ($hotels as $item){?>
                <a class="col-lg-8 col-md-12 col-sm-12 col-xs-24" href="<?=Url::to(['hotelprofile', 'id' => $item->id])?>">
                    <div class="card">
                        <div class="image">
                            <img src="<?= $item->img?>" class="img-responsive" alt="">
                        </div>
                        <div class="card-content">
                            <h3><?= $item->name?></h3>
                            <div class="card-price text-right">от <?=$item->price?> руб.</div>
                            <div class="rating pull-right">
                                <span class="stars" data-stars="<?=$item->star?>">X</span>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
</main>