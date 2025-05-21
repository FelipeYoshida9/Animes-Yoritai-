const imgs = document.getElementById("imgdslq");
const img = document.querySelectorAll("#imgdslq imgdslq");

let idx = 0;

function carrossel(){
	idx++;
	
	if(idx > img.length - 1){
	      idx = 0;
	}
	imgs.style.transform = 'translateX($(-idx * 500)px)';
}

setInterval(carrossel, 1800);