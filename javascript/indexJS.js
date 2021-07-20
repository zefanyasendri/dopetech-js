//Accordion
$(document).ready(function(){
	$(function(){
		$("#accordion").accordion();
	});
});

//Theme Switch : Dark / Light
function themeSwitcher() {
	var element = document.getElementById("theme");
	element.classList.toggle("light");
}

//Animation on click
$(function(){
	var animationName = 'animated jello';
	var animationName2 = 'animated rubberBand';
	var animationName3 = 'animated fadeInDown';
	var animationName4 = 'animated fadeInUp';
	var animationEnd = 'webkitAnimationEnd mozAnimationEnd oanimationend animationend';
	
	$('h3').on('click',function(){
		$('h3').addClass(animationName).one(animationEnd, function(){
			$(this).removeClass(animationName);
		});
	});
	
	$('#HSHG').on('click',function(){
		$('#HSHG').addClass(animationName2).one(animationEnd, function(){
			$(this).removeClass(animationName2);
		});
	});
	
	$('#thect').on('click',function(){
		$('#thect').addClass(animationName3).one(animationEnd, function(){
			$(this).removeClass(animationName3);
		});
	});
	
	$('#thect').on('click',function(){
		$('#navigation').addClass(animationName4).one(animationEnd, function(){
			$(this).removeClass(animationName4);
		});
	});
	
	$('#thect').on('click',function(){
		$('#top').addClass(animationName3).one(animationEnd, function(){
			$(this).removeClass(animationName3);
		});
	});
	
	//Component SubMenu on Click
	var i=0,j=0,k=0,l=0,m=0;
	$("#tentkangkita").click(function openSec(){
		if(i%2==0){
			$("#b1").slideToggle(500,function(){
				$("#b2").slideToggle(500,function(){
					$("#b3").slideToggle(500);
				});
			});			
		}else{
			$("#b3").slideToggle(1000);
			$("#b2").slideToggle(1000);
			$("#b1").slideToggle(1000);
		}
		i++;
	});
	$("#tentangperusahaan").click(function openInt(){
		if(j%2==0){
			$("#g1").slideToggle(500,function(){
				$("#g2").slideToggle(500,function(){
					$("#g3").slideToggle(500);
				});
			});			
		}else{
			$("#g3").slideToggle(1000);
			$("#g2").slideToggle(1000);
			$("#g1").slideToggle(1000);
		}
		j++;
	});
	$("#sejarah").click(function openVoA(){
		if(k%2==0){
			$("#f1").slideToggle(500,function(){
				$("#f2").slideToggle(500,function(){
					$("#f3").slideToggle(500);
				});
			});			
		}else{
			$("#f3").slideToggle(1000);
			$("#f2").slideToggle(1000);
			$("#f1").slideToggle(1000);
		}
		k++;
	});
	$("#vimi").click(function openLig(){
		if(l%2==0){
			$("#m1").slideToggle(500,function(){
				$("#m2").slideToggle(500,function(){
					$("#m3").slideToggle(500);
				});
			});			
		}else{
			$("#m3").slideToggle(1000);
			$("#m2").slideToggle(1000);
			$("#m1").slideToggle(1000);
		}
		l++;
	});
});