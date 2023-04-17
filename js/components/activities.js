// Get all the elements with the activity class
const activities = document.querySelectorAll(".activity");

const previous = document.getElementById("prev");
const next = document.getElementById("next");

let currentOffset = 0;

let maxActivities = activities.length - 1;

function transformActivities() {
    activities.forEach((box) => {
        box.style.transform = `translateX(calc(${-100 * (currentOffset)}%))`;
    });

    if(currentOffset > 0) {
        if(previous.classList.contains("hidden")) {
            previous.classList.toggle("hidden");
        }
    }
    else if(currentOffset == 0) {
        if(!previous.classList.contains("hidden")) {
            previous.classList.toggle("hidden");
        }
    }

    if(currentOffset < maxActivities - 2) {
        if(next.classList.contains("hidden")) {
            next.classList.toggle("hidden");
        }
    }
    else if(currentOffset >= maxActivities - 2) {
        if(!next.classList.contains("hidden")) {
            next.classList.toggle("hidden");
        }
    }
}

transformActivities();

function moveBoxes(moveOffsetBy) {
    let newOffset = currentOffset + moveOffsetBy;

    if( newOffset > maxActivities ) {
        currentOffset = 0;
    }
    else if (newOffset < 0) {
        currentOffset = maxActivities;
    }
    else {
        currentOffset = newOffset;
    }

    transformActivities();
}