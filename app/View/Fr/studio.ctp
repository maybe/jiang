<div id="studio-content" class="centered" style="<?php 
    $size = getimagesize(WWW_ROOT."/img/studio/".$studio[$index]); echo "height:".($size[1]+100)."px;margin-left:-".($size[0]+200>950?$size[0]/2+50:400)."px;padding-bottom:50px;margin-top:-".($size[1]/2+50)."px;position:absolute;top:50%;left:50%;width:".($size[0]+200>950?$size[0]+200:950)."px;"; ?>">
  <div id="img-context">
  <?php 
    $size = getimagesize(WWW_ROOT."/img/studio/".$studio[$index]);
    if ($size[0]<$size[1]){ ?>
    <div id="vert-frame" style="position:relative;left:<?php $per = 0.5 - (float)($size[0]+20)/(float)2/(float)(950.0); echo ($per*100)."%"?>">
    <div id="vert-bar">
      <div id="vert-index"><?php echo sprintf("%03d", $index+1);?></div>
      <ul>
      <?php foreach($studio as $key=>$item): ?>
        <li img-source="/img/studio/thumbs/<?php echo $item ?>"><a href="<?php echo '?index='.$key ?>"><div class="<?php if($index == $key) echo "cubic-l"; else echo "cubic";?>"></div></a></li>
      <?php endforeach;?>
      </ul>  
      <div id="thumb"><img src="" /></div>
    </div>
    <div id="show-frame" class="vert-img"><img src="<?php echo "/img/studio/".$studio[$index] ?>"></div>
    <div id="left-arrow" next="<?php echo $index==0?"":"/fr/studio?index=".($index-1) ?>"></div>
    <div id="right-arrow" next="<?php echo $index==count($studio)-1?"":"/fr/studio?index=".($index+1) ?>"></div>
    </div>
  <?php } else {?>
    <div id="show-frame"><img src="<?php echo "/img/studio/".$studio[$index] ?>"></div>
    <div id="left-arrow" next="<?php echo $index==0?"":"/fr/studio?index=".($index-1) ?>"></div>
    <div id="right-arrow" next="<?php echo $index==count($studio)-1?"":"/fr/studio?index=".($index+1) ?>"></div>
    <div id="hor-bar" style=" width:<?php $size = getimagesize(WWW_ROOT."/img/studio/".$studio[$index]); echo $size[0]; ?>px;">
      <div id="hor-index"><?php echo sprintf("%03d", $index+1);?></div>
      <ul>
      <?php foreach($studio as $key=>$item): ?>
        <li img-source="/img/studio/thumbs/<?php echo $item ?>"><a href="<?php echo '?index='.$key ?>"><div class="<?php if($index == $key) echo "cubic-l"; else echo "cubic";?>"></div></a></li>
      <?php endforeach;?>
        <br clear=all >
      </ul> 
      <br clear=all >
      <div id="thumb"><img src="" /></div>
    </div>
  <?php } ?>
  </div>  
</div>