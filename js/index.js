
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
    }
}
}

window.onscroll = function() {
if (window.scrollY > 0) {
    document.getElementsByTagName("header")[0].classList.add("change");
} else {
    document.getElementsByTagName("header")[0].classList.remove("change");
}
};


// Select the input box and the icon element
var inputBox = document.getElementById('src-box');
var icon = document.getElementById('src-icon');

// Attach an event listener for the input box's click event
inputBox.addEventListener('click', function() {
    // Add the 'icon-moved' class to the icon element
    icon.classList.add('icon-moved');
});


