  <?php require_once("common/header.php"); ?> 

  <div style="width:100%; height:100px;">
    <div style = "text-align:right;">
      <span style="font-size:30px;">User: </span>
      <select id="selectedUser" style="font-size:20px;">
        <option value="Noob">Noob</option>
      </select>
    </div>
    <div style="margin-auto; text-align:center;">
      <h1>Counter App!</h1>
      <p id="showCount"></p>

      <div style="margin-bottom:20px;">
        <div style="display:inline-block; margin-right:20px;">
          <span>Category: </span>
          <select name="category" id="category">
            <option id="insertOpt" value="insertOpt" onclick="insertOpt('category')">New</option>
          </select>
        </div>

        <div style="display:inline-block">
          <span>Subject: </span>
          <select name="subject" id="subject">
            <option value="insertOpt" onclick="insertOpt('subject')">New</option>
          </select>
        </div>
      </div>

      <button id="countBtn" onclick="startCounting()">Start Counting</button>
      <button id="countSave" onclick="saveCounting()">Save Counting</button>
    </div>
  </div>

  <?php require_once("common/footer.php"); ?> 