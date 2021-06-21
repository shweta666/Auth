
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;
  
  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
    dropdownContent.style.display = "none";
    } else {
    dropdownContent.style.display = "block";
    }
    });
  }



function validation()
{
  var name = document.getElementById('name').value;

  var email = document.getElementById('email').value;

  var password = document.getElementById('password').value;

  var password_confirm = document.getElementById('password_confirm').value;

  var phone = document.getElementById('phone').value;

  // if (name == "")
  // {
  //   document.getElementById('username').innerHTML="Please enter name";
  //   return false;
  // }

  if ((name.length<=2) || (name.length>10))
  {
    document.getElementById('username').innerHTML="Name length must be between 2 to 10 charatcter";
    return false;
  }

  if (!isNaN(name))
  {
    document.getElementById('username').innerHTML="Only character are allowed in name";
    return false;
  }

  // if (email.indexOf('@')<=0)
  // {
  //   document.getElementById('email_id').innerHTML="@ is at invalid position";
  //   return false;
  // }

  // if ((email.charAt(email.length-4!='.') && (email.charAt(email.length-3!='.'))
  // {
  //   document.getElementById('email_id').innerHTML=". at invalid position";
  //   return false;
  // }

  if ((password.length<=5) || (password.length>15))
  {
    document.getElementById('pass').innerHTML="Password length must be between 5 to 15 characters";
    return false;
  }

  if (password!=password_confirm)
  {
    document.getElementById('con_pass').innerHTML="Passwords are not matching";
    return false;
  }

  if (isNaN(phone))
  {
    document.getElementById('mobile').innerHTML="Enter digits only";
    return false;
  }

  if (phone.length!=10)
  {
    document.getElementById('mobile').innerHTML="Phone number must contain 10 digits";
    return false;
  }
}


// name of the image appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});


// preview image

function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#preview').attr('src', e.target.result)
          .width(200)
          .height(150);
      }

      reader.readAsDataURL(input.files[0]);
  }
}

$("#image").change(function(){
  readURL(this);
});