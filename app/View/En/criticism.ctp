<div id="criticism-content" class="centered">
  <div id="criticism-context">
    <div id="crit-title" style="text-align:center;">
    <?php echo $cur_criticism['title']?>
    </div>
    <div id="crit-author" style="text-align:right;">
    <?php echo $cur_criticism['author']?>
    </div>
    <div id="crit-content">
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