<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Ink Art of JIANG SHAN QING
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
  
  <?php if($cur_controller == 'cn'){?>
  <script src="/js/Book_Antiqua_400.font.js" type="text/javascript"></script> 
  <?php } ?>
  
  <?php if($cur_controller == 'fr'){?>
  <script src="/js/DINPro-Regular_400.font.js" type="text/javascript"></script> 
  <?php } ?>
  
  
  <?php if($cur_controller == 'en'){?>
  <script src="/js/Helvetica_LT_Std_700.font.js" type="text/javascript"></script> 
  <script src="/js/Bauer_Bodoni_Std_400.font.js" type="text/javascript"></script> 
  <script src="/js/Lucida_Sans_Unicode_400.font.js" type="text/javascript"></script> 
  <script src="/js/Book_Antiqua_400.font.js" type="text/javascript"></script> 
  <?php } ?>

  <script src="/js/jquery-1.7.2.min.js" type="text/javascript"></script> 
  <script src="/js/main.js" type="text/javascript"></script> 
  
  <script> 
    
    $(document).ready(function(){ 
      Cufon.replace("#tiny-title", {fontFamily : "Bembo Std", fontSize:"15px", color:"#000000"}); 
      Cufon.replace("#big-title", {fontFamily : "Bembo Std", fontSize:"30px", color:"#000000"}); 
      Cufon.replace("#foot-word", {fontFamily : "Bembo Std", fontSize:"14px", color:"#000000"}); 

      <?php if($cur_controller == 'cn'){?>
        Cufon.replace("#crit-author",{fontFamily : "Book Antiqua", fontSize:"20pt", color:"#000000"}); 
      <?php }?>

      <?php if($cur_controller == 'fr'){?>
        Cufon.replace("#sidebar-navi",{fontFamily : "DINPro-Regular", fontSize:"13pt", color:"#000000"}); 
      <?php }?>

      <?php if($cur_controller == 'en'){?>
        Cufon.replace("#sidebar-navi", {fontFamily : "Helvetica LT Std", fontSize:"13pt", color:"#000000"}); 
        Cufon.replace("#resume-text-title", {fontFamily : "Bauer Bodoni Std", fontSize:"14px", color:"#000000"}); 
        
        Cufon.replace("#crit-title",{fontFamily : "Lucida Sans Unicode", fontSize:"25pt", color:"#000000"}); 
        Cufon.replace("#crit-author",{fontFamily : "Book Antiqua", fontSize:"20pt", color:"#000000"}); 
        Cufon.replace("#crit-content",{fontFamily : "Lucida Sans Unicode", fontSize:"12pt", color:"#000000"}); 
      <?php }?>

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
<body style="overflow-x: hidden;min-width:600px;">
	<div id="container">
		<div id="header">
		</div>
		<div id="main">
			<?php echo $this->fetch('content'); ?>
      <br clear="all" />
		</div>
	</div>
</body>
</html>
