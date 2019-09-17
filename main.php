  <?php require_once("common/mainHeader.php"); ?> 

  <?php require_once("topMenu/topMenu.php"); ?> 
<div id="mainScreen">
	<div class="container" id="mainPage">

		<div id="cards" class="row pt-5 position-relative">

			

		</div>

		
		<p id="showCount" style="color:white;"></p>
		<div style="margin-auto; text-align:center;">
				<?php require_once("Dashboard/dashboard.php"); ?>
				<!--<canvas id="line-chart" width="500" height="100" style="width:50%; margin:auto;"></canvas>-->
			</div>

			
		<div class="modalBg"></div>
		<div class="modalSignOut">
			<h3>Do you want to Logout?</h3>
			<div>
				<button style="float:left;" onclick="endSession()">Confirm</button>
				<button style="float:right;" onclick="hideSignOutModal()">Cancel</button>
			</div>
		</div>

		<div style="width:100%; height:100px;">
			<div style = "text-align:right;">
				<span style="font-size:30px;">User: </span>
				<span id="loggedUser" style="font-size:20px;"></span>
			</div>

		</div>
	</div>
</div>
<script>
	setUserData(); 
	fillOpt();
</script>
  <?php require_once("common/footer.php"); ?> 
