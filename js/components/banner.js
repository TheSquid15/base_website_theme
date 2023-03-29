// Get all slides
const slides = document.querySelectorAll(".slide");

// Set the slideshow to the first slide
let currentSlide = 0;

// Determine the amount of slides
let maxSlides = slides.length - 1;

// Get the pips
let pips = document.getElementsByClassName("pip");

// Do the initial transform on each slide
function transformSlides() {
    slides.forEach((slide, index) => {
        slide.style.transform = `translateX(${100 * (index - currentSlide)}%)`;
    });

    // Remove the active class from the previous pip
    for (i = 0; i < pips.length; i++) {
        pips[i].className = pips[i].className.replace(" activePip", "");
    }

    // Set the current pip as .active
    pips[currentSlide].className += " activePip";
}

transformSlides();

// Helper function to handle the slides moving
function slide() {
    if(currentSlide === maxSlides) {
        currentSlide = 0;
    }
    else {
        currentSlide++;
    }

    // Change each slides transform based on the current slide
    transformSlides();
}

// Set slide timer
const msPerSlide = 7000;
const timerFunction = slide;

let intervalTimer = setInterval(timerFunction, msPerSlide);

function resetTimer(functionCall, resetTime) {
    clearInterval(intervalTimer);
    intervalTimer = setInterval(functionCall, resetTime);
}

// Move slide when button is pressed
function moveSlideBy(moveIndexBy) {
    let newIndex = currentSlide + moveIndexBy

    if( newIndex > maxSlides) {
        currentSlide = 0;
    }
    else if(newIndex < 0) {
        currentSlide = maxSlides
    }
    else {
        currentSlide = newIndex;
    }

    // Reset slide timer so that it doesn't move as soon as you click the next slide
    resetTimer(timerFunction, msPerSlide);

    // Change each slides transform based on the current slide
    transformSlides();
    
}

function setSlide(slideNumber) {
    currentSlide = slideNumber

    transformSlides()
    resetTimer(timerFunction, msPerSlide)
}

