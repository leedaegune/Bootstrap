<?php
    $id = $_GET['id'];
    
    // echo $title.'<br>'.$content.'<br>'.$author
    /* Database 연결 */
    $host = 'mysql:host=localhost;dbname=test';
    $user = 'test';
    $password = '1234';
    $conn = new PDO($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    /* Data 조회를 위한 Query 작성 */
    // $stmt = $conn->prepare('');
    /* Query 실행 */
    $stmt = $conn->prepare('DELETE FROM board WHERE id='.$id);
    /* 조회한 Data를 배열(Array) 형태로 모두 저장 */
    $stmt->execute();

    /* Foreach 반복문을 이용해 가져온 모든 데이터를 출력한다 */
    // foreach($list as $item) {
    //     echo $member['name']." / ".$member['year']." / ".$member['address']."<br>";
    // }

?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Over Watch</title>

    <!-- Bootstrap -->
    <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./sample-javascript/css/style.css">
    <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">OverWatch</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home </a></li>
            <li><a href="./introduce.php"><i class="fa fa-user-secret" aria-hidden="true"></i> Introduce</a></li>
            <li class="active"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Board  <span class="sr-only">(current)</span></a></li>
            <li><a href="./faq.php"><i class="fa fa-comments" aria-hidden="true"></i> FAQ</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <section class="container">
      <h1>성공적으로 삭제 되었습니다.</h1>
      <a href="./board.php" class="btn btn-primary">돌아가기</a>
    </section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
