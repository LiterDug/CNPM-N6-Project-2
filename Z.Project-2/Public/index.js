// querySelector returns the first element class matches a CSS selector
const inputUsername = document.querySelector(".input-login-username");
const inputPassword = document.querySelector(".input-login-password");
const btnLogin = document.querySelector(".login__signInButton");

// Add a click event to the element with the ID btnLogin
btnLogin.addEventListener("click", (e) => {

  // prevents the default behavior of the form submit the form data to the server.
  e.preventDefault();
  if (inputUsername.value === "" || inputPassword.value === "") {
    alert("vui lòng không để trống");
  } else {
    
    // get user data from local storage based on the entered username:
    const user = JSON.parse(localStorage.getItem(inputUsername.value));
    if (
      user.username === inputUsername.value &&
      user.password === inputPassword.value
    ) {
      alert("Đăng Nhập Thành Công");
      window.location.href ="home.html";
    } else {
      alert("Đăng Nhập Thất Bại");
    }
  }
});



