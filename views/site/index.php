<?php
use yii\web\AppController;
use yii\helpers\Url;
$this->title = "хан алтай";
$this->registerMetaTag(['name' => 'description', 'content' => 'мой супер пупер текст']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'мой супер пупер текст']);
?>
<header>
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="5000" id="bs-carousel">
        <ol class="carousel-indicators">
            <?php
            for ($i=0; $i< $sb_col; $i++){
            ?>
            <li data-target="#bs-carousel" data-slide-to="<?=$i?>" <?php if($i==0){?>class="active"<?php }?>></li>
            <?php
            }?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
            $i=0;
            /*echo "<pre>";
            print_r($sb_col);
            echo "</pre>";*/
            foreach ($sb as $s){?>

            <div class="item slides <?php if($i==0){?> active<?php }?>">
                <div class="slide-1" style="background-image: url(<?= $s->img?>);"></div>
                <div class="hero">
                    <hgroup>
                        <h1><?= $s->title?></h1>
                    </hgroup>
                    <a href="<?= $s->url?>" class="btn btn-default" role="button">Смотреть</a>
                </div>
            </div>
            <?php
            $i++;
            }?>
        </div>
        <!-- Controls
              <a class="left carousel-control" href="#mainCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"><img src="images/left.svg" width="40px" alt=""></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"><img src="images/right.svg" width="40px" alt=""></span>
                <span class="sr-only">Next</span>
              </a> -->
    </div>
