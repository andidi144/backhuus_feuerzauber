function openNav() {
  if (document.getElementById("mySidenav").style.left === "0px") {
    document.getElementById("mySidenav").style.left = "-250px";
    document.getElementById("slide").style.left = "0";
    document.getElementById("openbtn").style.left = "0";
  } else {
    document.getElementById("mySidenav").style.left = "0";
    document.getElementById("slide").style.left = "250px";
    document.getElementById("openbtn").style.left = "250px";
  }
};

function changeColor(color) {
  var body = document.getElementsByTagName("body")[0];
  body.classList = "";
  body.classList.add("theme-" + color);
  document.cookie = "theme=" + color;
};

function jqueryLoaded(){
  $(document).ready(function(){

    var ageField = $("#age")[0];
    if(ageField) {
      ageField.innerHTML = ~~((Date.now() - new Date(1999, 3, 31)) / (31557600000));
    }

    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
    
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });

    var color = document.cookie.split('heme=')[1].split(';')[0];
    if (color) {
      changeColor(color);    
    }
    else {
      changeColor('white');
    } 
  })
};