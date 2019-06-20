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
    <div style="margin-auto; text-align:center;">
      <h1>Counter App!</h1>
      <p id="showCount"></p>
      <button id="countBtn" onclick="startCounting()">Start Counting</button>
      <button id="countSave" onclick="saveCounting()">Save Counting</button>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="js/Count.js"></script>

</body>

</html>