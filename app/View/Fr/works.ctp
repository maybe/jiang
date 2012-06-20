<div id="works-content" class="centered" style="<?php 
    $size = getimagesize(WWW_ROOT."/img/works/".$works[$index]); echo "height:".($size[1]+100)."px;margin-left:-400px;padding-bottom:80px;margin-top:-".($size[1]/2+50)."px;position:absolute;top:50%;left:50%;"; ?>">
  <div id="img-context">
  <?php 
    $size = getimagesize(WWW_ROOT."/img/works/".$works[$index]);
    if ($size[0]<$size[1]){ ?>
    <div id="vert-frame" style="position:absolute;left:<?php $per = 0.5 - (float)($size[0]+20)/(float)2/(float)(950.0); echo ($per*100)."%"?>">
    <div id="vert-bar"  style="width:32px;">
      <div id="vert-index"><?php echo sprintf("%03d", $index+1);?></div>
      <ul style="float:left;height:<?php echo ($size[1]-30)."px;" ?>" >
      <?php foreach($works as $key=>$item): ?>
        <?php if($key>=100) {?>
        <li img-source="/img/works/thumbs/<?php echo $item ?>"><a href="<?php echo '?index='.$key ?>"><div class="<?php if($index == $key) echo "cubic-l"; else echo "cubic";?>"></div></a></li>
        <?php } ?>
      <?php endforeach;?>
      </ul>  
      <ul style="float:left;height:<?php echo ($size[1]-30)."px;" ?>" >
      <?php foreach($works as $key=>$item): ?>
        <?php if($key>=50&&$key<100) {?>
        <li img-source="/img/works/thumbs/<?php echo $item ?>"><a href="<?php echo '?index='.$key ?>"><div class="<?php if($index == $key) echo "cubic-l"; else echo "cubic";?>"></div></a></li>
        <?php } ?>
      <?php endforeach;?>
      </ul>  
      <ul style="float:left;height:<?php echo ($size[1]-30)."px;" ?>" >
      <?php foreach($works as $key=>$item): ?>
        <?php if($key<50) {?>
        <li img-source="/img/works/thumbs/<?php echo $item ?>"><a href="<?php echo '?index='.$key ?>"><div class="<?php if($index == $key) echo "cubic-l"; else echo "cubic";?>"></div></a></li>
        <?php } ?>
      <?php endforeach;?>
      </ul>  
      <br clear="all">

      <div id="thumb"><img src="" /></div>
    </div>
    <div id="show-frame" class="vert-img" style="index:1000;"><img src="<?php echo "/img/works/".$works[$index] ?>">
    
      <?php if(substr($works[$index],0,1) == "f" ) { ?>
        <div id="img-intro" style="position: absolute;width:50px;height:200px;background: url('/img/works/flower.png') no-repeat;left:<?php $size = getimagesize(WWW_ROOT."/img/works/".$works[$index]); echo ($size[0]+50)."px;top:".($size[1]-200)."px;" ?>"></div>
      <?php }?>
      <?php if(substr($works[$index],0,1) == "h" ) { ?>
        <div id="img-intro" style="position: absolute;width:50px;height:110px;background: url('/img/works/lotus.png') no-repeat;left:<?php $size = getimagesize(WWW_ROOT."/img/works/".$works[$index]); echo ($size[0]+50)."px;top:".($size[1]-110)."px;" ?>"></div>
      <?php }?>
      <?php if(substr($works[$index],0,1) == "c" ) { ?>
        <div id="img-intro" style="position: absolute;width:50px;height:100px;background: url('/img/works/china.png') no-repeat;left:<?php $size = getimagesize(WWW_ROOT."/img/works/".$works[$index]); echo ($size[0]+50)."px;top:".($size[1]-100)."px;" ?>"></div>
      <?php }?>
      <?php if(substr($works[$index],0,1) == "w" ) { ?>
        <div id="img-intro" style="position: absolute;width:50px;height:200px;background: url('/img/works/inkart.png') no-repeat;left:<?php $size = getimagesize(WWW_ROOT."/img/works/".$works[$index]); echo ($size[0]+50)."px;top:".($size[1]-200)."px;" ?>"></div>      
      <?php }?>
    
    </div>
    <div id="left-arrow" next="<?php echo $index==0?"":"/fr/works?index=".($index-1) ?>"></div>
    <div id="right-arrow" next="<?php echo $index==count($works)-1?"":"/fr/works?index=".($index+1) ?>"></div>
    </div>
  <?php } else {?>
    <div id="show-frame"><img src="<?php echo "/img/works/".$works[$index] ?>">
      <?php if(substr($works[$index],0,1) == "f" ) { ?>
        <div id="img-intro" style="position: absolute;width:50px;height:200px;background: url('/img/works/flower.png') no-repeat;left:<?php $size = getimagesize(WWW_ROOT."/img/works/".$works[$index]); echo (950/2 + $size[0]/2)."px;top:".($size[1]-200)."px;" ?>"></div>
      <?php }?>
      <?php if(substr($works[$index],0,1) == "h" ) { ?>
        <div id="img-intro" style="position: absolute;width:50px;height:110px;background: url('/img/works/lotus.png') no-repeat;left:<?php $size = getimagesize(WWW_ROOT."/img/works/".$works[$index]); echo (950/2 + $size[0]/2)."px;top:".($size[1]-110)."px;" ?>"></div>
      <?php }?>
      <?php if(substr($works[$index],0,1) == "c" ) { ?>
        <div id="img-intro" style="position: absolute;width:50px;height:100px;background: url('/img/works/china.png') no-repeat;left:<?php $size = getimagesize(WWW_ROOT."/img/works/".$works[$index]); echo (950/2 + $size[0]/2)."px;top:".($size[1]-100)."px;" ?>"></div>      
      <?php }?>
      <?php if(substr($works[$index],0,1) == "w" ) { ?>
        <div id="img-intro" style="position: absolute;width:50px;height:200px;background: url('/img/works/inkart.png') no-repeat;left:<?php $size = getimagesize(WWW_ROOT."/img/works/".$works[$index]); echo (950/2 + $size[0]/2)."px;top:".($size[1]-200)."px;" ?>"></div>      
      <?php }?>
    </div>
    <div id="left-arrow" next="<?php echo $index==0?"":"/fr/works?index=".($index-1) ?>"></div>
    <div id="right-arrow" next="<?php echo $index==count($works)-1?"":"/fr/works?index=".($index+1) ?>"></div>
    <div id="hor-bar" style=" width:<?php $size = getimagesize(WWW_ROOT."/img/works/".$works[$index]); echo $size[0]; ?>px;">
      <div id="hor-index"><?php echo sprintf("%03d", $index+1);?></div>
      <ul style="width:<?php echo ($size[0]-80)."px" ?>">
      <?php foreach($works as $key=>$item): ?>
        <li img-source="/img/works/thumbs/<?php echo $item ?>"><a href="<?php echo '?index='.$key ?>"><div class="<?php if($index == $key) echo "cubic-l"; else echo "cubic";?>"></div></a></li>
      <?php endforeach;?>
        <br clear=all >
      </ul> 
      <br clear=all >
      <div id="thumb"><img src="" /></div>
    </div>
  <?php } ?>
  </div>  
</div>