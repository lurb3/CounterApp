  <?php require_once("common/header.php"); ?> 

  <div id="mainScreen">

    <button class="signOut" onclick="showSignOutModal()">Sign Out</button>

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

      <div style="margin-auto; text-align:center;">

        <?php require_once("Dashboard/dashboard.php"); ?>


    <canvas id="line-chart" width="500" height="100" style="width:50%; margin:auto;"></canvas>

        <h1>Start counting your work</h1>
        <p id="showCount"></p>

        <div style="margin-bottom:20px;">
          <div style="display:inline-block; margin-right:20px;">
            <span>categories: </span>
            <select name="categories" id="categories">
              <option id="insertOpt" value="insertOpt" onclick="insertOpt('categories')">New</option>
            </select>
          </div>

          <div style="display:inline-block">
            <span>Subject: </span>
            <select name="subjects" id="subjects">
              <option value="insertOpt" onclick="insertOpt('subjects')">New</option>
            </select>
          </div>
        </div>

        <button id="countBtn" onclick="startCounting()">Start Counting</button>
        <button id="countSave" onclick="saveCounting()">Save Counting</button>
      </div>
    </div>
  </div>
  <?php require_once("common/footer.php"); ?> 
