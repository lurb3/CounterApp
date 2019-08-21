  <?php require_once("common/header.php"); ?> 

<div id="mainScreen">

  	<div style="width:100%; min-height:80px; background-color:white; position:relative;">
  		<div style="position:absolute; top:50%; transform:translateY(-50%); width:100%;">
			<img style="max-width:120px; margin-left:10px; position:absolute; top:50%; transform:translateY(-50%);" src="images/logo.png"/>
			<div style="text-align:center;">

				<div style="display:inline-block; margin-right:20px;">
					<h3 style="display:inline-block;">Categories</h3>
					<select name="categories" id="categories">
						<option id="insertOpt" value="insertOpt" onclick="insertOpt('categories')">New</option>
					</select>
				</div>

  				<div style="display:inline-block; margin-right:20px;">
					<h3 style="display:inline-block;">Subject</h3>
					<select name="subjects" id="subjects" style="display:inline-block;">
						<option value="insertOpt" onclick="insertOpt('subjects')">New</option>
					</select>
				</div>

				<div style="display:inline-block; text-align:center;  margin-right:20px;">
  					<span style="font-size:17px; font-weight:bold; color:white; background-color:#2A7147; padding:9px 10px 6px 10px;">+</span><span  id="countBtn" onclick="startCounting()" style="font-size:17px; font-weight:bold; color:white; background-color:#4FB77A; padding:9px 10px 6px 10px;">Start Counting</span>
				</div>
				
				<div style="display:inline-block; text-align:center;">
					<span  id="countSave" onclick="saveCounting()" style="font-size:17px; font-weight:bold; color:white; background-color:#2476CA; padding:9px 10px 6px 10px;">Save</span>
				</div>

			</div>
			<span class="signOut" onclick="showSignOutModal()" style="max-width:120px; margin-right:10px; position:absolute; top:50%; transform:translateY(-50%); right:0; font-size:17px; font-weight:bold; color:#D03948">Logout</span>
		</div>
	</div>

	<div style="margin-left:15%; margin-right:15%;">

  		<h3 style="color:white; border-bottom:1px solid white; padding-bottom:5px; margin-bottom:10px;">Subjects</h3>

		  <div style="background-color:white; width:20%; padding-left:20px; padding-right:20px; padding-bottom:20px; display:inline-block; margin-right:10px;">
  			<h3 style="padding:3px 0px 3px 0px; border-bottom:1px solid grey; margin:0;">Javascript</h3>
			  <span style="display:block;font-size:14px;">Start: 15/08/19</span>
			  <span style="display:block; margin-top:10px; font-weight:900; color:#4FB77A; font-size:18px;">August: 2 <span style="font-size:13px">hours/week  &#x2191;</span></span>
			  <span style="display:block; margin-top:10px; font-weight:700; color:#2C2E32; font-size:18px;">Average 1 <span style="font-size:13px">hour/week</span></span>
			  <span style="display:block; margin-top:10px; font-weight:700; color:#2C2E32; font-size:18px;">Total 10 <span style="font-size:13px">hours</span></span>
			  <div style="margin-top:20px; text-align:right;">
			  	<span style="font-size:17px; font-weight:bold; color:white; background-color:#2A7147; padding:9px 10px 6px 10px;">+</span><span  id="countBtn" onclick="startCounting()" style="font-size:17px; font-weight:bold; color:white; background-color:#4FB77A; padding:9px 10px 6px 10px;">Start Counting</span>
			</div>
		  </div>

		  <div style="background-color:white; width:20%; padding-left:20px; padding-right:20px; padding-bottom:20px; display:inline-block; margin-right:10px;">
  			<h3 style="padding:3px 0px 3px 0px; border-bottom:1px solid grey; margin:0;">Reading</h3>
			  <span style="display:block;font-size:14px;">Start: 15/08/19</span>
			  <span style="display:block; margin-top:10px; font-weight:900; color:#D03948; font-size:18px;">August: 2 <span style="font-size:13px">hours/week &#x2193;</span></span>
			  <span style="display:block; margin-top:10px; font-weight:700; color:#2C2E32; font-size:18px;">Average 1 <span style="font-size:13px">hour/week</span></span>
			  <span style="display:block; margin-top:10px; font-weight:700; color:#2C2E32; font-size:18px;">Total 10 <span style="font-size:13px">hours</span></span>
			  <div style="margin-top:20px; text-align:right;">
			  	<span style="font-size:17px; font-weight:bold; color:white; background-color:#2A7147; padding:9px 10px 6px 10px;">+</span><span  id="countBtn" onclick="startCounting()" style="font-size:17px; font-weight:bold; color:white; background-color:#4FB77A; padding:9px 10px 6px 10px;">Start Counting</span>
			</div>
		  </div>

		  <div style="background-color:white; width:20%; padding-left:20px; padding-right:20px; padding-bottom:20px; display:inline-block; margin-right:10px;">
  			<h3 style="padding:3px 0px 3px 0px; border-bottom:1px solid grey; margin:0;">Gardening</h3>
			  <span style="display:block;font-size:14px;">Start: 15/08/19</span>
			  <span style="display:block; margin-top:10px; font-weight:900; color:#D03948; font-size:18px;">August: 2 <span style="font-size:13px">hours/week &#x2193;</span></span>
			  <span style="display:block; margin-top:10px; font-weight:700; color:#2C2E32; font-size:18px;">Average 1 <span style="font-size:13px">hour/week</span></span>
			  <span style="display:block; margin-top:10px; font-weight:700; color:#2C2E32; font-size:18px;">Total 10 <span style="font-size:13px">hours</span></span>
			  <div style="margin-top:20px; text-align:right;">
			  	<span style="font-size:17px; font-weight:bold; color:white; background-color:#2A7147; padding:9px 10px 6px 10px;">+</span><span  id="countBtn" onclick="startCounting()" style="font-size:17px; font-weight:bold; color:white; background-color:#4FB77A; padding:9px 10px 6px 10px;">Start Counting</span>
			</div>
		  </div>

		  <div style="background-color:white; width:20%; padding-left:20px; padding-right:20px; padding-bottom:20px; display:inline-block; margin-right:10px;">
  			<h3 style="padding:3px 0px 3px 0px; border-bottom:1px solid grey; margin:0;">PHP</h3>
			  <span style="display:block;font-size:14px;">Start: 15/08/19</span>
			  <span style="display:block; margin-top:10px; font-weight:900; color:#4FB77A; font-size:18px;">August: 2 <span style="font-size:13px">hours/week  &#x2191;</span></span>
			  <span style="display:block; margin-top:10px; font-weight:700; color:#2C2E32; font-size:18px;">Average 1 <span style="font-size:13px">hour/week</span></span>
			  <span style="display:block; margin-top:10px; font-weight:700; color:#2C2E32; font-size:18px;">Total 10 <span style="font-size:13px">hours</span></span>
			  <div style="margin-top:20px; text-align:right;">
			  	<span style="font-size:17px; font-weight:bold; color:white; background-color:#2A7147; padding:9px 10px 6px 10px;">+</span><span  id="countBtn" onclick="startCounting()" style="font-size:17px; font-weight:bold; color:white; background-color:#4FB77A; padding:9px 10px 6px 10px;">Start Counting</span>
			</div>
		  </div>

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
<script>
	setUserData(); 
	fillOpt();
</script>
  <?php require_once("common/footer.php"); ?> 
