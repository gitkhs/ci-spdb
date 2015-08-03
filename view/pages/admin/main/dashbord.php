<div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">
        
        <!--sidebar-->
        <div class="col-xs-6 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
          <div data-spy="affix" data-offset-top="45" data-offset-bottom="90" class="affix-top">
            <ul class="nav" id="sidebar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#section1">Section 1</a></li>
              <li><a href="#section2">Section 2</a></li>
              <li><a href="#section3">Section 3</a></li>
              <li><a href="#">Holo Theme</a></li>
            </ul>
           </div>
        </div><!--/sidebar-->
  	
        <!--/main-->
        <div class="col-xs-12 col-sm-10" data-spy="scroll" data-target="#sidebar-nav" style="background-color:#ffffff; min-height:500px;">
          <div class="row">
          content
          </div>
        </div>

      </div><!--/.row-->
    </div>
</div>
  
  
  
<script type='text/javascript'>
$(document).ready(function() {
	$('[data-toggle=offcanvas]').click(function() {
		$('.row-offcanvas').toggleClass('active');
	});

	$('.btn-toggle').click(function() {
		$(this).find('.btn').toggleClass('active').toggleClass('btn-default').toggleClass('btn-primary');
	});
});
</script>