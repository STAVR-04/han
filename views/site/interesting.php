<?php
use yii\helpers\Url;
$this->registerJsFile('@web/js/tooltips-init.js',['depends' =>'app\assets\AppAsset']);
$this->registerJsFile('@web/js/jquery.fancybox.min.js',['depends' =>'app\assets\AppAsset']);
$this->registerCssFile('@web/css/jquery.fancybox.min.css',['depends' =>'app\assets\AppAsset']);
$this->registerJsFile('@web/js/jquery.matchHeight-min.js',['depends' =>'app\assets\AppAsset']);
?>

<main class="inside-content">
    <section class="stock-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-24">
                    <a href="" onclick="history.back();return false;" class="returnBtn" data-toggle="tooltip" data-placement="right" title="Вернуться назад"></a>
                    <div class="inside-page-header">
                        <h1>Интересное</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-24">
                    <div class="main-content-header">
                        <div class="col-lg-12 col-md-12 col-sm-13">
                            <h2>Статьи</h2>
                        </div>
                        <div class="main-content-header-btn">
                            <a href="articles.html" class="btn btn-primary" role="button">смотреть все</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-24">
                    <div class="col-lg-8 col-md-8">
                        <a href="<?=Url::to(['articlesfull', 'id'=>1])?>" class="interesting-inner" style="background: url(../images/12.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;">
                            <div class="interesting-post-date">11 августа 2017</div>
                            <div class="interesting-post-ico"><img src="../images/article.svg" data-toggle="tooltip" data-placement="right" title="Статья"></div>
                            <div class="interesting-post-header">
                                Повседневная практика показывает, что сложившаяся структура организации требует определения и уточнения форм воздействия.
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <a href="<?=Url::to(['articlesfull', 'id'=>1])?>" class="interesting-inner" style="background: url(../images/34.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;">
                            <div class="interesting-post-date">11 августа 2017</div>
                            <div class="interesting-post-ico"><img src="../images/article.svg" data-toggle="tooltip" data-placement="right" title="Статья"></div>
                            <div class="interesting-post-header">
                                Таким образом, выбранный нами инновационный путь требует определения.
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <a href="<?=Url::to(['articlesfull', 'id'=>1])?>" class="interesting-inner" style="background: url(../images/bus.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;">
                            <div class="interesting-post-date">11 августа 2017</div>
                            <div class="interesting-post-ico"><img src="../images/article.svg" data-toggle="tooltip" data-placement="right" title="Статья"></div>
                            <div class="interesting-post-header">
                                Дорогие друзья, новая модель организационной деятельности способствует
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-24">
                    <div class="main-content-header">
                        <div class="col-lg-12 col-md-12 col-sm-13">
                            <h2>Фотоальбомы</h2>
                        </div>
                        <div class="main-content-header-btn">
                            <a href="photos.html" class="btn btn-primary" role="button">смотреть все</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-24">
                    <div class="col-lg-8 col-md-8">
                        <a href="#" class="interesting-inner" data-toggle="modal" data-target="#myModalBox-phAlb" style="background: url(../images/big_day7-4.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;">
                            <div class="interesting-post-date">11 августа 2017</div>
                            <div class="interesting-post-ico"><img src="../images/photo.svg" data-toggle="tooltip" data-placement="right" title="Фотоальбом"></div>
                            <div class="interesting-post-header">
                                Повседневная практика показывает, что сложившаяся структура организации требует определения и уточнения форм воздействия.
                            </div>
                        </a>
                        <!-- HTML-код модального окна - отправка отыва -->
                        <div id="myModalBox-phAlb" class="modal fade">
                            <div class="modal-dialog modal-phAlb">
                                <div class="modal-content col-lg-24">
                                    <!-- Заголовок модального окна -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <!-- Основное содержимое модального окна-->
                                    <div class="modal-body modal-phAlb-content">
                                        <div class="modal-phAlb-conten-info col-lg-24">
                                            <div class="modal-phAlb-content-name">Наименование фотоальбома</div>
                                            <div class="modal-phAlb-content-caption">
                                                Повседневная практика показывает, что сложившаяся структура организации требует определения и уточнения форм воздействия.
                                            </div>
                                            <div class="modal-phAlb-content-captionDetails">
                                                <span class="label label-default">27 декабря 2017</span>
                                                <span class="label label-default">Республика Алтай, Онгудай</span>
                                                <span class="label label-default">6 фотографий</span>
                                            </div>
                                        </div>
                                        <div class="phAlb-content-images">
                                            <div class="phAlb-image col-lg-5 col-md-5 col-sm-8 col-xs-12">
                                                <a data-fancybox="gallery" href="../images/big_day7-4.jpg">
                                                    <img src="../images/big_day7-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="phAlb-image col-lg-5 col-md-5 col-sm-8 col-xs-12">
                                                <a data-fancybox="gallery" href="../images/34.jpg">
                                                    <img src="../images/34.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="phAlb-image col-lg-5 col-md-5 col-sm-8 col-xs-12">
                                                <a data-fancybox="gallery" href="../images/bus.jpg">
                                                    <img src="../images/bus.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="phAlb-image col-lg-5 col-md-5 col-sm-8 col-xs-12">
                                                <a data-fancybox="gallery" href="../images/big_day7-4.jpg">
                                                    <img src="../images/big_day7-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="phAlb-image col-lg-5 col-md-5 col-sm-8 col-xs-12">
                                                <a data-fancybox="gallery" href="../images/34.jpg">
                                                    <img src="../images/34.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="phAlb-image col-lg-5 col-md-5 col-sm-8 col-xs-12">
                                                <a data-fancybox="gallery" href="../images/bus.jpg">
                                                    <img src="../images/bus.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <a href="#" class="interesting-inner" data-toggle="modal" data-target="#myModalBox-phAlb" style="background: url(../images/home-one.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;">
                            <div class="interesting-post-date">11 августа 2017</div>
                            <div class="interesting-post-ico"><img src="../images/photo.svg" data-toggle="tooltip" data-placement="right" title="Фотоальбом"></div>
                            <div class="interesting-post-header">
                                Таким образом, выбранный нами инновационный путь требует определения.
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <a href="#" class="interesting-inner" data-toggle="modal" data-target="#myModalBox-phAlb" style="background: url(../images/home-two.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;">
                            <div class="interesting-post-date">11 августа 2017</div>
                            <div class="interesting-post-ico"><img src="../images/photo.svg" data-toggle="tooltip" data-placement="right" title="Фотоальбом"></div>
                            <div class="interesting-post-header">
                                Дорогие друзья, новая модель организационной деятельности способствует
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-24">
                    <div class="main-content-header">
                        <div class="col-lg-12 col-md-12 col-sm-13">
                            <h2>Видеоматериалы</h2>
                        </div>
                        <div class="main-content-header-btn">
                            <a href="videos.html" class="btn btn-primary" role="button">смотреть все</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-24">
                    <div class="col-lg-8 col-md-8">
                        <a href="#" class="interesting-inner" data-toggle="modal" data-target="#myModalBox-videoProf" style="background: url(../images/big_day7-4.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;">
                            <div class="interesting-post-date">11 августа 2017</div>
                            <div class="interesting-post-ico"><img src="../images/video.svg" data-toggle="tooltip" data-placement="right" title="Видео"></div>
                            <div class="interesting-post-header">
                                Повседневная практика показывает, что сложившаяся структура организации требует определения и уточнения форм воздействия.
                            </div>
                        </a>
                        <!-- HTML-код модального окна - отправка отыва -->
                        <div id="myModalBox-videoProf" class="modal fade">
                            <div class="modal-dialog modal-phAlb">
                                <div class="modal-content col-lg-24">
                                    <!-- Заголовок модального окна -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <!-- Основное содержимое модального окна-->
                                    <div class="modal-body modal-phAlb-content">
                                        <div class="modal-phAlb-conten-info col-lg-24">
                                            <div class="modal-phAlb-content-name">Название видео</div>
                                            <div class="modal-phAlb-content-caption">
                                                Краткое описание видеоролика.
                                            </div>
                                            <div class="modal-phAlb-content-captionDetails">
                                                <span class="label label-default">27 декабря 2017</span>
                                                <span class="label label-default">Республика Алтай, Онгудай</span>
                                            </div>
                                        </div>
                                        <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
                                        <div id="player"></div>

                                        <script>
                                            // 2. This code loads the IFrame Player API code asynchronously.
                                            var tag = document.createElement('script');

                                            tag.src = "https://www.youtube.com/iframe_api";
                                            var firstScriptTag = document.getElementsByTagName('script')[0];
                                            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                                            // 3. This function creates an <iframe> (and YouTube player)
                                            //    after the API code downloads.
                                            var player;

                                            function onYouTubeIframeAPIReady() {
                                                player = new YT.Player('player', {
                                                    height: '360',
                                                    width: '100%',
                                                    videoId: 'xeVwugPfpqs',
                                                });
                                            }

                                        </script>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <a href="#" class="interesting-inner" data-toggle="modal" data-target="#myModalBox-videoProf" style="background: url(../images/home-one.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;">
                            <div class="interesting-post-date">11 августа 2017</div>
                            <div class="interesting-post-ico"><img src="../images/video.svg" data-toggle="tooltip" data-placement="right" title="Видео"></div>
                            <div class="interesting-post-header">
                                Таким образом, выбранный нами инновационный путь требует определения.
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <a href="#" class="interesting-inner" data-toggle="modal" data-target="#myModalBox-videoProf" style="background: url(../images/home-two.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;">
                            <div class="interesting-post-date">11 августа 2017</div>
                            <div class="interesting-post-ico"><img src="../images/video.svg" data-toggle="tooltip" data-placement="right" title="Видео"></div>
                            <div class="interesting-post-header">
                                Дорогие друзья, новая модель организационной деятельности способствует
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>