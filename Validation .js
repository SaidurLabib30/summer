function handlesubmit()

 
var first_name = document.getElementById("first_name").value;
var age = document.getElementById("age").value;
var phone = document.getElementById("phone").value;
var email = document.getElementById("email").value;
var insurance_provider = document.getElementById("insurance_provider").value;
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
var confirm_password = document.getElementById("confirm_password").value;


//Validation Input
if (first_name === "" ||age === "" || phone ==="" || email === "" || insurance_provider === ""|| insurance_policy_number === "")
   { alert ("Please Fill the Form");
return false;
   }
   

   if (!/^\d{5}$/.test(id))
   { alert ("Id must be 5 digit");
    return false;
   }
 
 
 
 
alert("Registration Complited \n " +
 
"First Name:" + first_name   + "\n" +
"Age: " + age + "\n" +
"phone Number:" + phone_number + "\n" +
"Email : " + email + "\n" );    
 

