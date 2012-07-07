<div id="criticism-content" class="centered crit-cn-font">
  <?php foreach ($criticisms as $key => $cur_criticism) { ?>
  <div class="criticism-context">
    <div class="crit-title crit-cn-title-font" style="text-align:center;">
    <?php echo $cur_criticism['title']?>
    </div>
    <?php if ($key!=2) { ?>
    <div class="crit-author" style="text-align:right;">
    <?php } else { ?>
    <div class="cn-crit-author" style="text-align:right; font-size: 18pt;  font-family: ''Hiragino Sans GB', 'Microsoft YaHei', 'WenQuanYi Micro Hei', sans-serif,黑体,SimHei,'Heiti SC';">      
    <?php } ?>
    <?php echo $cur_criticism['author']?>
    </div>
    <div class="crit-content crit-cn-content-font">
    <?php echo $cur_criticism['content']?>
    </div>
  </div>
  <?php } ?>
</div>