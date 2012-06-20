
<div id="sidebar">
  <div id="sidebar-content">
  
  
  <div id="side-label"></div>
  <div id="sidebar-navi">
    <ul>
    <?php foreach($navi as $key=>$item): ?>
      <?php if($key == 0) { ?>
        <li><a href="/"><?php echo $item?></a></li>
      <?php } else { ?>
        <li><a href="/<?php echo $cur_controller ?>/<?php echo $navi_en[$key] ?>" <?php if($navi_en[$key]==$cur_action) echo 'class="sidebar-selected"';?>><?php echo $item?></a></li>
      <?php } ?>
      
      
    <?php endforeach;?>
    </ul>
  </div>
  </div>
</div>