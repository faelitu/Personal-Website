<script>
/*$(document).ready(function(){
	$("#profile-pic").click(function(){
    	$(this).animate({
    		width: '+=50px',
    		height: '-=50px'
    	});
    	$(this).animate({
    		width: '-=50px',
    		height: '+=50px'
    	});
  });
});*/

function rotate(element, degree) {
	$(element).animate({  transform: degree }, {
    step: function(now,fx) {
        $(this).css({
            '-webkit-transform':'rotate('+now+'deg)', 
            '-moz-transform':'rotate('+now+'deg)',
            'transform':'rotate('+now+'deg)'
        });
    }
    });
}

function transparent(element) {
	if (element.style.opacity !== '0.7') {
		$(element).animate({
			opacity: '0.7'
		}, {duration: 1000});
	} else {
		$(element).animate({
			opacity: '1.0'
		}, {duration: 1000});
	}
}

function rotateAndTransparent(element, degree) {
	$(element).animate({  transform: degree  }, {
		duration: 400, 
		complete: function() {
			if (element.style.opacity !== '0.7') {
				$(element).animate({
					opacity: '0.7'
				}, {duration: 1000});
			} else {
				$(element).animate({
					opacity: '1.0'
				}, {duration: 1000});
			}
		},
		step: function(now,fx) {
        	$(this).css({
            	'-webkit-transform':'rotate('+now+'deg)', 
            	'-moz-transform':'rotate('+now+'deg)',
            	'transform':'rotate('+now+'deg)'
        	});
    	}
    });
}

function twinkle(element, delay) {
	var dur = 300;
	var opac = '0.4';
	$(element).delay(delay).animate({
		opacity: opac,
		textShadow: '0 0 10px white'
	}, {
		duration: dur,
		complete: function() {
			$(this).animate({
				opacity: '1.0',
				textShadow: '0 0 20px white'
			}, {
				duration: dur,
				complete: function() {
					twinkle(this);
					// $(this).animate({
					// 	opacity: opac,
					// 	textShadow: '0 0 20px white'
					// }, {
					// 	duration: dur,
					// 	complete: function() {
					// 		$(this).animate({
					// 			opacity: 'toggle'
					// 		}, {
					// 			duration: dur,
					// 			complete: function() {
					// 				$(this).animate({
					// 					opacity: 'toggle'
					// 				}, {
					// 					duration: dur,
					// 					complete: function() {
					// 						twinkle(this);
					// 					}
					// 				});
					// 			}
					// 		});
					// 	}
					// });
				}
			});
		}
	});
}

function check() {
	$pos = document.getElementById('barranav').offsetTop;
  	if (window.pageYOffset === $pos) {
  		$(".star").hide();
  	} else {
  		$(".star").show();
  	}
}

//stars
$(document).ready(function(){
	var qtd = 100;
  	var star1 = "<b id='starA' class='star' style='cursor: default; color: white; font-size: 30px; position:fixed; text-shadow: 0 0 10px white'>&#8226</b>";
  	var star2 = "<b id='starB' class='star' style='cursor: default; color: white; font-size: 20px; position:fixed; text-shadow: 0 0 10px white'>&#8226</b>";
  	var lastStar = "<b id='star-1' class='star' style='cursor: default; color: white; font-size: 10px; position:fixed; text-shadow: 0 0 10px white'>&#8226</b>";
  	$(".inblock").after(star1, star2, lastStar); // Insert new elements after <img>
  	for (i = 0; i < qtd; i++) {
  		var size = Math.floor(Math.random() * 20) + 10;
  		var nextStar = "<b id='star"+i+"' class='star' style='cursor: default; color: white; font-size: "+size+"px; position:fixed; text-shadow: 0 0 10px white; z-index: 0'>&#8226</b>";
  		$("#star"+(i-1)).after(nextStar);

  		lastStar = nextStar;
  	}

  	x = $("#starA").offset().left;
	y = $("#starA").offset().top;

	//meu monitor:
	//range y -30 a -860
	//range x 0 a +1890
  	$("#starA").offset({ left: x+1890 });
  	$("#starA").offset({ top: y-30 });
  	$("#starB").offset({ top: y-400 });
  	$("#star-1").offset({ top: y-300 });

  	twinkle(document.getElementById('starA'), 0);
  	twinkle(document.getElementById('starB'), 1198);
  	twinkle(document.getElementById('star-1'), 2350);
  	for (i = 0; i < qtd; i++) {
  		var randomX = Math.floor(Math.random() * 1890);
  		var randomY = Math.floor(Math.random() * 830) + 30;
  		$("#star"+i).offset({ left: x+randomX });
  		$("#star"+i).offset({ top: y-randomY });

  		var delay = Math.floor(Math.random() * 3000);
  		twinkle(document.getElementById('star'+i), delay);
  	}

  	document.getElementById("all").addEventListener("wheel", check);
});

//TODO criar funçao pra esconder a estrela, caso a foto passe por ela

</script>