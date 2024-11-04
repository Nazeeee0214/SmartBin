const displayTime = document.querySelector(".display-time");
// Time
function showTime() {
  let time = new Date();
  displayTime.innerText = time.toLocaleTimeString("en-US", { hour12: false });
  setTimeout(showTime, 1000);
}

showTime();

// Date
function updateDate() {
  let today = new Date();

  // return number
  let dayName = today.getDay(),
    dayNum = today.getDate(),
    month = today.getMonth(),
    year = today.getFullYear();

  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  const dayWeek = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];
  // value -> ID of the html element
  const IDCollection = ["day", "daynum", "month", "year"];
  // return value array with number as a index
  const val = [dayWeek[dayName], dayNum, months[month], year];
  for (let i = 0; i < IDCollection.length; i++) {
    document.getElementById(IDCollection[i]).firstChild.nodeValue = val[i];
  }
}

updateDate();

let slideIndex = 0;

function showSlides() {
  const slides = document.getElementsByClassName("slide");

  // Hide all slides initially
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; // Hide the slide
  }

  slideIndex++; // Increment the slide index
  if (slideIndex > slides.length) {
    slideIndex = 1; // Reset to the first slide
  }

  slides[slideIndex - 1].style.display = "block"; // Show the current slide
  slides[slideIndex - 1].classList.add("fade"); // Add fade class for animation

  // Show the current slide for 3 seconds before hiding it
  setTimeout(() => {
    slides[slideIndex - 1].style.display = "none"; // Hide after display time
    showSlides(); // Call the function recursively
  }, 3000);
}

// Start the slideshow
showSlides();
