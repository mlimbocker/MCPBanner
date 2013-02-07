//constants
	//constants
	var NUM_SLIDES = 4;
	var SLIDE_DELAY = 5000;
	var CIRCLE_MAX_RADIUS = 10;
	var CIRCLE_DRAW_TIME = 500;
	var LINE_DRAW_TIME = 1000;
	var TEXT_DRAW_TIME = 1500;
	var FADE_TIME = 2500;
	
	var slideIndex = 0;
	var prevSlideIndex=NUM_SLIDES-1;
	
	var timeVar, slideTimeout;
	
	var banner=$('#banner')[0];
	var canvas=Raphael(banner, banner.offsetWidth, banner.offsetHeight);
	var circle=null;
	var circleGlow=null;
	var line=null;
	var text=null;
	
	var clicked=false;
	
	var circleTop, circleLeft;
	
	var dest = {
			x:0,
			y:0
		};
		
	var origin = {
			x:0,
			y:0
		};
		
	var turn = {
		x:0,
		y:0
	};
	
	var path=null;
	
	function drawCircle(){
		circleTop = parseInt($('div.slideInfo .originY').eq(slideIndex).text());
		circleLeft = parseInt($('div.slideInfo .originX').eq(slideIndex).text());
		
		var xDir = turn.x-origin.x;
		var yDir = turn.y-origin.y;
		
		//find angle of line and offset to edge of circle
		var angle=Math.atan(yDir/xDir);
		var xOffset=CIRCLE_MAX_RADIUS*Math.cos(angle);
		var yOffset=CIRCLE_MAX_RADIUS*Math.sin(angle);
		
		if(xDir >0)
			if(yDir >0){
				circleTop -=yOffset;
				circleLeft -=xOffset;	
			}
			else{
				circleTop -=yOffset;
				circleLeft -=xOffset;	
			}
		else{
			if(yDir >0){
				circleTop -=yOffset;
				circleLeft +=xOffset;	
			}
			else{
				circleTop +=yOffset;
				circleLeft +=xOffset;
			}
		}
			
		
		
		if(circle){
			circle.remove();
		}
		if(circleGlow){
			circleGlow.remove();	
		}
		
		circle = canvas.circle(circleLeft,circleTop,0);

		circle.attr({
			'stroke':'#0fcedf',
			'stroke-width':2,
			'opacity':.9,
			'fill-opacity':.4,
			'fill':'r rgba(15,206,223,.7)-rgba(15,206,223,.0)'
		});
		
		var animation = Raphael.animation({
			'r':CIRCLE_MAX_RADIUS,
		},CIRCLE_DRAW_TIME, 'bounce');
		
		
		circle.animate(animation);		
		
	};
	
	function drawLine1(){
		
		if(line)
			line.remove();
		
		path='M '+origin.x+' '+origin.y;
		
		line=canvas.path(path);
		
		line.attr({
			'stroke':'#0fcedf',
			'stroke-width':2
		});
		
		path+=' l '+(turn.x-origin.x)+' '+(turn.y-origin.y);
		
		var animation = Raphael.animation({
			'path':path
		},LINE_DRAW_TIME/2, 'linear');
		
		line.animate(animation);
		
		timeVar=setTimeout('drawLine2()',LINE_DRAW_TIME/2);
	
	};
	
	function drawLine2(){
		
		path+=' l '+(dest.x - turn.x)+' '+(dest.y-turn.y);
		
		var animation = Raphael.animation({
			'path':path
		},LINE_DRAW_TIME/2, 'linear');
		
		line.animate(animation);
	};
	
	function drawText(){
		
		var x, y, str, font, fontSize, color, lineHeight;
		
		x = parseInt($('div.slideInfo .textLeft').eq(slideIndex).text());
		y = parseInt($('div.slideInfo .textTop').eq(slideIndex).text());
		font = $('div.slideInfo .fontFamily').eq(slideIndex).text();
		fontSize = $('div.slideInfo .fontSize').eq(slideIndex).text();
		color = $('div.slideInfo .rgbColor').eq(slideIndex).text();	
		lineHeight = $('div.slideInfo .lineHeight').eq(slideIndex).text();
		
		$('div.infoText').eq(slideIndex).css({
			'top':y,
			'left':x,
			'font-family':font,
			'font-size':fontSize,
			'line-height':lineHeight,
			'color':'rgb('+color+')'
		});
		$('div.infoText').eq(slideIndex).fadeIn(TEXT_DRAW_TIME);

	};
			
	function advanceSlide(index){
			$('li.bannerSlide').eq(slideIndex).fadeOut(FADE_TIME);	
			$('div.infoText').eq(slideIndex).hide();
			if(index < 0 ){
				slideIndex++;
				slideIndex%=NUM_SLIDES;
			}
			else{
				slideIndex=index;
			}
			
			$('li.transitionSlide').removeClass('selected');
			$('li.transitionSlide').eq(slideIndex).addClass('selected');
			
			transitionSlide();
			
	};
	
	function drawOverlay(){
		origin.x=parseInt($('div.slideInfo .originX').eq(slideIndex).text());
		origin.y=parseInt($('div.slideInfo .originY').eq(slideIndex).text());
		turn.x=parseInt($('div.slideInfo .turnX').eq(slideIndex).text());
		turn.y=parseInt($('div.slideInfo .turnY').eq(slideIndex).text());
		dest.x=parseInt($('div.slideInfo .destX').eq(slideIndex).text());
		dest.y=parseInt($('div.slideInfo .destY').eq(slideIndex).text());
				
		drawCircle();
		timeVar=setTimeout('drawLine1()',CIRCLE_DRAW_TIME);	
		timeVar=setTimeout('drawText()',LINE_DRAW_TIME);
	};
	
	function transitionSlide(){
			if(circle)
				circle.remove();
			if(line)
				line.remove();
			if(circleGlow)
				circleGlow.remove();	
				
			$('li.bannerSlide').eq(slideIndex).fadeIn(FADE_TIME);
			timeVar=setTimeout('drawOverlay()',FADE_TIME);
			
			slideTimeout=setTimeout('advanceSlide(-1)',SLIDE_DELAY+FADE_TIME+CIRCLE_DRAW_TIME+LINE_DRAW_TIME+TEXT_DRAW_TIME);
	};
	
	
	$('li.transitionSlide').click(function(){
		clicked=true;
		clearTimeout(slideTimeout);
		clearTimeout(timeVar);
		advanceSlide($(this).index());
	});
	
	$(document).ready(function(){
		drawOverlay();
		slideTimeout=setTimeout('advanceSlide(-1)',SLIDE_DELAY);
		
		});