<div id="criticism-content" class="centered crit-cn-font">
  <div id="criticism-context">
    <div id="crit-title" style="text-align:center;" class="crit-cn-title-font">
    <?php echo $cur_criticism['title']?>
    </div>
    <?php if ($index!=2) { ?>
    <div id="crit-author" style="text-align:right;">
    <?php } else { ?>
    <div id="cn-crit-author" style="text-align:right; font-size: 18pt;  font-family: ''Hiragino Sans GB', 'Microsoft YaHei', 'WenQuanYi Micro Hei', sans-serif,黑体,SimHei,'Heiti SC';">      
    <?php } ?>
    <?php echo $cur_criticism['author']?>
    </div>
    <div id="crit-content" class="crit-cn-content-font">
    <?php echo $cur_criticism['content']?>
    </div>
  </div>
  <div id="normal-hor-bar">
    <div id="normal-index-hor"><?php echo sprintf("%03d", $index+1);?></div>
    <ul>
    <?php $i = 0;while($i < $total_page){ ?>
      <li><a href="<?php echo '?p='.$i?>"><div class="<?php if($index == $i) echo "cubic-l"; else echo "cubic";?>"></div></a></li>
    <?php $i++;} ?>
      <br clear=all >
    </ul> 
    <br clear=all >
  </div>
</div>