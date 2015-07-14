<?php
/* @var $this yii\web\View */
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<!-- banner -->
<div class="banner">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PMR</a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"  class="active">Home</a></li>
<!--                    <li><a href="#about" class="scroll">Tentang Kami</a></li>-->
<!--                    <li><a href="#gallery" class="scroll">Gallery</a></li>-->
                    <li><a href="#pendaftaran" class="scroll">Pendaftaran</a></li>
                    <li><a href="#lokasi" class="scroll">Lokasi</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <div class="banner-info">
            <h1>Selamat Datang!</h1>
            <p>Website ini bertujuan untuk melakukan pendataan pada dewan PMR yang akan hadir
            acara silaturahmi pada tanggal 21 Juli 2015 di Muktisari. SIlahkan klik tombol daftar berikut.</p>
            <div class="click">
                <a href="#pendaftaran" class="hvr-shutter-in-vertical scroll">Daftar</a>
            </div>
        </div>
    </div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="banner-bottom" style="display: none">
    <div class="container">
        <h3>Welcome!</h3>
        <p class="eos">Sed ut perspiciatis unde omnis iste natus error
            sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam.</p>
        <div class="banner-bottom-grids">
            <div class="col-md-6 banner-bottom-grid-left">
                <img src="images/1.jpg" alt=" " class="img-responsive" />
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus
                    qui blanditiis praesentium voluptatum deleniti atque corrupti
                    quos dolores.</p>
            </div>
            <div class="col-md-6 banner-bottom-grid-right">
                <div class="banner-bottom-grid1">
                    <h4>Temporibus autem quibusdam et aut officiis
                        debitis aut rerum perferendis doloribus </h4>
                    <p>Itaque earum rerum hic tenetur a sapiente delectus,
                        ut aut reiciendis voluptatibus maiores alias consequatur
                        aut perferendis doloribus asperiores repellat voluptatibus maiores
                        alias consequatur earum rerum hic tenetur.</p>
                </div>
                <div class="banner-bottom-grid1">
                    <h4>Perferendis autem quibusdam et aut officiis
                        debitis aut rerum perferendis doloribus </h4>
                    <p>Itaque earum rerum hic tenetur a sapiente delectus,
                        ut aut reiciendis voluptatibus maiores alias consequatur
                        aut perferendis doloribus asperiores repellat voluptatibus.</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="click more">
            <a href="single.html" class="hvr-shutter-in-vertical repellat">Read more...</a>
        </div>
    </div>
</div>
<!-- //banner-bottom -->
<!-- about -->
<div id="about" class="about" style="display: none">
    <div class="container">
        <h3>Tentang Kami</h3>
        <p class="eos">Kami adalah dewan PMR WIRA SMANSA Kebumen masa bakti 2009 / 2010
        </p>
        <div class="about-grids">
            <div class="col-md-6 about-grid-left">
                <img src="images/2.jpg" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-6 about-grid-right">
                <h4>Perferendis autem quibusdam et aut officiis
                    debitis aut rerum perferendis doloribus </h4>
                <p>Itaque earum rerum hic tenetur a sapiente delectus,
                    ut aut reiciendis voluptatibus maiores alias consequatur
                    aut perferendis doloribus asperiores repellat voluptatibus
                    maiores alias.Sed ut perspiciatis unde omnis iste natus error
                    sit voluptatem accusantium doloremque laudantium, totam rem
                    aperiam.At vero eos et accusamus et iusto odio dignissimos
                    ducimus qui blanditiis praesentium voluptatum deleniti atque
                    corrupti quos dolores et quas molestias excepturi sint occaecati
                    cupiditate non provident.</p>
                <div class="click more quas">
                    <a href="single.html" class="hvr-shutter-in-vertical repellat">Read more...</a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="about-grids1">
            <div class="col-md-4 about-grid1">
                <div class="abt-grd">
                    <span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
                    <h4>DRINKS</h4>
                </div>
            </div>
            <div class="col-md-4 about-grid1">
                <div class="abt-grd">
                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                    <h4>EVENTS</h4>
                </div>
            </div>
            <div class="col-md-4 about-grid1">
                <div class="abt-grd">
                    <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                    <h4>MUSIC</h4>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about -->
