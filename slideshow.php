
<?php  ?>

	<script  src="<?php bloginfo('template_url');?>/js/loopedSlider.js"></script>
	<script> 
      jQuery(document).ready(function($){  
            $('#loopedslider').loopedSlider({
                autoHeight: 0,
                containerClick: false,
				addPagination: 1,
				autoStart: 8000,
				restart: 2500
            })
        })
    </script>
	
<div id="slidebar"> 
	<div class="slidebg"> 
  		 <div id="loopedslider">
         	<div class="container">
    			<div class="slides">
                	
                  <div>
                    <img src="<?php bloginfo('template_url');?>/example/5.jpg" alt="5"  />
                  </div>
                  
                  	
                  <div>
                    <img src="<?php bloginfo('template_url');?>/example/6.jpg" alt="6"  />
                  </div>
                  
                  	
                  <div>
                    <img src="<?php bloginfo('template_url');?>/example/7.jpg" alt="7"  />
                  </div>
                  
                  
                  <div>
                     <img src="<?php bloginfo('template_url');?>/example/8.jpg" alt="8"  />
                  </div>
                 
               	<div>
                    <img src="<?php bloginfo('template_url');?>/example/1.jpg" alt="1"  />
                  </div>
                  <div>
                    <img src="<?php bloginfo('template_url');?>/example/2.jpg" alt="2"  />
                  </div>
                  <div>
                    <img src="<?php bloginfo('template_url');?>/example/3.jpg" alt="3"  />
                  </div>
                	<div>
                    <img src="<?php bloginfo('template_url');?>/example/4.jpg" alt="4"  />
                  </div>
                  	
    			</div>
  			</div>
             <span class="pre"><a href="#" class="previous">previous</a></span>
             <span class="nex"><a href="#" class="next">next</a></span>
		</div>
  </div> 
</div> 
<?php?>
