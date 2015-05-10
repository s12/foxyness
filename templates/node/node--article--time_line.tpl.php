<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
 <?php print render($title_prefix); ?>
 <?php print render($title_suffix); ?>   
 <div class="blog-columns">
  <!-- Begin media blog -->
  <div class="media_element">
    <?php if (isset($content['field_quote'])):?>
    <div class="quote-post">
      <blockquote>
        <?php print render($content['field_quote']);?>
      </blockquote>
    </div>  
    <?php else: ?>
    <?php print render($content['field_media']);?>
    <?php endif; ?>
  </div>
  <!-- End media blog -->
  
  <!-- Begin blog Content -->
  <div class="blog-content">
    <div class="title">
      <h3><a title="" href="<?php print $node_url;?>"><?php print $title;?></a></h3>
    </div><!-- end title -->
    
    <div class="post_meta">
        <span><i class="fa fa-calendar"></i> <?php print date('M d, Y', $created);?></span>
        
        <span><i class="fa fa-user"></i> <?php print $name;?></span>
        
        <?php if (isset($blog_categories)):?>
        <span><i class="fa fa-tag"></i><?php print $blog_categories;?></span>
        <?php endif;?>
        
        <?php if (module_exists("comment") && isset($comment_count)):?>
        <span><i class="fa fa-comment"></i> <?php print $comment_count;?> Comments</span>
        <?php endif;?>
    </div><!-- end post-meta -->
    
    <p class="blog-content-body"><?php print strip_tags(render($content['body']));?>..</p>
  </div> <!-- End blog Content -->
  </div>
  </div>