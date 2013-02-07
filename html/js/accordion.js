function slidedown(elemid) {

	

		 if ($(elemid).attr('class') == 'active'){
			 $(elemid).children('ul').slideToggle();
			 $(elemid).removeClass('active');
			 $(elemid + 'a').removeClass('hide');
		     $(elemid + 'a').addClass('goto');
			
			  
		
			 } else{
			
	   	  
	      $(elemid).children('ul').slideToggle();
	      $('ul.root li a').removeClass('active');
	      $(elemid).addClass('active');	
		  $(elemid + 'a').removeClass('goto');
		  $(elemid + 'a').addClass('hide');
		  
	    }


							}



 
 