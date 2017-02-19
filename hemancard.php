<style>
   .hemanCard {
      position: relative;
      display: block;
      border-radius: 9px;
      border: 1px solid rgba(0,0,0, .09);
      height: auto;
      width:  240px;
      -webkit-box-shadow: 0 1px 4px rgba(0,0,0,.03);
      box-shadow: 0 1px 4px rgba(0,0,0,.03);
      margin: 0 auto;
      overflow: hidden;
      margin-bottom: 24px;
   }

   .hemanCard__cornerRibbon {
      position: absolute;
      z-index: 3;
      top: -6px;
      right: -12px;
      width: 102px;
   }



   .hemanCard__featuredImage img {
      display: block;
      position: relative;
      width: 100%;
   }
</style>

<div class="hemanCard">
   <div class="hemanCard__cornerRibbon">
      <?php
         $author_id = get_post_field('post_author', get_the_ID());
         if($author_id == 1){
            get_template_part('equinocs_owl_corner');
         } else if($author_id == 3){
            get_template_part('equinocs_cc_corner');
         }
       ?>
   </div>
   <div class="hemanCard__featuredImage">
   <?php  if(has_post_thumbnail()){
      echo get_the_post_thumbnail($post->ID,'medium',array('class'=>'front'));
            }
   ?>
   </div>
   <div class="hemanCard__meta">

   </div>

</div>
