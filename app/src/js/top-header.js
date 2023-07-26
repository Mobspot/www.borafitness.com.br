
console.log("top-header.js");
const headerBlock = document.querySelector("#headerBlock");
if (headerBlock) {

	(function scrollMenu() {
		window.addEventListener("scroll", achataMenu);
		window.addEventListener("DOMContentLoaded", achataMenu);
		function achataMenu(scrollTop = 0) {
			scrollTop = document.documentElement.scrollTop;
			if (scrollTop > 50) {
				headerBlock.classList.add("on");
				console.log("achatando menu boll");
			} else {
				headerBlock.classList.remove("on");
				console.log("desachatando menu boll");
			}
		}
	})();
}