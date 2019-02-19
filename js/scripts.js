window.onload=function(){
	const navbar=document.getElementById('mainNavigation');
	
	window.onscroll=function(){
		console.log(window.scrollY);
		navbar.style.top=window.scrollY+'px';
	}
}