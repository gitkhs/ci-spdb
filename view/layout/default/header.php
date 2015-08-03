<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?=$site['title']?></title>

<!-- 부트스트랩 -->
<link href="<?=$site['root']?>/view/css/bootstrap.<?=$site['csstheme']?>.min.css" rel="stylesheet">
<!-- 레이아웃 기본 스타일 -->
<link href="<?=$site['root']?>/view/layout/<?=$site['layout']?>/layout.css" rel="stylesheet">
<?php if (is_file(FCPATH.'view/pages/'.$param['class'].'/'.$param['method'].'.css')) : ?>
<!-- 페이지별 스타일 -->
<link href="<?=$site['root']?>/view/pages/<?=$param['class'].'/'.$param['method']?>.css" rel="stylesheet">
<?php endif?>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
