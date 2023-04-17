// Get all the elements with the activity class
const activities = document.querySelectorAll(".activity");

console.log(activities);

let currentOffset = 0;

let maxActivities = activities.length - 1;

function transformActivities() {
    activities.forEach((box, index) => {
        box.style.transform = `translateX(calc(${-100 * (currentOffset)}%))`;
    });
}

transformActivities();