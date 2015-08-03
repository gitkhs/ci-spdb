<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include_once FCPATH.'/view/layout/'.$site['layout'].'/header.php';?>
</head>
<body>

<?php if(!element('cover',$site)) :?>
<div id="top">
<?php include_once FCPATH.'/view/layout/'.$site['layout'].'/top.php';?>
</div>
<?php endif?>

<div id="content">
<?php include_once FCPATH.'/view/pages/'.$param['class'].'/'.$param['method'].EXT;?>
</div>

<div id="bottom">
<?php include_once FCPATH.'/view/layout/'.$site['layout'].'/bottom.php';?>
</div>

<?php include_once FCPATH.'/view/layout/'.$site['layout'].'/footer.php';?>
</body>
</html>
