function scrollFunction(){
	if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
		document.getElementById("header").style.fontsize = "30px";
	}
	else{
		document.getElementById("header").style.fontsize = "90px";
	}
}