(function () {
	/**
	 * Created by emmanuel on 13/02/2017.
	 */
	var bubbleSound = document.getElementById("bubble_sound");
	var pinkBubbleSound = document.getElementById("pink_bubble_sound");
	var header = document.getElementById("hero_title_container");
	header.style.height = window.innerHeight + "px";
	function getRandomInt(min, max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}
	var canvas = document.getElementById("myCanvas");
	var container = document.getElementById("hero_title_container");
	canvas.setAttribute("width", container.clientWidth);
	canvas.setAttribute("height", container.clientHeight);
	
	var resetBtn = document.getElementById("reset");
	var isFirstTime = true;
	var context = canvas.getContext("2d");
	var min = 10;
	var max = 30;
	var circles = [];
	var tries = 0;
	//preparing bubbles
	function createCircle(i) {
		var x = getRandomInt(0, window.innerWidth);
		var y = getRandomInt(0, window.innerHeight);
		var r = getRandomInt(min, max);
		var vel = getRandomInt(3, 10);
		var clicked = false;
		var colour = "rgba(255, 255, 255, 0.8)";
		switch (i) {
			case 1:
				colour = "rgba(233, 116, 238, 0.8)";
				break;
			case 2:
				colour = "rgba(233, 116, 238, 0.8)";
				break;
			case 3:
				colour = "rgba(233, 116, 238, 0.8)";
				break;
		}
		var isAlive = true;
		context.beginPath();
		context.arc(x, y, r, 0, 2 * Math.PI, false);
		context.fillStyle = colour;
		context.fill();
		circles.push([x, y, r, vel, clicked, colour, isAlive]);
	}
	var particleCount;
	if (window.innerWidth > 768) {
		particleCount = 100;
	} else if (window.innerWidth < 460) {
		particleCount = 50;
	} else {
		particleCount = 75;
	}
	
	for (var i = 0; i < particleCount; i++) {
		createCircle(i);
	}
	function moveBubbles() {
		var now = performance.now();
		var delta = (now - then) / 200;
		//assume tab out if delta bigger than 0.14 and set manually
		if (delta > 0.14) {
			delta = 0.08;
		}
		for (var i = 0; i < circles.length; i++) {
			circles[i][0] += circles[i][3] * delta;
			circles[i][1] -= circles[i][3] * delta;
			if (circles[i][4] === true) {
				circles[i][2] -= circles[i][2] * delta;
			}
		}
		then = now;
	}
	function bubbleClick(event) {
		var rect = canvas.getBoundingClientRect();
		var posX = event.clientX - rect.left;
		var posY = event.clientY - rect.top;
		for (var i = 0; i < circles.length; i++) {
			if (
				Math.sqrt(
					(posX - circles[i][0]) * (posX - circles[i][0]) +
						(posY - circles[i][1]) * (posY - circles[i][1])
				) < circles[i][2]
			) {
				if (!circles[i][4]) {
					circles[i][4] = true;
					particleCount--;
				}
				circles[i][6] = false;
				if (circles[i][5] == "rgba(233, 116, 238, 1)") {
					pinkBubbleSound.play(0);
				} else if (i % 4 === 0) {
					pinkBubbleSound.play(0);
				} else {
					bubbleSound.play(0);
				}
				
			}
		}
		if (particleCount === 0) {
			var textContainer = document.getElementById("container_item");
			TweenMax.to(textContainer, 3, {
				opacity: 0,
				onComplete: function () {
					textContainer.innerHTML = "";
					textContainer.style.opacity = 1;
					var congrats = document.createElement("h1");
					congrats.setAttribute("class", "hero-title");
					tries++;
					congrats.style.opacity = 0;
					if (tries > 3) {
						var congratsTextNode = document.createTextNode("-.");
					}
					if (tries === 1) {
						var congratsTextNode = document.createTextNode("-congratulations.");
					}
					if (tries === 2) {
						var congratsTextNode = document.createTextNode("-well done.");
					}
					if (tries === 3) {
						var congratsTextNode = document.createTextNode("-hm.");
					}
					congrats.appendChild(congratsTextNode);
					var phrase = document.createElement("p");
					phrase.setAttribute("class", "hero-subtitle");
					phrase.style.opacity = 0;
					if (tries > 3) {
						var phraseTextNode = document.createTextNode("-No comment");
					}
					if (tries === 1) {
						var phraseTextNode = document.createTextNode("-You must have ocd");
					}
					if (tries === 2) {
						var phraseTextNode = document.createTextNode(
							"-Second try? That's serious"
						);
					}
					if (tries === 3) {
						var phraseTextNode = document.createTextNode("-Third time? Seriously?");
					}
					phrase.appendChild(phraseTextNode);
					textContainer.appendChild(congrats);
					textContainer.appendChild(phrase);

					TweenMax.staggerTo([congrats, phrase], 3, { opacity: 1 }, 1.5);
					particleCount = "undefined";
					isFirstTime = false;
				}
			});
		}
	}
	function resetBubbles() {
		canvas.setAttribute("width", window.innerWidth);
		canvas.setAttribute("height", window.innerHeight);
		header.style.height = window.innerHeight + "px";
		if (window.innerWidth > 768) {
			particleCount = 100;
		} else if (window.innerWidth < 460) {
			particleCount = 50;
		} else {
			particleCount = 75;
		}
	
		context.clearRect(0, 0, canvas.width, canvas.height); // clear the canvas
		circles = [];
		for (var i = 0; i < particleCount; i++) {
			createCircle(i);
		}
	}
	function highlightHovered(event) {
		var rect = canvas.getBoundingClientRect();
		var posX = event.clientX - rect.left;
		var posY = event.clientY - rect.top;
		for (var i = 0; i < circles.length; i++) {
			if (
				Math.sqrt(
					(posX - circles[i][0]) * (posX - circles[i][0]) +
						(posY - circles[i][1]) * (posY - circles[i][1])
				) < circles[i][2]
			) {
				circles[i][5] = "rgba(255, 255, 255, 1)";
				switch (i) {
					case 1:
						circles[i][5] = "rgba(233, 116, 238, 1)";
						break;
					case 2:
						circles[i][5] = "rgba(233, 116, 238, 1)";
						break;
					case 3:
						circles[i][5] = "rgba(233, 116, 238, 1)";
						break;
				}
			} else {
				circles[i][5] = "rgba(255, 255, 255, 0.8)";
				switch (i) {
					case 1:
						circles[i][5] = "rgba(233, 116, 238, 0.8)";
						break;
					case 2:
						circles[i][5] = "rgba(233, 116, 238, 0.8)";
						break;
					case 3:
						circles[i][5] = "rgba(233, 116, 238, 0.8)";
						break;
				}
			}
		}
	}
	resetBtn.addEventListener("click", resetBubbles);
	canvas.addEventListener("click", bubbleClick);
	canvas.addEventListener("mousemove", highlightHovered);
	function animationLoop() {
		context.clearRect(0, 0, canvas.width, canvas.height); // clear the canvas
		for (var i = 0; i < circles.length; i++) {
			if (
				circles[i][0] > window.innerWidth + 2 * circles[i][2] ||
				circles[i][1] < 0 - 2 * circles[i][2] ||
				circles[i][2] < 0
			) {
				if (circles[i][6] === true) {
					if (window.innerWidth > window.innerHeight) {
						if (i % 3 == 0) {
							circles[i][2] = getRandomInt(min, max);
							circles[i][0] = -2 * circles[i][2];
							circles[i][1] = getRandomInt(0, window.innerHeight);
							circles[i][3] = getRandomInt(3, 10);
							circles[i][4] = false;
						} else {
							circles[i][0] = getRandomInt(0, window.innerWidth);
							circles[i][2] = getRandomInt(min, max);
							circles[i][1] = window.innerHeight + 2 * circles[i][2];
							circles[i][3] = getRandomInt(3, 10);
							circles[i][4] = false;
						}
					} else {
						if (i % 3 == 0) {
							circles[i][0] = getRandomInt(0, window.innerWidth);
							circles[i][2] = getRandomInt(min, max);
							circles[i][1] = window.innerHeight + 2 * circles[i][2];
							circles[i][3] = getRandomInt(3, 10);
							circles[i][4] = false;
						} else {
							circles[i][2] = getRandomInt(min, max);
							circles[i][0] = -2 * circles[i][2];
							circles[i][1] = getRandomInt(0, window.innerHeight);
							circles[i][3] = getRandomInt(3, 10);
							circles[i][4] = false;
						}
					}
				} else {
					circles[i][6] = false;
				}
			}
			context.beginPath();
			context.arc(
				circles[i][0],
				circles[i][1],
				circles[i][2],
				0,
				2 * Math.PI,
				false
			);
			context.fillStyle = circles[i][5];
			context.fill();
		}
		moveBubbles();
		requestAnimationFrame(animationLoop);
	}
	var then = performance.now();
	requestAnimationFrame(animationLoop);
	window.addEventListener("resize", resetBubbles);
})();
