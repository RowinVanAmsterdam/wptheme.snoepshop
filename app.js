// Define our viewportWidth variable
var viewportWidth;

// Set/update the viewportWidth value
var setViewportWidth = function () {
	viewportWidth = window.innerWidth || document.documentElement.clientWidth;
}

// Log the viewport width into the console
var logWidth = function () {
	if (viewportWidth > 640) {
		console.log('Wide viewport');
	} else {
		console.log('Small viewport');
	}
}

// Set our initial width and log it
setViewportWidth();
logWidth();

// On resize events, recalculate and log
window.addEventListener('resize', function () {
	setViewportWidth();
	logWidth();
}, false);