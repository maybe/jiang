<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
      <?php 
        if($cur_controller == 'en')
        {
          echo "Ink Art of JIANG SHAN QING";
        }
        else if ($cur_controller == 'cn') 
        {
          echo "蒋山青 水墨艺术";          
        }
        else if ($cur_controller == 'fr') 
        {
          echo "Ink Art of JIANG SHAN QING";          
        }
      ?>
    
	</title>
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
  <link href="/img/favicon.ico" type="image/x-icon" rel="icon" />
  <link href="/img/favicon.ico" type="image/x-icon" rel="shortcut icon" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <script src="/js/cufon-yui.js" type="text/javascript"></script> 
  <script src="/js/Bembo_Std_400.font.js" type="text/javascript"></script> 
  <script src="/js/jquery-1.7.2.min.js" type="text/javascript"></script> 
  
  <script> 
    $(document).ready(function(){ 
      Cufon.replace("#tiny-title", {fontFamily : "Bembo Std", fontSize:"15px", color:"#000000"}); 
      Cufon.replace("#big-title", {fontFamily : "Bembo Std", fontSize:"30px", color:"#000000"}); 

      $("#art").mouseout(function(){  
        $(this).css("cursor","normal");
        Cufon.replace("#art-title", {fontFamily : "Bembo Std", fontSize:"30px", color:"#10aaff"}); 
      });  
      $("#art").mouseover(function(){  
        $(this).css("cursor","pointer");
        Cufon.replace("#art", {fontFamily : "Bembo Std", fontSize:"30px", color:"#ffaaff"}); 
      });  
    });    
  </script> 
</head>
<body>
	<div id="container">
		<div id="header">
		</div>
		<div id="main">
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>
