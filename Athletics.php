<!DOCTYPE html>
    <html>
    <head>
        <?php require_once("navbar.php") ?>
        <?php require_once("/lib/head-utils.php") ?>
        <meta charset="UTF-8" />
        <title>Document</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
<body>
<div id="hero-wrapper">
    <div class="carousel-wrapper">
        <div id="hero-carousel" class="carousel slide carousel-fade">
            <ol class="carousel-indicators">
                <li data-target="#hero-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#hero-carousel" data-slide-to="1"></li>
                <li data-target="#hero-carousel" data-slide-to="2"></li>
                <li data-target="#hero-carousel" data-slide-to="3"></li>
                <li data-target="#hero-carousel" data-slide-to="4"></li>
                <li data-target="#hero-carousel" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="lib/images/xcpic.jpg">
                </div>
                <div class="item">
                    <img src="lib/images/basepic.jpg">
                </div>
                <div class="item">
                    <img src="lib/images/bb2pic.jpg">
                </div>
                <div class="item">
                    <img src="lib/images/foot2pic.jpg">
                </div>
                <div class="item">
                    <img src="lib/images/xc2pic.jpg">
                </div>
                <div class="item">
                    <img src="lib/images/golfpic.jpg">
                </div>
            </div>
            <a class="left carousel-control" href="#hero-carousel" data-slide="prev">
                <i class="fa fa-chevron-left left"></i>
            </a>
            <a class="right carousel-control" href="#hero-carousel" data-slide="next">
                <i class="fa fa-chevron-right right"></i>
            </a>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">This is where cool stuff goes.<br> <span class="text-muted">Really cool stuff ;).</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
   
</div>

</body>
</html>