
<div id="sidebar">
  <div id="sidebar-content">
    <div id="side-label"></div>
    <div id="sidebar-back"></div>
    <div id="sidebar-navi">
      <ul>
      <?php foreach($navi as $key=>$item): ?>
        <?php if($key == 0) { ?>
          <li style="width:60px;"><a href="/" class="li-a-other"><?php echo $item?></a></li>
        <?php } else if($key==2){ ?>
          <li><a id="li-a-works" href="javascript:void(0)" <?php if($navi_en[$key]==$cur_action) echo 'class="sidebar-selected"';?>><?php echo $item?></a></li>
        <?php }else{ ?>
          <li><a class="li-a-other" href="/<?php echo $cur_controller ?>/<?php echo $navi_en[$key] ?>" <?php if($navi_en[$key]==$cur_action) echo 'class="sidebar-selected"';?>><?php echo $item?></a></li>
        <?php } ?>
      <?php endforeach;?>
      </ul>
    </div>
    <div id="sidebar-works" style="display: none;">
      <ul>
          <li><a href="/<?php echo $cur_controller ?>/works?index=0&cat=1">布上水墨</a></li>
          <li><a href="/<?php echo $cur_controller ?>/works?index=0&cat=2">纸上水墨</a></li>
          <li><a href="/<?php echo $cur_controller ?>/works?index=0&cat=3">荷花</a></li>
          <li><a href="/<?php echo $cur_controller ?>/works?index=0&cat=4">瓶花</a></li>
          <li><a href="/<?php echo $cur_controller ?>/works?index=0&cat=5">书法</a></li>
      </ul>
    </div>
  </div>
</div>