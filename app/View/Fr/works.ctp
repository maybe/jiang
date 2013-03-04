<div id="works-content" class="centered" style="<?php 
    $size = getimagesize(WWW_ROOT."/img/works/".$works[$index]); echo "height:".($size[1]+100)."px;margin-left:-".($size[0]+200>950?$size[0]/2+50:400)."px;padding-bottom:50px;margin-top:-".($size[1]/2+50)."px;position:absolute;top:50%;left:50%;width:".($size[0]+200>950?$size[0]+200:950)."px;"; ?>">
  <div id="img-context">
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
    <div id="left-arrow" next="<?php echo $index==0?"":"/fr/works?index=".($index-1)."&cat=".$cat ?>"></div>
    <div id="right-arrow" next="<?php echo $index==count($works)-1?"":"/fr/works?index=".($index+1)."&cat=".$cat ?>"></div>
    <div id="hor-bar-works" style="width:<?php echo sizeof($works)*28 + (strlen($catname)/2-1)*20; ?>px;">
      <div id="hor-index-works"><?php echo $catname;?></div>
      <ul>
      <?php foreach($works as $key=>$item): ?>
        <li><a <?php if($key==$index) echo "class='hor-bar-works-select'"?>  href="<?php echo '?index='.$key."&cat=".$cat ?>"><?php echo sprintf("%s%d", $cat_zimu,$key+1);?></a></li>
      <?php endforeach;?>
        <br clear=all >
      </ul> 
      <br clear=all >
      <div id="thumb"><img src="" /></div>
    </div>
  </div>  
</div>