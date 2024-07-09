function login() {
    let a = document.getElementById("name").value;
  let b = document.getElementById("password").value;

  if(a==""){
      document.getElementById("user-error").innerText="Email is required.";
      return false;
    }
    if(b==""){
      document.getElementById("pass-error").innerText="Password is required.";
      return false;
    }
}