<div id="resume-content" class="centered">
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
    <br clear=all>
  </div>  
  
    
  <!-- part2 -->
  <div id="resume-context-part2">
    <div id="resume-part2-title" class="resume-part2-title-cn"><?php echo $cur_resume['title2'] ?></div>
    <div id="resume-part2-content">
      <div style="float:left">
        <div><img src="/img/resume/resume_all.jpg"/></div>
      </div>
      <div style="float:left">
      <?php foreach ($blocks as $key => $block) { ?>
      <div class="resume-block">
      <div class="resume-block-text resume-block-text-cn">
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
      </div>
        <?php if($block['image']!="") { ?>
          <div class="resume-block-image"><img src="<?php echo $block['image'] ?>" /></div>
        <?php } ?>
      </div>
      <?php }  ?>
      </div>
      <br clear="all" />
    </div>
  </div>  

  <div id="resume-context-part3">
    <div id="book-title" style="text-align:center;margin-top:150px;margin-bottom:20px;font-size: 18px">出版书籍</div>
    <div id="resume-line1" class="resume-line">
      <div class="resume-book" style="position:relative;left:130px;">
        <div class="resume-book-img"><img src="/img/resume/<?php echo $cur_resume['books']['book'][0]['image'] ?>"></div>
        <div class="resume-book-title">|&nbsp;<?php echo $cur_resume['books']['book'][0]['title'] ?>&nbsp;|</div>
      </div>
      <div class="resume-book" style="position:relative;left:200px;">
        <div class="resume-book-img"><img src="/img/resume/<?php echo $cur_resume['books']['book'][1]['image'] ?>"></div>
        <div class="resume-book-title">|&nbsp;<?php echo $cur_resume['books']['book'][1]['title'] ?>&nbsp;|</div>
      </div>
      <br clear=all>
    </div>
    <div id="resume-line2" class="resume-line">
      <div class="resume-book" style="position:relative;left:115px;">
        <div class="resume-book-img"><img src="/img/resume/<?php echo $cur_resume['books']['book'][2]['image'] ?>"></div>
        <div class="resume-book-title">|&nbsp;<?php echo $cur_resume['books']['book'][2]['title'] ?>&nbsp;|</div>
      </div>
      <div class="resume-book" style="position:relative;left:170px;">
        <div class="resume-book-img"><img src="/img/resume/<?php echo $cur_resume['books']['book'][3]['image'] ?>"></div>
        <div class="resume-book-title">|&nbsp;<?php echo $cur_resume['books']['book'][3]['title'] ?>&nbsp;|</div>
      </div>
      <br clear=all>
    </div>
    <div id="resume-line3" class="resume-line">
      <div class="resume-book" style="position:relative;left:40px;">
        <div class="resume-book-img"><img src="/img/resume/<?php echo $cur_resume['books']['book'][4]['image'] ?>"></div>
        <div class="resume-book-title">|&nbsp;<?php echo $cur_resume['books']['book'][4]['title'] ?>&nbsp;|</div>
      </div>
      <div class="resume-book" style="position:relative;left:60px;">
        <div class="resume-book-img"><img src="/img/resume/<?php echo $cur_resume['books']['book'][5]['image'] ?>"></div>
        <div class="resume-book-title">|&nbsp;<?php echo $cur_resume['books']['book'][5]['title'] ?>&nbsp;|</div>
      </div>
      <div class="resume-book" style="position:relative;left:90px;">
        <div class="resume-book-img"><img src="/img/resume/<?php echo $cur_resume['books']['book'][6]['image'] ?>"></div>
        <div class="resume-book-title">|&nbsp;<?php echo $cur_resume['books']['book'][6]['title'] ?>&nbsp;|</div>
      </div>
      <div class="resume-book" style="position:relative;left:110px;">
        <div class="resume-book-img"><img src="/img/resume/<?php echo $cur_resume['books']['book'][7]['image'] ?>"></div>
        <div class="resume-book-title">|&nbsp;<?php echo $cur_resume['books']['book'][7]['title'] ?>&nbsp;|</div>
      </div>
      <br clear=all>
    </div>
    <div id="resume-line4" class="resume-line">
      <div class="resume-book" style="position:relative;left:40px;">
        <div class="resume-book-img"><img src="/img/resume/<?php echo $cur_resume['books']['book'][8]['image'] ?>"></div>
        <div class="resume-book-title">|&nbsp;<?php echo $cur_resume['books']['book'][8]['title'] ?>&nbsp;|</div>
      </div>
      <div class="resume-book" style="position:relative;left:60px;">
        <div class="resume-book-img"><img src="/img/resume/<?php echo $cur_resume['books']['book'][9]['image'] ?>"></div>
        <div class="resume-book-title">|&nbsp;<?php echo $cur_resume['books']['book'][9]['title'] ?>&nbsp;|</div>
      </div>
      <div class="resume-book" style="position:relative;left:80px;">
        <div class="resume-book-img"><img src="/img/resume/<?php echo $cur_resume['books']['book'][10]['image'] ?>"></div>
        <div class="resume-book-title">|&nbsp;<?php echo $cur_resume['books']['book'][10]['title'] ?>&nbsp;|</div>
      </div>
      <div class="resume-book" style="position:relative;left:100px;">
        <div class="resume-book-img"><img src="/img/resume/<?php echo $cur_resume['books']['book'][11]['image'] ?>"></div>
        <div class="resume-book-title">|&nbsp;<?php echo $cur_resume['books']['book'][11]['title'] ?>&nbsp;|</div>
      </div>
      <br clear=all>
    </div>
  </div>
</div>