  function doSomething() {
      frame_top = $("#works-content").offset().top;
      alert(frame_top + " " + $(window).height());
      
      if (frame_top<-50)
      {
        margin = $("#works-content").css("margin-top");
        margin = -parseInt(margin)-50;
        $("#works-content").css("top", margin.toString()+"px");
      }
      else
      {
        $("#works-content").css("top","50%");
      }     
    
//    frame_left = $("#works-content").offset().left;
//    if(frame_left < 220)
//    {
//      margin = $("#works-content").css("margin-left");
//      margin = -parseInt(margin)+300;
//      $("#works-content").css("left", margin.toString()+"px");
//    }
//    else
//    {
//      $("#works-content").css("left","50%");
//    }
  }

$(document).ready(function(){ 
  
  var timer_left;
  var timer_right;
  var timer_thumb;
  
  $("#hor-bar li").mouseout(function(){
    $("#thumb").css("display","none");
  });
  
  $("#hor-bar li").mouseover(function(){
    if (timer_thumb) {
      clearTimeout(timer_thumb);
      timer_thumb = 0;
    }
    
      var img_url = $(this).attr('img-source');
      var li_left = $(this).position().left;  

    timer_thumb = setTimeout(function() {
   

      var thumb_img = new Image();
      $(thumb_img).load(function(){		
        $("#thumb img").attr("src", img_url);

        img_height = thumb_img.height;
        img_width = thumb_img.width;

        $("#thumb").css("top", -img_height);
        $("#thumb").css("left", li_left+3-img_width/2);

        $("#thumb").fadeIn();
      
    }).attr("src", img_url); 
    }, 500)  
  });
    
  $("#hor-bar").mouseout(function(){
    if (timer_thumb) {
      clearTimeout(timer_thumb);
      timer_thumb = 0;
    }
    $("#thumb").css("display","none");
  });  
  
        
  $("#vert-bar li").mouseout(function(){
  $("#thumb").css("display","none");
  });
  
  $("#vert-bar li").mouseover(function(){
    if (timer_thumb) {
      clearTimeout(timer_thumb);
      timer_thumb = 0;
    }
    
    var img_url = $(this).attr('img-source');
    var li_top = $(this).position().top;
    
    timer_thumb = setTimeout(function() {    


      var thumb_img = new Image();
      $(thumb_img).load(function(){		
        $("#thumb img").attr("src", img_url);

        img_height = thumb_img.height;
        img_width = thumb_img.width;
        
        bar_right = $("#vert-bar").position().left + $("#vert-bar").width();

        $("#thumb").css("left", bar_right);
        $("#thumb").css("top", li_top+3-img_height/2);

        $("#thumb").fadeIn();

      }).attr("src", img_url); 
    }, 500)
  });
    
  $("#vert-bar").mouseout(function(){
      if (timer_thumb) {
        clearTimeout(timer_thumb);
        timer_thumb = 0;
      }
    $("#thumb").css("display","none");
  });  
  
  
  $("#show-frame img").mousemove(function(e) {
    
    var cur_mouse_x = e.originalEvent.layerX ||e.originalEvent.x|| 0;
    var cur_mouse_y = e.originalEvent.layerY||e.originalEvent.y || 0;
    
    frame_left = $(this).position().left;
    frame_top = $(this).position().top;
    
    frame_width = $(this).width();
    frame_height = $(this).height();
    
    var element_left;
    var element_right;
    element_left = $("#left-arrow");
    element_right = $("#right-arrow");
    
    if(cur_mouse_x<frame_left + frame_width/2)
    {
      var url = element_left.attr("next");
      if(url!="")
      {
        if (timer_left) {
          clearTimeout(timer_left);
          timer_left = 0;
        }

        element_right.fadeOut();

        element_left.css("left", frame_left+20);
        element_left.css("top", frame_top+frame_height/2-30);
        element_left.css("cursor","pointer");

        element_left.fadeIn();
        timer_left = setTimeout(function() {
          element_left.fadeOut()
        }, 2000)        
      }
    }
    else
    {
      var rurl = element_right.attr("next");
      if(rurl!="")
      {
        if (timer_right) {
          clearTimeout(timer_right);
          timer_right = 0;
        }

        element_left.fadeOut();      

        element_right.css("left", frame_left+frame_width-50);
        element_right.css("top", frame_top+frame_height/2-30);
        element_right.css("cursor","pointer");

        element_right.fadeIn();
        timer_right = setTimeout(function() {
          element_right.fadeOut()
        }, 2000)
      } 
    }
	});
  
  $("#show-frame img").mouseleave(function(e) {
    var cur_mouse_x =  e.pageX || 0;
    var cur_mouse_y =  e.pageY || 0;
        
    frame_left = $(this).offset().left;
    frame_top = $(this).offset().top;
    
    frame_width = $(this).width();
    frame_height = $(this).height();
    if(cur_mouse_x<frame_left||cur_mouse_y<frame_top||cur_mouse_x>frame_left+frame_width||cur_mouse_y>frame_top+frame_height)
    {
      $("#left-arrow").fadeOut();
      $("#right-arrow").fadeOut();
    }
  });
  
  $("#left-arrow").click(function(){
    var url = $(this).attr("next");
    if (url!="")
      window.location = url;
  });
  
  $("#right-arrow").click(function(){
   var url = $(this).attr("next");
   if (url!="")
      window.location = url;
  });
  
//  var resizeTimer;
//  $(window).resize(function() {
//    clearTimeout(resizeTimer);
//    resizeTimer = setTimeout(doSomething, 1000);
//});  
});