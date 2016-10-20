<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Template</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./sample-javascript/css/style.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="navbar-brand" href="/" style="padding:0px;"><img src="./sample-javascript/img/3" alt="3" style="width:105px; height:51px;"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">메인화면 <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="botton" aria-expanded="false">Compoenent <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="./board.php">게시판</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Javascript <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="./sample-javascript/modal.html">Modal</a></li>
                            <li><a href="./sample-javascript/dropdown.html">Dropdown</a></li>
                            <li><a href="./sample-javascript/scrollspy.html">ScrollSpy</a></li>
                            <li><a href="./sample-javascript/tooltip.html">Tooltip</a></li>
                            <li><a href="./sample-javascript/popover.html">Popover</a></li>
                            <li><a href="./sample-javascript/tapnav.html">tabnav</a></li>
                            <li><a href="./sample-javascript/loading.html">Loading , Single state</a></li>
                            <li><a href="./sample-javascript/collapse.html">Collapse</a></li>
                            <li><a href="./sample-javascript/affis.html">Affix</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section class="container1">

      <section class="container2">
        <!-- <div class="head">

            <video id="video-background" class="video-background loaded" loop="loop" webkit-playsinline="true" src="./sample-javascript/img/8.webm"></video>
        </div> -->
        <div class="row">
            <div class="home-header__content" style="color: rgb(255, 255, 255)">
                <img src="./sample-javascript/img/3.jpg" id="hello" alt="image3">
                <h2 class="home-header__small-heading home-header__small-heading--tagline">빠른 속도로 펼쳐지는, 모두를 위한 전략 카드 게임</h2>
                <h1>
            놀랄 만큼 쉽고
            <br class="show--sm">
            믿기 힘들 만큼 재미있습니다.
          </h1>
                <br><br><br>
            </div>
        </div>
      </section>
    </section>

    <section class="container3 col-xs-6 col-xs-offset-3">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="aa" src="./sample-javascript/img/1.jpg" alt="image1">
                    <div class="carousel-caption">
                        <h3>1</h3>
                        <p>1</p>
                    </div>
                </div>
                <div class="item">
                    <img class="aa" src="./sample-javascript/img/2.jpg" alt="image2">
                    <div class="carousel-caption">
                        <h3>2</h3>
                        <p>2</p>
                    </div>
                </div>
                <div class="item">
                    <img class="aa" src="./sample-javascript/img/4.jpg" alt="image3">
                    <div class="carousel-caption">
                        <h3>3</h3>
                        <p>3</p>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

    </section>

    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./sample-javascript/js/script.js"></script>
</body>

</html>