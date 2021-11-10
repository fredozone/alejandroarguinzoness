particlesJS.load("particles-js", "js/particles.json", function () {
  console.log("callback - particles.js config loaded");
});

/*size name*/
$(document).ready(function () {
  var height = $(window).height();
  $(".div2").height(height);
});

$(document).ready(function () {
  if (screen.width <= 768) {
    document.getElementById("hidden").classList.remove("hidden");
    document.getElementById("hiddensecond").classList.remove("hidden");
    document.getElementById("hiddenthird").classList.remove("hidden");
    document.getElementById("hiddenfourth").classList.remove("hidden");
    document.getElementById("hiddenfive").classList.remove("hidden");
    document.getElementById("hiddensix").classList.remove("hidden");
    document.getElementById("hiddeneight").classList.remove("hidden");
    document.getElementById("hiddennine").classList.remove("hidden");
    document.getElementById("hiddenten").classList.remove("hidden");
  } else if (
    (screen.width > 769 && screen.height < 800) ||
    screen.width < 1820
  ) {
    var aboutheight = $("#aboutheight").height();
    document
      .getElementById("aboutheight")
      .setAttribute("style", "height:" + aboutheight + "px");
    var schoolheight = $("#schoolheight").height();
    document
      .getElementById("schoolheight")
      .setAttribute("style", "height:" + schoolheight + "px");
    var workheight = $("#workheight").height();
    document
      .getElementById("workheight")
      .setAttribute("style", "height:" + workheight + "px");
  }
});

//SCROLL ABOUT
$(document).ready(function () {
  $(window).scroll(function (event) {
    //add 60, because our nav has position fixed-top
    var scroll = $(window).scrollTop() + 60;
    //$(".scroll").html("Y: " + scroll );
    var coordenadas = $("#about").position();
    var school = $("#school").position();
    //$(".about").html("YY: " + coordenadas.top + " X: " + coordenadas.left);
    if (scroll >= coordenadas.top) {
      document.getElementById("abouta").style.color = "#fdcd3b";
      document.getElementById("schoola").style.color = "";
      document.getElementById("hidden").classList.remove("hidden");
      document.getElementById("hiddensecond").classList.remove("hidden");
      document.getElementById("hiddenthird").classList.remove("hidden");
      document.getElementById("hiddenfourth").classList.remove("hidden");
    }

    if (scroll < coordenadas.top) {
      document.getElementById("abouta").style.color = "";
    }
  });
});

//SCROLL SCHOOL
$(document).ready(function () {
  $(window).scroll(function (event) {
    //add 60, because our nav has position fixed-top
    var scroll = $(window).scrollTop() + 60;
    //$(".scroll").html("Y: " + scroll );
    var coordenadas = $("#school").position();
    //$(".school").html("YY: " + coordenadas.top + " X: " + coordenadas.left);
    if (scroll >= coordenadas.top) {
      document.getElementById("abouta").style.color = "";
      document.getElementById("schoola").style.color = "#fdcd3b";
      document.getElementById("worka").style.color = "";
      document.getElementById("hiddenfive").classList.remove("hidden");
      document.getElementById("hiddensix").classList.remove("hidden");
    }
  });
});

//SCROLL WORK
$(document).ready(function () {
  $(window).scroll(function (event) {
    //add 60, because our nav has position fixed-top
    var scroll = $(window).scrollTop() + 60;
    //$(".scroll").html("Y: " + scroll );
    var coordenadas = $("#work").position();
    //$(".school").html("YY: " + coordenadas.top + " X: " + coordenadas.left);
    if (scroll >= coordenadas.top) {
      document.getElementById("schoola").style.color = "";
      document.getElementById("worka").style.color = "#fdcd3b";
      document.getElementById("hiddeneight").classList.remove("hidden");
      document.getElementById("hiddennine").classList.remove("hidden");
      document.getElementById("hiddenten").classList.remove("hidden");
      /*document.getElementById("shool-img").classList.remove("hide-img");
				document.getElementById("shool-img").classList.add("show-img");*/
    }
  });
});

//SCROLL CONTACT
$(document).ready(function () {
  $(window).scroll(function (event) {
    //add 60, because our nav has position fixed-top
    var scroll = $(window).scrollTop() + 60;
    //$(".scroll").html("Y: " + scroll );
    var coordenadas = $("#contact").position();
    //$(".school").html("YY: " + coordenadas.top + " X: " + coordenadas.left);
    if (scroll >= coordenadas.top) {
      document.getElementById("worka").style.color = "";
      document.getElementById("contacta").style.color = "#fdcd3b";
      /*document.getElementById("shool-img").classList.remove("hide-img");
				document.getElementById("shool-img").classList.add("show-img");*/
    }
    if (scroll < coordenadas.top) {
      document.getElementById("contacta").style.color = "";
    }
  });
});

/*remove class DIV2 and height in tablet and smartphone*/
$(document).ready(function () {
  var width = screen.width;
  if (width < 1535) {
    var heightnull = document.getElementsByClassName("stylebackground");
    for (var i = 0; i < heightnull.length; i += 1) {
      heightnull[i].style.height = null;
    }
    var container = document.getElementsByClassName("title");
    for (var i = 0; i < container.length; i += 1) {
      container[i].style.height = null;
    }
  } else if (width > 1536) {
    //document.getElementsByClassName("stylebackground").classList.remove("div2");
    var container = document.getElementsByClassName("title");
    for (var i = 0; i < container.length; i += 1) {
      container[i].style.height = "754px";
    }
  }
});

$(document).ready(function () {
  $("#contact-form").bind("submit", function () {
    $.ajax({
      type: $(this).attr("method"),
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function (data) {
        if (data == "ok") {
          $("#alerta")
            .removeClass("alert-danger")
            .removeClass("hide")
            .removeClass("d-none")
            .addClass("alert-success");
          $(".answer").html("Congratulations! ");
          $(".mensaje-alert").html("Your message has been sent correctly.");
        }
      },
    });
    return false;
  });
});

function addError(field) {
  if (
    field.previousElementSibling &&
    field.previousElementSibling.className === "error"
  ) {
    // error message already showing
    return;
  }
  var error = document.createElement("div");
  error.innerHTML = "" + field.dataset.errorMsg;
  error.className = "error";
  field.parentNode.insertBefore(error, field);
}

function removeError(field) {
  if (
    field.previousElementSibling &&
    field.previousElementSibling.className === "error"
  ) {
    field.previousElementSibling.remove();
  }
}

function checkField(field) {
  if (!field.checkValidity()) {
    addError(field);
  } else {
    removeError(field);
  }
}

window.addEventListener("load", function (e) {
  var form = document.getElementById("contact-form");
  var firstName = form.firstName;
  firstName.dataset.errorMsg = "First Name is required.";
  var lastName = form.lastName;
  lastName.dataset.errorMsg = "Last Name is required.";
  var email = form.email;
  email.dataset.errorMsg = "Invalid Email";

  var message = form.message;
  message.dataset.errorMsg =
    "Your message must be between " +
    message.minLength +
    " and " +
    message.maxLength +
    " characters.";

  firstName.addEventListener("input", function (e) {
    checkField(firstName);
  });

  lastName.addEventListener("input", function (e) {
    checkField(lastName);
  });

  email.addEventListener("input", function (e) {
    checkField(email);
  });

  message.addEventListener("textarea", function (e) {
    checkField(message);
  });

  form.addEventListener("submit", function (e) {
    checkField(firstName);
    checkField(lastName);
    checkField(email);
    checkField(message);

    if (!form.checkValidity()) {
      e.preventDefault();
    }
  });
});
