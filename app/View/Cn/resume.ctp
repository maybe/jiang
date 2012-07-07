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
      <?php foreach ($blocks as $key => $block) { ?>
      <div class="resume-block">
      <div class="resume-block-text resume-block-text-cn"><?php echo $block['text'] ?></div>
        <?php if($block['image']!="") { ?>
          <div class="resume-block-image"><img src="<?php echo $block['image'] ?>" /></div>
        <?php } ?>
      </div>
      <?php }  ?>
  </div>  

  <div id="resume-context-part3">
    <div id="book-title" style="text-align:center;margin-top:50px;margin-bottom:20px;">BOOKS</div>
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