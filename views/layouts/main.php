<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Syawalan PMR Wira Smansa</title>
    <?php $this->head() ?>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->homeUrl.'css/style.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->homeUrl.'css/swipebox.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->homeUrl.'css/bootstrap.css'?>">
    <link rel="shortcut icon" href="images/favicon.ico">
</head>
<body>

<?php $this->beginBody() ?>

    <?= $content ?>

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-left">
            <p>Copyright © 2015 All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> | Customized by <a href="https://www.facebook.com/akhmadfakhoni">akhfa</a> </p>
        </div>
        <div class="footer-right">
            <ul>
                <li><a href="https://www.facebook.com/groups/303408655525/" class="facebook"></a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //footer -->

<!-- //contact -->

<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
<!--<script src="js/bootstrap.js"> </script>-->
<!-- //for bootstrap working -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
