<div id="resume-content" class="centered">
  <!-- part1 -->
  <div id="resume-context">
    <div id="resume-head" <?php if(!empty($cur_resume['head'])){?>
         style="background: url('/img/resume/<?php echo $cur_resume['head']?>') no-repeat;
        <?php $size = getimagesize(WWW_ROOT."/img/resume/".$cur_resume['head']);  
        echo "width:".$size[0]."px;"."height:".$size[1]."px;"; ?>"<?php }?>></div>
    <div id="resume-right">
      <div id="resume-qianming"></div>
      <div id="resume-text-title"><?php echo $cur_resume['title'] ?></div>
      <div id="resume-text"><?php echo $cur_resume['intro']?></div>
    </div>
  </div>

  <!-- part2 -->
  <div id="resume-context-part2">
    <div id="resume-part2-title"><?php echo $cur_resume['title2'] ?></div>
    <div id="resume-part2-content">
      <div style="float:left">
        <div><img src="/img/resume/resume_all.jpg"/></div>
      </div>
      <div style="float:left">
      <?php foreach ($blocks as $key => $block) { ?>
      <div class="resume-block">
      <div class="resume-block-text">
        <?php $text =  $block['text'];
          if(mb_ereg("\/c(\w+)\/c", $text, $reg))
          {
            //echo $reg[1];
            $tmp = "&nbsp";
            if ($reg[1]>=10)
              $tmp = "";
            $replace_h = "&nbsp;<div style='padding-left:2px;display:inline-block;width:16px;height:15px;background:url(/img/resume/kuang.png) no-repeat;'>".$tmp.$reg[1]."</div>";
            $text = mb_ereg_replace("\/c\w+\/c",$replace_h,$text);
          }
          echo $text;
        ?>
      </div>        <?php if($block['image']!="") { ?>
          <div class="resume-block-image"><img src="<?php echo $block['image'] ?>" /></div>
        <?php } ?>
      </div>
      <?php }  ?>
      </div>
      <br clear="all" />
    </div>
    <br clear=all>
  </div>  

</div>