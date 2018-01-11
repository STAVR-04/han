<?php

$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyABvqNSAslrpLr5Zbp8EJpPE7IwFiPsH7o&callback=initMap',['depends' =>'app\assets\AppAsset']);
?>
<main class="inside-content">
    <section class="stock-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-24">
                    <a href="" onclick="history.back();return false;" class="returnBtn" data-toggle="tooltip" data-placement="right" title="Вернуться назад"></a>
                    <div class="inside-page-header">
                        <h1>Контакты</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-17 col-md-17 col-sm-24 col-xs-24">
                    <div id="mapCont"></div>
                    <script>
                        var map;
                        function initMap() {
                            var myLatLng = {
                                lat: 51.9567787,
                                lng: 85.9573667
                            };

                            var map = new google.maps.Map(document.getElementById('mapCont'), {
                                zoom: 18,
                                center: myLatLng
                            });

                            var marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map
                            });
                        }

                    </script>
                    <div id="map"></div>
                    <script>
                        var map;
                        function initMap() {
                            var uluru = lat: 51.9567787,
                                lng: 85.9573667};
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
                <div class="col-lg-7 col-md-7 col-sm-24 col-xs-24 contactsVer-block">
                    <div class="col-lg-24 col-md-24 col-sm-12">
                        <div class="footerSec contactsVer-inBlock">
                            <div class="footerSec-header">
                                <div class="footerSec-ico-one"></div>Адрес:</div>
                            <div class="footerSec-cont">
                                <span>г. Горно-Алтайск,<br>ул. Чорос-Гуркина, 29</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-24 col-md-24 col-sm-12">
                        <div class="footerSec contactsVer-inBlock">
                            <div class="footerSec-header">
                                <div class="footerSec-ico-two"></div>Бронирование:</div>
                            <div class="footerSec-cont">
                                <span>+7-913-999-48-49</span><br>
                                <span>+7-913-693-95-67</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-24 col-md-24 col-sm-12">
                        <div class="footerSec contactsVer-inBlock">
                            <div class="footerSec-header">
                                <div class="footerSec-ico-there"></div>Почта:</div>
                            <div class="footerSec-cont">
                                <span>tyrhanaltay@gmail.com</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-24 col-md-24 col-sm-12">
                        <div class="footerSec contactsVer-inBlock">
                            <div class="footerSec-header">
                                <div class="footerSec-ico-four"></div>По вопросам сотрудничества:</div>
                            <div class="footerSec-cont">
                                <span>+7-906-970-44-00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-24">
                    <div class="clearfix"></div>
                    <div class="request-banner rb-contactsVer col-lg-24">
                        <div class="col-lg-11 col-md-16 col-sm-16">
                                <span class="request-banner-head">
                            Являешся владельцем туристического предприятия? Оставляй заявку на размещение!
                        </span>
                        </div>
                        <div class="request-banner-btn">
                            <button class="btn btn-success" role="button">Подать заявку</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>