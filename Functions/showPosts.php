if (typeof friendToShow === 'undefined') {
   
     friendToShow="<?php 
     
     if( isset($_SESSION["friendToShow"]) ){
         echo $_SESSION['friendToShow'];
     }
     else {
         echo "";
     }
     ?>";
   
}


   
   $.ajax({
	       type: "POST",
	       url: '../PostCode/Post_code.php',
	       data: {username: "<?php echo $_SESSION['username']; ?>",friendToShow:friendToShow},
	       success: function(data){
	    	   $('#post-container').fadeIn(data);
               $('#post-container').html(data);
	       }
	   });
	   
	   
	   