</header>
<main>
    <section class="up-info">
        <div class="container">
            <div class="row">

                <a href="<?=Url::to('site/hotels')?>" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="up-info-block text-center">
                        <div class="up-info-block-ico-one"></div>
                        <span class="up-info-block-info">Гостиницы</span>
                    </div>
                </a>
                <a  href="<?=Url::to('site/tours')?>" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="up-info-block text-center">
                        <div class="up-info-block-ico-two"></div>
                        <span class="up-info-block-info">Туры</span>
                    </div>
                </a>
                <div class="col-lg-16 col-md-16 col-sm-24 col-xs-24">
                    <div class="up-info-block-right">
                        <div id="myCarousel" class="info-carousel carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <?php
                                for ($i=0; $i< $ss_col; $i++) {
                                    ?>
                                    <li data-target="#myCarousel" data-slide-to="<?=$i?>" <?php if ($i==0){?> class="active"<?php }?>></li>
                                    <?php
                                }?>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <?php
                                $i=0;
                                /*echo "<pre>";
                                print_r($sb_col);
                                echo "</pre>";*/
                                foreach ($ss as $s) {
                                    ?>
                                    <div class="item <?php if($i==0){?> active<?php }?> info-block-right-img"
                                         style="background: url(<?=$s->img?>) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;">
                                        <div class="carousel-caption transfer-info">
                                            <h2><?=$s->title?></h2>
                                            <a href="<?=$s->url?>" class="btn btn-primary primary-rev-one" role="button">Перейти
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                }?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="main-pars stock-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-18 col-md-18 col-sm-24 col-xs-24">
                    <div class="main-content-header col-lg-24">
                        <div class="col-lg-12 col-md-12 col-sm-13">
                            <h2>Новые гостиницы</h2>
                        </div>
                        <div class="main-content-header-btn">
                            <button class="btn btn-primary" role="button">смотреть все</button>
                        </div>
                    </div>
                    <?php foreach ($hotel as $item){?>
                    <a class="col-lg-12 col-md-12 col-sm-12 col-xs-24" href="<?=Url::to(['hotelprofile', 'id' => $item->id])?>">
                        <div class="card">
                            <div class="image">
                                <img src="<?= $item->img?>" class="img-responsive" alt="">
                            </div>
                            <div class="card-content">
                                <h3><?=$item->name?></h3>
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
                    <div class="clearfix"></div>
                    <div class="main-content-header col-lg-24">
                        <div class="col-lg-12 col-md-12 col-sm-13">
                            <h2>Новые туры</h2>
                        </div>
                        <div class="main-content-header-btn">
                            <button class="btn btn-primary" role="button">смотреть все</button>
                        </div>
                    </div>
                    <?php foreach ($tours as $item){?>
                    <a class="col-lg-12 col-md-12 col-sm-12 col-xs-24" href="<?=Url::to(['toursprofile', 'id' => $item->id])?>">
                        <div class="card">
                            <div class="image">
                                <img class="img-responsive" src="<?= $item->img?>" alt="">
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
                    </a>
                        <?php
                    }
                    ?>
                    <div class="clearfix"></div>
                    <div class="request-banner col-lg-24">
                        <div class="col-lg-16 col-md-16 col-sm-16">
                                    <span class="request-banner-head">
                                        Являешся владельцем туристического предприятия? Оставляй заявку на размещение!
                                    </span>
                        </div>
                        <div class="request-banner-btn">
                            <button class="btn btn-success" role="button">Подать заявку</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="main-content-header col-lg-24">
                        <div class="col-lg-12 col-md-12 col-sm-13">
                            <h2>События</h2>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="verticalTab">
                        <div class="resp-tabs-container">
                            <ul class="resp-tabs-list">
                                <li>Праздник «Алтайская зимовка»
                                    <span class="event-date hidden-sm hidden-xs">13 декабря 2017</span>
                                </li>
                                <li>Краевой фестиваль детского творчества
                                    <span class="event-date hidden-sm hidden-xs">20 декабря 2017</span>
                                </li>

                                <li>Праздник «Алтайская зимовка»
                                    <span class="event-date hidden-sm hidden-xs">19 января 2018</span>
                                </li>
                                <li>Праздник «Алтайская зимовка»
                                    <span class="event-date hidden-sm hidden-xs">19 января 2018</span>
                                </li>
                            </ul>
                            <div>
                                <div class="tabs-info">
                                    <div class="event-header">Праздник «Алтайская зимовка»</div>
                                    <span class="event-date hidden-lg hidden-md"><span>Пройдет:</span> 13 декабря 2017</span>
                                    <div class="event-caption">
                                        В четвертый раз в Алтайском крае состоится яркий и по-настоящему зимний праздник, посвященный прилету лебедей и открытию зимнего туристического сезона в регионе.
                                    </div>
                                    <a class="see-all-link">Читать далее <span></span></a>
                                </div>
                                <div class="tabs-img hidden-xs" style="background: url(images/big_day7-4.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;"></div>
                            </div>
                            <div>
                                <div class="tabs-info">
                                    <div class="event-header">Краевой фестиваль детского творчества</div>
                                    <span class="event-date hidden-lg hidden-md"><span>Пройдет:</span> 13 декабря 2017</span>
                                    <div class="event-caption">
                                        В четвертый раз в Алтайском крае состоится яркий и по-настоящему зимний праздник, посвященный прилету лебедей и открытию зимнего туристического сезона в регионе. В четвертый раз в Алтайском крае состоится яркий и по-настоящему зимний праздник, посвященный прилету лебедей и открытию зимнего туристического сезона в регионе.
                                    </div>
                                    <a class="see-all-link">Читать далее <span></span></a>
                                </div>
                                <div class="tabs-img hidden-xs" style="background: url(images/12.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;"></div>
                            </div>
                            <div>
                                <div class="tabs-info">
                                    <div class="event-header">Праздник «Алтайская зимовка»</div>
                                    <span class="event-date hidden-lg hidden-md"><span>Пройдет:</span> 13 декабря 2017</span>
                                    <div class="event-caption">
                                        В четвертый раз в Алтайском крае состоится яркий и по-настоящему зимний праздник, посвященный прилету лебедей и открытию зимнего туристического сезона в регионе.
                                    </div>
                                    <a class="see-all-link">Читать далее <span></span></a>
                                </div>
                                <div class="tabs-img hidden-xs" style="background: url(images/34.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;"></div>
                            </div>
                            <div>
                                <div class="tabs-info">
                                    <div class="event-header">Праздник «Алтайская зимовка»</div>
                                    <span class="event-date hidden-lg hidden-md"><span>Пройдет:</span> 13 декабря 2017</span>
                                    <div class="event-caption">
                                        В четвертый раз в Алтайском крае состоится яркий и по-настоящему зимний праздник, посвященный прилету лебедей и открытию зимнего туристического сезона в регионе.
                                    </div>
                                    <a class="see-all-link">Читать далее <span></span></a>
                                </div>
                                <div class="tabs-img hidden-xs" style="background: url(images/big_day7-4.jpg) no-repeat bottom center;-webkit-background-size: cover;-moz-background-size: cover; background-size: cover;-o-background-size: cover;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <aside>
                    <div class="col-lg-6 col-md-6 col-sm-24 col-xs-24">
                        <div class="sidebar-wrp wrp-display-block">
                            <div class="sidebar-header">
                                <h2>Новости</h2>
                            </div>
                            <div class="sidebar-news-wrp">
                                <div class="sidebar-news">
                                    <div class="sidebar-news-header">
                                        На Манжерокском озере идут работы по очистке и реабилитации водоема
                                    </div>
                                    <div class="sidebar-news-preview">
                                        Глава Республики Алтай Александр Бердников провел рабочую планерку на Манжерокском озере, где полным ходом идут работы по реабилитации...
                                    </div>
                                    <div class="sidebar-news-date">20 ноября</div>
                                </div>
                                <div class="sidebar-news">
                                    <div class="sidebar-news-header">
                                        Ученые обследовали археологические объекты в Онгудайском районе
                                    </div>
                                    <div class="sidebar-news-preview">
                                        В полевой сезон 2017 года археологическая экспедиция Агентства по культурно-историческому наследию Республики Алтай проводила археологические разведки на территории Онгудайского района...
                                    </div>
                                    <div class="sidebar-news-date">20 ноября</div>
                                </div>
                                <div class="sidebar-news">
                                    <div class="sidebar-news-header">
                                        На Манжерокском озере идут работы по очистке и реабилитации водоема
                                    </div>
                                    <div class="sidebar-news-preview">
                                        Глава Республики Алтай Александр Бердников провел рабочую планерку на Манжерокском озере, где полным ходом идут работы по реабилитации...
                                    </div>
                                    <div class="sidebar-news-date">20 ноября</div>
                                </div>
                            </div>
                            <a href="<?=Url::to('site/news')?>" class="see-all-link">смотреть больше <span></span></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-24 col-xs-24">
                        <div class="sidebar-wrp wrp-display-block">
                            <div class="sidebar-header">
                                <h2>Интересное</h2>
                            </div>
                            <div class="interesting-wrp">
                                <div class="interesting-post" style="background: url(images/big_day7-4.jpg) no-repeat bottom center;background-color: black;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover; ">
                                    <div class="interesting-post-date">11 августа 2017</div>
                                    <div class="interesting-post-header">
                                        <div class="interesting-post-ico"><img src="images/photo.svg" data-toggle="tooltip" data-placement="right" title="Фотоальбом"></div>
                                        Золотодобыча на Телецком озере
                                    </div>
                                </div>
                                <div class="interesting-post" style="background: url(images/Sunset_at_Kucherla_lake.jpg) no-repeat bottom center;background-color: black;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover; ">
                                    <div class="interesting-post-date">11 августа 2017</div>
                                    <div class="interesting-post-header">
                                        <div class="interesting-post-ico"><img src="images/video.svg" data-toggle="tooltip" data-placement="right" title="Видео"></div>
                                        Стараюсь написать очень много текста для теста этого места!
                                    </div>
                                </div>
                                <div class="interesting-post" style="background: url(images/home-one.jpg) no-repeat bottom center;background-color: black;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover; ">
                                    <div class="interesting-post-date">11 августа 2017</div>
                                    <div class="interesting-post-header">
                                        <div class="interesting-post-ico"><img src="images/article.svg" data-toggle="tooltip" data-placement="right" title="Статья"></div>
                                        Сатья я том, как прикупить домик в отдаленной местности
                                    </div>
                                </div>
                            </div>
                            <a href="<?=Url::to('site/interesting')?>" class="see-all-link">смотреть больше <span></span></a>
                        </div>
                        <div class="sidebar-wrp">
                            <div class="social-banner">
                                <span>Следуйте за нами</span>
                                <a href="#" class="social-banner-ico-one"></a>
                                <a href="#" class="social-banner-ico-two"></a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>