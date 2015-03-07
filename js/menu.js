$(document).ready(main);

var contador = 1;

function main(){
	$('.bt-menu').click(function(){
		if(contador == 1){
			$('#mainNav').animate({
				right: '0'
			});
			contador = 0;
		}else{
			$('#mainNav').animate({
				right: '-100%'
			});
			contador = 1;
		}
	});
};