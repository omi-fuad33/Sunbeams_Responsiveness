<?php
   /*
       Template Name: Faclities
    */
   ?>
<?php
   get_header();
      ?>
<div class="n_differentfull">
<?php
   while ( have_posts() ) : the_post(); 
   $image_id = get_post_thumbnail_id();
   $image_url = wp_get_attachment_image_src($image_id, 'full', true);
   ?>
<div class="n_contain">
   <!--<img class="n_schoolBoardImage n_school img-responsive" src="<?php echo $image_url[0]; ?>">-->
   <!-- <div class="n_facilityBox"><h2 class="n_prinTitle"><?php the_title(); ?></h2></div>
      </div>-->
   <br><br><br><br>
   <!--Home taxt and bottombar -->
   <p class="n_homebar">HOME>
      <?php the_title_attribute(); ?><br>
   </p>
   <!--<hr class=n_hr>-->
   <br>
   <?php the_content();?>
   <div class="n_newFacIconsList">
      <ul class="row n_newFacList">
         <div class="wow zoomIn n_newFacSDiv col-xl-4 col-lg-4 col-md-6">
            <img class="n_naImage float-left" src="<?php echo get_template_directory_uri(); ?>/images/icons/auditorium.png" alt="image not found">
            <li class="n_newFacSingle"><a class="n_clickAuditorium" href="#">Auditorium</a></li>
         </div>
          
         <div class="wow zoomIn n_newFacSDiv col-xl-4 col-lg-4 col-md-6">
            <img class="n_naImage float-left" src="<?php echo get_template_directory_uri(); ?>/images/icons/lab.png" alt="image not found">
            <li class="n_newFacSingle"><a class="n_clickLab" href="#">Science Lab</a></li>
         </div>
          
          <div class="wow zoomIn n_newFacSDiv col-xl-4 col-lg-4 col-md-6">
            <img class="n_naImage float-left" src="<?php echo get_template_directory_uri(); ?>/images/icons/computer.png" alt="image not found">
            <li class="n_newFacSingle"><a class="n_clickComputer" href="#">Computer Lab</a></li>
         </div>
          
         <div class="wow zoomIn n_newFacSDiv col-xl-4 col-lg-4 col-md-6">
            <img class="n_naImage float-left" src="<?php echo get_template_directory_uri(); ?>/images/icons/playing.png" alt="image not found">
            <li class="n_newFacSingle"><a class="n_clickECA" href="#">ECA</a></li>
         </div>
         <br><br><br><br>
          
          
         <div class="wow zoomIn n_newFacSDiv col-xl-4 col-lg-4 col-md-6">
            <img class="n_naImage float-left" src="<?php echo get_template_directory_uri(); ?>/images/icons/security.png" alt="image not found">
            <li class="n_newFacSingle"><a class="n_clickSecurity" href="#">Security</a></li>
         </div>
          
         <div class="wow zoomIn n_newFacSDiv col-xl-4 col-lg-4 col-md-6">
            <img class="n_naImage float-left" src="<?php echo get_template_directory_uri(); ?>/images/icons/canteen.png" alt="image not found">
            <li class="n_newFacSingle"><a class="n_clickCanteen" href="#">Canteen</a></li>
         </div>
          
          
         <div class="wow zoomIn n_newFacSDiv col-xl-4 col-lg-4 col-md-6">
            <img class="n_naImage float-left" src="<?php echo get_template_directory_uri(); ?>/images/icons/library.png" alt="image not found">
            <li class="n_newFacSingle"><a class="n_clickLibrary" href="#">Library</a></li>
         </div>
         <br><br><br><br>
          
          
         <div class="wow zoomIn n_newFacSDiv col-xl-4 col-lg-4 col-md-6">
            <img class="n_naImage float-left" src="<?php echo get_template_directory_uri(); ?>/images/icons/playground.png" alt="image not found">
            <li class="n_newFacSingle"><a class="n_clickPlayground" href="#">Play Ground</a></li>
         </div>
          
         <div class="wow zoomIn n_newFacSDiv col-xl-4 col-lg-4 col-md-6">
            <img class="n_naImage float-left" src="<?php echo get_template_directory_uri(); ?>/images/icons/transport.png" alt="image not found">
            <li class="n_newFacSingle"><a class="n_clickTransport" href="#">Transport</a></li>
         </div>
          
         <div class="wow zoomIn n_newFacSDiv col-xl-4 col-lg-4 col-md-6">
            <img class="n_naImage float-left" src="<?php echo get_template_directory_uri(); ?>/images/icons/medical.png" alt="image not found">
            <li class="n_newFacSingle n_newFacDiff"><a class="n_clickFirstAid" href="#">First Aid</a></li>
         </div>
      </ul>
   </div>
   <?php
      endwhile; //resetting the page loop
      wp_reset_query(); //resetting the page query
      ?>
