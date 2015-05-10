<div id="<?php print $element_id;?>" class="skill-bar" data-percent="<?php print $percent;?>">
  <?php if ($content) :?>
	<div class="skill-bar-title"><?php print $content." - ".$percent."%";?></div>
  <?php endif;?>
  <?php if($percent):?>
  <div class="bar-wrap">
    <span class="background" style="width: 0"></strong>
    </span>
  </div>
  <?php endif;?>
</div>
<?php drupal_add_js('jQuery(document).ready(function($){var $skillbar = $("#'.$element_id.'");var percent = $skillbar.data("percent");if(typeof $.fn.appear == "function"){$skillbar.appear(function(){$skillbar.find(".background").css({width:percent+"%"});});}else{$skillbar.find(".background").css({width:percent+"%"});}});', array('type' => 'inline', 'scope' => 'footer', 'weight' => 5000)); ?>
