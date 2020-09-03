<nav class="navbar navbar-default">
    <div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="">Video Meeting</a>
		</div>

		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Lobby</a></li>
		</ul>
		<?php 

		$sq=mysqli_query($conn,"select * from `user` where userid='".$_SESSION['id']."'");
		$srow=mysqli_fetch_array($sq);
		$user=$srow['username'];
	   
		$image_src = "../".$srow['photo'];

		$sq=mysqli_query($conn,"select * from `invites` where invite_to='".$user."'");
		$srow1=mysqli_fetch_array($sq);
		

		?>
		<ul class="nav navbar-nav navbar-right">
		<img width="50" height="50" src="<?php echo $image_src; ?>" class='rounded-circle'>
			
			<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?></a></li>
			<ul class="nav navbar-nav navbar-right">
    		
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li><a href="#photo" data-toggle="modal"><span class="glyphicon glyphicon-picture"></span> Update Photo</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
			</li>
		</ul>
    </div>
</nav>
