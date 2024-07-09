function signup_validation() {
    //value get
    let username=document.getElementById("username").value;
    let email=document.getElementById("email-signup").value;
    let password=document.getElementById("password").value;
    let confirmpassword=document.getElementById("confirmpassword").value;
  
     // pattern
     let userpattern=/^\w{8,15}$/;
     let emailpattern=/\w+@[a-z]+\.[a-z]{2,4}[\.[a-z]]?/;
     let passwordpattern=/.{8,}/;
  
     // user value set
     if(username==""){
      document.getElementById("user-error").innerText="Username is required.";
     }else{
      document.getElementById("user-error").innerText="";
      
      if(userpattern.test(username)){
          document.getElementById("user-error").innerText="";
      }else{
          document.getElementById("user-error").innerText="Enter valid username.";
      }
  }
  // email value set
  if(email==""){
      document.getElementById("email-error").innerText="Email is required.";
  }else{
      document.getElementById("email-error").innerText="";
  
      if(emailpattern.test(email)){
          document.getElementById("email-error").innerText="";
      }else{
          document.getElementById("email-error").innerText="Enter a valid e-mail address.";
      }
  }
  //password value set
  if(password==""){
      document.getElementById("pass-error").innerText="Password is required.";
  }else{
      document.getElementById("pass-error").innerText="";
  
      if(passwordpattern.test(password)){
          document.getElementById("pass-error").innerText="";
      }else{
          document.getElementById( "pass-error" ).innerText = "Password must contain atleast 8 chracters.";
      }
  }
  }

function signup() {
    let a = document.getElementById("username").value;
    let b = document.getElementById("email-signup").value;
    let c = document.getElementById("password").value;
  
    if(a==""){
        document.getElementById("user-error").innerText="Username is required.";
        return false;
      }
      if(b==""){
        document.getElementById("email-error").innerText="Email is required.";
        return false;
      }
      if(c==""){
        document.getElementById("pass-error").innerText="Password is required.";
        return false;
      }
}