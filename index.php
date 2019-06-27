<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <?php require_once("common/connectDB.php"); ?> 

  <div style="width:100%; height:100px;">
    <div style = "text-align:right;">
      <span style="font-size:30px;">User: </span>
      <select id="selectedUser" style="font-size:20px;">
        <option value="lurb3">lurb3</option>
        <option value="chyph">chyph</option>
        <option value="zipityarr">zipityarr</option>
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
            <option value="insertOpt" onclick="insertOpt('category')">New Thing&hellip;</option>
          </select>
        </div>

        <div style="display:inline-block">
          <span>Subject: </span>
          <select name="subject" id="subject">
            <option value="insertOpt" onclick="insertOpt('subject')">New Thing&hellip;</option>
          </select>
        </div>
      </div>

      <button id="countBtn" onclick="startCounting()">Start Counting</button>
      <button id="countSave" onclick="saveCounting()">Save Counting</button>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="js/Count.js"></script>

</body>

</html>