</div>
<script>
        /* AFTER PAGE REFRESH*/    
   $(document).ready(function() {
            
       $("#facilities_Auditorium").hide();
       $("#facilities_Lab").hide();
       $("#facilities_ECA").hide();
       $("#facilities_Security").hide();
       $("#facilities_Canteen").hide();
       $("#facilities_Library").hide();
       $("#facilities_Playground").hide();
       $("#facilities_Transport").hide();
       $("#facilities_FirstAid").hide();
       $("#facilities_Computer").hide();   
       
       $("#n_fiveSix").hide();
       $("#n_sevenEight").hide();
       
               });
            
    /* CLICK FUNCTION FOR AUDITORIUM*/
    $(".n_clickAuditorium").click(function(){
                
       $("#facilities_Auditorium").show();
       $("#facilities_Lab").hide();
       $("#facilities_ECA").hide();
       $("#facilities_Security").hide();
       $("#facilities_Canteen").hide();
       $("#facilities_Library").hide();
       $("#facilities_Playground").hide();
       $("#facilities_Transport").hide();
       $("#facilities_FirstAid").hide();
       $("#facilities_Computer").hide();
        
        
        $("#n_fiveSix").hide();
        $("#n_sevenEight").hide();
                         
    });
    
        /* CLICK FUNCTION FOR Science LAB*/
    $(".n_clickLab").click(function(){
                
       $("#facilities_Auditorium").hide();
       $("#facilities_Lab").show();
       $("#facilities_ECA").hide();
       $("#facilities_Security").hide();
       $("#facilities_Canteen").hide();
       $("#facilities_Library").hide();
       $("#facilities_Playground").hide();
       $("#facilities_Transport").hide();
       $("#facilities_FirstAid").hide();
       $("#facilities_Computer").hide();    
        
         $("#n_fiveSix").hide();
        $("#n_sevenEight").hide();
                         
    });
    
         /* CLICK FUNCTION FOR Computer LAB*/
    $(".n_clickComputer").click(function(){
                
       $("#facilities_Auditorium").hide();
       $("#facilities_Lab").hide();
       $("#facilities_Computer").show();
       $("#facilities_ECA").hide();
       $("#facilities_Security").hide();
       $("#facilities_Canteen").hide();
       $("#facilities_Library").hide();
       $("#facilities_Playground").hide();
       $("#facilities_Transport").hide();
       $("#facilities_FirstAid").hide();
          
        
         $("#n_fiveSix").hide();
        $("#n_sevenEight").hide();
                         
    });
    
        /* CLICK FUNCTION FOR ECA*/
    $(".n_clickECA").click(function(){
                
       $("#facilities_Auditorium").hide();
       $("#facilities_Lab").hide();
       $("#facilities_ECA").show();
       $("#facilities_Security").hide();
       $("#facilities_Canteen").hide();
       $("#facilities_Library").hide();
       $("#facilities_Playground").hide();
       $("#facilities_Transport").hide();
       $("#facilities_FirstAid").hide();
       $("#facilities_Computer").hide();
        
         $("#n_fiveSix").hide();
        $("#n_sevenEight").hide();
                         
    });
    
        /* CLICK FUNCTION FOR SECURITY*/
    $(".n_clickSecurity").click(function(){
                
       $("#facilities_Auditorium").hide();
       $("#facilities_Lab").hide();
       $("#facilities_ECA").hide();
       $("#facilities_Security").show();
       $("#facilities_Canteen").hide();
       $("#facilities_Library").hide();
       $("#facilities_Playground").hide();
       $("#facilities_Transport").hide();
       $("#facilities_FirstAid").hide();
       $("#facilities_Computer").hide();
        
         $("#n_fiveSix").hide();
        $("#n_sevenEight").hide();
                         
    });
    
        /* CLICK FUNCTION FOR CANTEEN*/
    $(".n_clickCanteen").click(function(){
                
       $("#facilities_Auditorium").hide();
       $("#facilities_Lab").hide();
       $("#facilities_ECA").hide();
       $("#facilities_Security").hide();
       $("#facilities_Canteen").show();
       $("#facilities_Library").hide();
       $("#facilities_Playground").hide();
       $("#facilities_Transport").hide();
       $("#facilities_FirstAid").hide();
       $("#facilities_Computer").hide();
        
         $("#n_fiveSix").hide();
        $("#n_sevenEight").hide();
                         
    });
    
        /* CLICK FUNCTION FOR LIBRARY*/
    $(".n_clickLibrary").click(function(){
                
       $("#facilities_Auditorium").hide();
       $("#facilities_Lab").hide();
       $("#facilities_ECA").hide();
       $("#facilities_Security").hide();
       $("#facilities_Canteen").hide();
       $("#facilities_Library").show();
       $("#facilities_Playground").hide();
       $("#facilities_Transport").hide();
       $("#facilities_FirstAid").hide();
       $("#facilities_Computer").hide();
         $("#n_fiveSix").hide();
        $("#n_sevenEight").hide();
                         
    });
    
        /* CLICK FUNCTION FOR PLAYGROUND*/
    $(".n_clickPlayground").click(function(){
                
       $("#facilities_Auditorium").hide();
       $("#facilities_Lab").hide();
       $("#facilities_ECA").hide();
       $("#facilities_Security").hide();
       $("#facilities_Canteen").hide();
       $("#facilities_Library").hide();
       $("#facilities_Playground").show();
       $("#facilities_Transport").hide();
       $("#facilities_FirstAid").hide();
       $("#facilities_Computer").hide();
        
         $("#n_fiveSix").hide();
        $("#n_sevenEight").hide();
                         
    });
    
        /* CLICK FUNCTION FOR TRANSPORT*/
    $(".n_clickTransport").click(function(){
                
       $("#facilities_Auditorium").hide();
       $("#facilities_Lab").hide();
       $("#facilities_ECA").hide();
       $("#facilities_Security").hide();
       $("#facilities_Canteen").hide();
       $("#facilities_Library").hide();
       $("#facilities_Playground").hide();
       $("#facilities_Transport").show();
       $("#facilities_FirstAid").hide();
       $("#facilities_Computer").hide();
        
         $("#n_fiveSix").hide();
        $("#n_sevenEight").hide();
                         
    });
    
        /* CLICK FUNCTION FOR FIRST AID*/
    $(".n_clickFirstAid").click(function(){
                
       $("#facilities_Auditorium").hide();
       $("#facilities_Lab").hide();
       $("#facilities_ECA").hide();
       $("#facilities_Security").hide();
       $("#facilities_Canteen").hide();
       $("#facilities_Library").hide();
       $("#facilities_Playground").hide();
       $("#facilities_Transport").hide();
       $("#facilities_FirstAid").show();
       $("#facilities_Computer").hide();
        
         $("#n_fiveSix").hide();
        $("#n_sevenEight").hide();
                         
    });
    
         /* CLOSE FUNCTION*/
   
          $(".n_close").click(function(){
          $("#facilities_Auditorium").hide(1000);
          $("#facilities_Lab").hide(1000);
          $("#facilities_ECA").hide(1000);      
          $("#facilities_Security").hide(1000);
          $("#facilities_Canteen").hide(1000);
          $("#facilities_Library").hide(1000);
          $("#facilities_Playground").hide(1000);
          $("#facilities_Transport").hide(1000);
          $("#facilities_FirstAid").hide(1000);
          $("#facilities_Computer").hide(1000);
          
              
              
          $("#n_fiveSix").hide();
        $("#n_sevenEight").hide();
          
          
      });
    
    
        $(".n_fiveSix").click(function(){
         $("#n_fiveSix").show(); 
         $("#facilities_ECA").hide();    
        });
    
    
       $(".n_sevenEight").click(function(){
         $("#n_sevenEight").show(); 
         $("#facilities_ECA").hide();    
        });
   
</script>
<br><br><br>
<div class="n_foot"><?php get_footer();?></div>