<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div id="main-content" class="centered" style="background:none repeat #000000;color:#ffffff">
  <div id="context">
    <div id="art-title">
      <div id="label"></div>
      <div id="tiny-title">Ink Art Of</div>
      <div id="big-title">JIANG SHANQING</div>
    </div>
    <div class="navi">
      <ul>
      <?php foreach($navi as $key=>$item): ?>
        <?php if($key == 0) { ?>
        <li><a href="/"><?php echo $item?></a></li>
        <?php } else { ?>
        <li><a href="<?php echo '/cn/'.$navi_en[$key] ?>"><?php echo $item?></a></li>
        <?php } ?>
      <?php endforeach;?>
      </ul>
    </div>
  </div>  
</div>