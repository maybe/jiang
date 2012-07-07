<div id="criticism-content" class="centered">
  <?php foreach ($criticisms as $key => $cur_criticism) { ?>
  <div class="criticism-context">
    <div class="crit-title" style="text-align:center;">
    <?php echo $cur_criticism['title']?>
    </div>
    <div class="crit-author" style="text-align:right;">
    <?php echo $cur_criticism['author']?>
    </div>
    <div class="crit-content">
    <?php echo $cur_criticism['content']?>
    </div>
  </div>
  <?php } ?>
</div>