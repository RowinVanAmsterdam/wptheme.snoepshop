// // https://gomakethings.com/breakpoint-conditional-javascript-in-vanilla-js/
// function renderHello() {
//     var template = document.getElementById('template').innerHTML;
//     var rendered = Mustache.render(template, { name: 'Luke' });
//     document.getElementById('target').innerHTML = rendered;
//   }

// // Define our viewportWidth variable
// var viewportWidth;

// // Set/update the viewportWidth value
// var setViewportWidth = function () {
// 	viewportWidth = window.innerWidth || document.documentElement.clientWidth;
// }

// // Log the viewport width into the console
// var logWidth = function () {
// 	if (viewportWidth > 640) {
// 		console.log('Wide viewport');
// 	} else {
// 		console.log('Small viewport');
// 	}
// }

// // Set our initial width and log it
// setViewportWidth();
// logWidth();
// renderHello();

// // On resize events, recalculate and log
// window.addEventListener('resize', function () {
// 	setViewportWidth();
// 	logWidth();
// }, false);

// Collapse

var i;

const displayFilter = () => {
    var acc = document.getElementsByClassName("accordion");
    for (i = 0; i < acc.length; i++) {
            acc[i].classList.toggle("active");
            var panel = acc[i].nextElementSibling;
            console.log(panel);
            if (!panel.classList.contains('open')) {
                panel.classList.add("open");
            } else {
                panel.classList.remove("open");
            }
  }
};

// document.getElementById("filter-btn").addEventListener("click", displayFilter);