<!-- gallery -->
<div class="gallery" id="gallery" style="display: none">
    <div class="container">
        <h3>Gallery</h3>
        <p class="rem eos">Sed ut perspiciatis unde omnis iste natus error
            sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam.</p>
        <div class="gallery-grids totam">
            <div class="col-md-3 gallery-grid">
                <a href="images/1.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
                    <img class="one img-responsive" src="images/1-.jpg" alt=" " />
                    <div class="b-wrapper">
                        <h2 class="b-animate b-from-left    b-delay03 ">
                            <img class="img-responsive" src="images/search.png" class="zoom" alt=""/>
                        </h2>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a href="images/2.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
                    <img class="one img-responsive" src="images/2-.jpg" alt=" " />
                    <div class="b-wrapper">
                        <h2 class="b-animate b-from-left    b-delay03 ">
                            <img class="img-responsive" src="images/search.png" class="zoom" alt=""/>
                        </h2>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a href="images/3.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
                    <img class="one img-responsive" src="images/3-.jpg" alt=" " />
                    <div class="b-wrapper">
                        <h2 class="b-animate b-from-left    b-delay03 ">
                            <img class="img-responsive" src="images/search.png" class="zoom" alt=""/>
                        </h2>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a href="images/4.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
                    <img class="one img-responsive" src="images/4-.jpg" alt=" " />
                    <div class="b-wrapper">
                        <h2 class="b-animate b-from-left    b-delay03 ">
                            <img class="img-responsive" src="images/search.png" class="zoom" alt=""/>
                        </h2>
                    </div>
                </a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="gallery-grids">
            <div class="col-md-3 gallery-grid">
                <a href="images/5.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
                    <img class="one img-responsive" src="images/5-.jpg" alt=" " />
                    <div class="b-wrapper">
                        <h2 class="b-animate b-from-left    b-delay03 ">
                            <img class="img-responsive" src="images/search.png" class="zoom" alt=""/>
                        </h2>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a href="images/6.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
                    <img class="one img-responsive" src="images/6-.jpg" alt=" " />
                    <div class="b-wrapper">
                        <h2 class="b-animate b-from-left    b-delay03 ">
                            <img class="img-responsive" src="images/search.png" class="zoom" alt=""/>
                        </h2>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a href="images/7.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
                    <img class="one img-responsive" src="images/7-.jpg" alt=" " />
                    <div class="b-wrapper">
                        <h2 class="b-animate b-from-left    b-delay03 ">
                            <img class="img-responsive" src="images/search.png" class="zoom" alt=""/>
                        </h2>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a href="images/8.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
                    <img class="one img-responsive" src="images/8-.jpg" alt=" " />
                    <div class="b-wrapper">
                        <h2 class="b-animate b-from-left    b-delay03 ">
                            <img class="img-responsive" src="images/search.png" class="zoom" alt=""/>
                        </h2>
                    </div>
                </a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <link rel="stylesheet" href="css/swipebox.css">
        <script src="js/jquery.swipebox.min.js"></script>
        <script type="text/javascript">
            jQuery(function($) {
                $(".swipebox").swipebox();
            });
        </script>
    </div>
</div>
<!-- //gallery -->
<!-- pendaftaran -->
<div class="contact" id="pendaftaran" style="background: purple">
    <div class="container">
        <h3>Pendaftaran</h3>
        <p class="rem eos">
            Acara silaturahmi PMR Wia Smansa Kebumen akan dilaksanakan pada tanggal 21 Juli 2015.
            Besar harapan kami agar keluarga besar PMR Wira Smansa dapat menghadiri acara ini.
            Untuk konfirmasi kehadiran, silahkan isi form di bawah ini.</p>
        <div class="contact-top">
            <div class="col-md-6 contact-top-left">
                <div class="contact-textarea">
                    <?php $form = ActiveForm::begin(
                        [
                            'action' => 'kehadiran/create',
                            'options' => [
//                                'class' => 'userform'
                            ]
                        ]
                    ); ?>
                    <?= $form->field($modelKehadiran, 'nama')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($modelKehadiran, 'alamat')->textarea(['rows' => 6]) ?>

                    <?= $form->field($modelKehadiran, 'hp')->textInput(['maxlength' => true]) ?>

                    <?php
                    $array = array();
                    for($i = 1991; $i < 2016 ; $i++)
                    {
                        array_push($array, array($i => $i));
                    }
                    ?>

                    <?= $form->field($modelKehadiran, 'angkatan')->dropDownList($array) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Daftar', ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 contact-top-right">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

//                    'no',
                        'nama',
//                    'alamat:ntext',
//                    'hp',
//                    'angkatan',
                        // 'created',

//                    ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="news" id="lokasi" style="background: purple">
    <div class="container">
        <div class="col-md-12 text-center">
            <h3>Lokasi</h3>
            <iframe width="900" height="450" frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=-7.702763%2C%20109.662840&key=AIzaSyBcsRQl4KBB3bi8zuC7EQik0BbXkT9MoS0"></iframe>
        </div>
    </div>
</div>