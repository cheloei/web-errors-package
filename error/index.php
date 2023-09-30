<?php
$settings = json_decode(file_get_contents("config.json"), true);
if(!empty($_GET['e']) && !empty($settings['errors']['error-'.$_GET['e']])){
  $message = $settings['errors']['error-'.$_GET['e']][$settings['public']['lang']];
}else{
  header("location:".$settings['public']['home']);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?=$message?></title>
  <link rel="shortcut icon" href="<?=$settings['public']['icon']?>" type="image/x-icon">
  <link rel="stylesheet" href="error-page-style.css">
</head>
<body> 
<div class="content">
  <canvas class="snow" id="snow"></canvas>
  <div class="main-text">
  <h1><?=$message?></h1><a class="home-link" href="<?=$settings['public']['home']?>"><?=$settings['public']['return-home-'.$settings['public']['lang']]?></a>
  </div>
  <div class="ground">
    <div class="mound"> 
      <div class="mound_text"><?=$_GET['e']?></div>
      <div class="mound_spade"></div>
    </div>
  </div>
</div>
<script src="error-page-scriptes.js"></script>
</body>
</html>