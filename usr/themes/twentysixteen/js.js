backtop = document.getElementById("backTop");
backtop.onclick = backTop;

window.onscroll = function() {
	var scrTop = document.documentElement.scrollTop || document.body.scrollTop;
	if (scrTop > 300) {
		backtop.style.display = "block";
	}
	else {
		backtop.style.display = "none";
	}
};
function backTop() {
	var myScroll = document.documentElement.scrollTop ||document.body.scrollTop;
	var mySpeed = Math.floor(-myScroll / 5);
	var backTime = setTimeout(backTop, 20);
	if (myScroll == 0) {
		clearTimeout(backTime)
	}
	document.documentElement.scrollTop = document.body.scrollTop = myScroll + mySpeed;
}