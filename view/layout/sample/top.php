<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=$site['root']?>/sample">Logo[cover]</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if($param['class']=='sample'&&$param['method']=='index'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample">main</a></li>
            <li <?php if($param['class']=='sample'&&$param['method']=='left'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/left">side left</a></li>
            <li <?php if($param['class']=='sample'&&$param['method']=='right'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/right">side right</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Theme <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li <?php if($site['csstheme']=='cerulean'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/cerulean">cerulean</a></li>
                <li <?php if($site['csstheme']=='cyborg'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/cyborg">cyborg</a></li>
                <li <?php if($site['csstheme']=='darkly'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/darkly">darkly</a></li>
                <li <?php if($site['csstheme']=='flatly'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/flatly">flatly</a></li>
                <li <?php if($site['csstheme']=='journal'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/journal">journal</a></li>
                <li <?php if($site['csstheme']=='lumen'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/lumen">lumen</a></li>
                <li <?php if($site['csstheme']=='paper'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/paper">paper</a></li>
                <li <?php if($site['csstheme']=='readable'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/readable">readable</a></li>
                <li <?php if($site['csstheme']=='sandstone'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/sandstone">sandstone</a></li>
                <li <?php if($site['csstheme']=='simplex'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/simplex">simplex</a></li>
                <li <?php if($site['csstheme']=='slate'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/slate">slate</a></li>
                <li <?php if($site['csstheme']=='spacelab'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/spacelab">spacelab</a></li>
                <li <?php if($site['csstheme']=='united'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/united">united</a></li>
                <li class="divider"></li>
                <li <?php if($site['csstheme']=='cosmo'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/cosmo">cosmo</a></li>
                <li <?php if($site['csstheme']=='superhero'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/superhero">superhero</a></li>
                <li <?php if($site['csstheme']=='yeti'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/index/theme/yeti">yeti</a></li>
                <li class="dropdown-header">Nav header</li>
  <li class="dropdown-submenu">
    <a tabindex="-1" href="#">More options</a>
    <ul class="dropdown-menu">
      <li><a tabindex="-1" href="#">Second level</a></li>
      <li class="dropdown-submenu">
        <a href="#">More..</a>
        <ul class="dropdown-menu">
        	<li><a href="#">3rd level</a></li>
        	<li><a href="#">3rd level</a></li>
        </ul>
      </li>
      <li><a href="#">Second level</a></li>
      <li><a href="#">Second level</a></li>
    </ul>
  </li>

              </ul>
            </li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=$site['root']?>/sample/cover">Login</a></li>
            <li <?php if($param['class']=='sample'&&$param['method']=='dashbord'):?>class="active"<?php endif?>><a href="<?=$site['root']?>/sample/dashbord">Dashboard</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<style>
</style>