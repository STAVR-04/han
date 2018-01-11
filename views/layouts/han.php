<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">

    <!--[if lt IE 9]>
    <![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="apple-touch-icon" href="">
    <link rel="apple-touch-icon" sizes="72x72" href="">
    <link rel="apple-touch-icon" sizes="114x114" href="">
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<div class="wrapper">
    <!-- Wrapper Start -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Навигация</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= Url::home()?>"><?= Html::img('images/logo.svg')?></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Гостиницы</a></li>
                    <li><a href="#">Туры</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Контакты</a></li>
                    <li>
                        <a class="nav-link" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve">
                                <g>
                                    <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752 c17.455,0,31.656,14.201,31.656,31.655V122.407z" fill="#FFFFFF"/>
                                    <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" fill="#FFFFFF"/>
                                    <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78 C135.661,29.421,132.821,28.251,129.921,28.251z" fill="#FFFFFF"/>
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?= $content ?>

    <section class="footer">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-24">
                        <div class="footerSec">
                            <div class="footerSec-header">
                                <div class="footerSec-ico-one"></div>Адрес:</div>
                            <div class="footerSec-cont">
                                <span>г. Горно-Алтайск,<br>ул. Чорос-Гуркина, 29</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-24">
                        <div class="footerSec">
                            <div class="footerSec-header">
                                <div class="footerSec-ico-two"></div>Бронирование:</div>
                            <div class="footerSec-cont">
                                <span>+7-913-999-48-49</span><br>
                                <span>+7-913-693-95-67</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-24">
                        <div class="footerSec">
                            <div class="footerSec-header">
                                <div class="footerSec-ico-there"></div>Почта:</div>
                            <div class="footerSec-cont">
                                <span>tyrhanaltay@gmail.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-24">
                        <div class="footerSec">
                            <div class="footerSec-header">
                                <div class="footerSec-ico-four"></div>По вопросам сотрудничества:</div>
                            <div class="footerSec-cont">
                                <span>+7-906-970-44-00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</div>
<!-- Wrapper END -->

<!-- Подключение CSS -->

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>