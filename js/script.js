let nav = document.querySelector("#nav-bar");
let lastScrollValue = 0;

document.addEventListener('scroll',() => {
		let top  = document.documentElement.scrollTop;
    if(lastScrollValue < top) {
    	nav.classList.add("hidden");
    } else {
    	nav.classList.remove("hidden");
    }
    lastScrollValue = top;
});
