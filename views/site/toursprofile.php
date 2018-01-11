<?php
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
                            <h1><?=$tour->name?></h1>
                        </div>
                        <a href="#" class="warning-link">
                            <div></div>
                            <span>памятка по туру</span>
                        </a>
                        <div class="profileHeader-label">
                            <span class="label label-default">пеший тур</span>
                            <span class="label label-default"><?=$tour->days?> дня</span>
                        </div>
                        <div class="rating rating-level rating-noBg">
                            <span class="level-point" data-point="<?=$tour->complexity?>">X</span>
                            <span class="rating-name">сложность</span>
                        </div>

                        <div class="profileHeader-price pull-right">
                            от <span><?=$tour->price?></span> руб.
                        </div>
                    </div>
                    <div class="adv-and-buy-wrp">
                        <div class="adv pull-left col-lg-12 col-md-12 padd-zero">
                            <div class="adv-dop">Приобрести дополнительно:</div>
                            <div class="checkbox">
                                <label class="labelIndiv-one"><input type="checkbox" value="">палатки</label>
                                <label class="labelIndiv-one"><input type="checkbox" value="">трансфер</label>
                                <label class="labelIndiv-one"><input type="checkbox" value="">оборудование</label>
                                <label class="labelIndiv-one"><input type="checkbox" value="">палатки</label>
                                <label class="labelIndiv-one"><input type="checkbox" value="">трансфер</label>
                                <label class="labelIndiv-one"><input type="checkbox" value="">оборудование</label>
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
                            <?=$tour->content?>
                        </p>
                    </div>
                </div>
                <div class="col-xs-24 col-sm-24 col-md-12 col-lg-pull-12">
                    <div class="sliderProfile-block">
                        <div class="gallery">
                            <div class="gallery-cell" style="background: url(../images/34.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;"></div>
                            <div class="gallery-cell" style="background: url(../images/big_day7-4.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;"></div>
                        </div>

                        <ol class="gallery-nav">
                            <li class="is-selected" style="background: url(../images/34.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;"></li>
                            <li class="is-selected" style="background: url(../images/big_day7-4.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;"></li>
                        </ol>
                    </div>
                    <div class="review-wrp">
                        <div class="review-block">
                            <div class="review-position">
                                <div class="review">
                                    <p>Великолепный 10-ти дневный тур! Обязательно отправимся еще!</p>
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
                                            <h4>Отзывы о туре:</h4>
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
                                            <div class="review-position">
                                                <div class="review review-grey">
                                                    <p>Отдыхале в феврале на турбазе. Администрация все просьбы выполнял быстро и качественно. По качеству питания, все очень очень вкусно и много! Цена соответствовала качеству предоставленных услуг. Все сотрудники вели себя вежливо и внимательно. Спасибо за отдых!</p>
                                                </div>
                                                <div class="review-author-wrp">
                                                    <div class="review-author">
                                                        <img src="../images/man.svg">
                                                        <span class="review-name">Артем Артемьев</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-position">
                                                <div class="review review-grey">
                                                    <p>Отдыхале в феврале на турбазе. Администрация все просьбы выполнял быстро и качественно. По качеству питания, все очень очень вкусно и много! Цена соответствовала качеству предоставленных услуг. Все сотрудники вели себя вежливо и внимательно. Спасибо за отдых!</p>
                                                </div>
                                                <div class="review-author-wrp">
                                                    <div class="review-author">
                                                        <img src="../images/girl.svg">
                                                        <span class="review-name">Елена Шмакова</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-position">
                                                <div class="review review-grey">
                                                    <p>Отдыхале в феврале на турбазе. Администрация все просьбы выполнял быстро и качественно. По качеству питания, все очень очень вкусно и много! Цена соответствовала качеству предоставленных услуг. Все сотрудники вели себя вежливо и внимательно. Спасибо за отдых!</p>
                                                </div>
                                                <div class="review-author-wrp">
                                                    <div class="review-author">
                                                        <img src="../images/man.svg">
                                                        <span class="review-name">Артем Артемьев</span>
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
                            var uluru = {lat: <?=$tour->x?>, lng: <?=$tour->y?>};
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
                            <h2>Похожие туры</h2>
                        </div>
                        <div class="main-content-header-btn">
                            <button class="btn btn-primary" role="button">смотреть все</button>
                        </div>
                    </div>
                </div>
                <?php
                foreach ($tours as $item) {
                    ?>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-24">
                        <div class="card">
                            <div class="image">
                                <img class="img-responsive" src="<?=$item->img?>" alt="">
                            </div>
                            <div class="card-content">
                                <h3><?=$item->name?></h3>
                                <div class="card-price text-right">от <?=$item->price?> руб.</div>
                                <div class="rating rating-level pull-right">
                                    <div class="">
                                        <span class="level-point" data-point="<?=$item->complexity?>">X</span>
                                        <span class="rating-name">сложность</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
</main>