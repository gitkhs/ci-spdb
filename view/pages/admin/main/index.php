<div class="container-full">
	<div class="row">
		<div class="col-lg-12 text-center v-center">
		<div id="loginbox" class="mainbox col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">                    
		<div class="panel panel-info" style="background-color:transparent; background:url(/images/base/rgba-fff5.png);">

			<div class="panel-heading">
			<div class="panel-title">Sign In</div>
			<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
			</div>     
		
			<div style="padding-top:30px" class="panel-body">
			<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

			<form id="loginform" class="form-horizontal" role="form">
				<label>
				<div style="margin-bottom: 25px" class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
				</div>
				</label>

				<label>
				<div style="margin-bottom: 25px" class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
				</div>
				</label>
	
				<div class="input-group">
				<div class="checkbox">
				<label>
				<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
				</label>
				</div>
				</div>
	
				<div style="margin-top:10px" class="form-group">
				<!-- Button -->
				<div class="col-sm-12 controls">
				<input type="button" class="form-control btn btn-primary" value="login" onclick="location.href='<?=$site['root']?>/admin/main/dashbord';">
				</div>
				</div>
			</form>     
			</div>

		</div>
		</div>
		</div>
	</div> <!-- /row -->

</div> <!-- /container full -->
