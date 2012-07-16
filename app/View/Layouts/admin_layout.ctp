<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Admin - Ink Art of JIANG SHAN QING
	</title>
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
  <link href="/img/favicon.ico" type="image/x-icon" rel="icon" />
  <link href="/img/favicon.ico" type="image/x-icon" rel="shortcut icon" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/css/ajaxfileupload.css" />
  <script src="/js/ajaxfileupload.js" type="text/javascript"></script> 
  <script src="/js/jquery-1.7.2.min.js" type="text/javascript"></script> 
  
  <script> 
    $(document).ready(function(){ 
      
      var str = '';
      for(i=0;i<10;i++)
      {
        str += '<option value='+(i+1)+'>Image'+(i+1)+'</option>';
      }
      $('#item').html(str);      
            
      $('#category').change(function(){
        var cat_index = $(this).children('option:selected').val();
        if(cat_index == 1)
        {
          var str = '';
          for(i=0;i<10;i++)
          {
            str += '<option value='+i+'>Image'+(i+1)+'</option>';
          }
          $('#item').html(str);
        }
        else if(cat_index == 2)
        {
          var str = '';
          for(i=0;i<10;i++)
          {
            str += '<option value='+(i+1)+'>Image'+(i+1)+'</option>';
          }
          $('#item').html(str);
        }
        else if(cat_index == 3)
        {
          var str = '';
          for(i=0;i<5;i++)
          {
            str += '<option value='+(i+1)+'>Image'+(i+1)+'</option>';
          }
          $('#item').html(str);
        }
        else if(cat_index == 4)
        {
          var str = '';
          for(i=0;i<5;i++)
          {
            str += '<option value='+(i+1)+'>Image'+(i+1)+'</option>';
          }
          $('#item').html(str);
        }
        else if(cat_index == 5)
        {
          var str = '';
          for(i=0;i<10;i++)
          {
            str += '<option value='+(i+1)+'>Image'+(i+1)+'</option>';
          }
          $('#item').html(str);
        }
        
        //alert($(this).children('option:selected').val());  //弹出select的值
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
