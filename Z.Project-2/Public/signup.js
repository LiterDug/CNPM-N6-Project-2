// querySelector returns the first element class matches a CSS selector
const inputUsernameRegister = document.querySelector(".input-signup-username");
const inputPasswordRegister = document.querySelector(".input-signup-password");
const btnRegister = document.querySelector(".signup__signInButton");

// Add a click event to the element with the ID btnRegister
btnRegister.addEventListener("click", (e) => {
  e.preventDefault();
  if (
    inputUsernameRegister.value === "" ||
    inputPasswordRegister.value === ""
  ) {
    alert("vui lòng không để trống");
  }
  else {
    const user = {
      username: inputUsernameRegister.value,
      password: inputPasswordRegister.value,
    };
    // Creates a user object
    let json = JSON.stringify(user);
    // Stores the JSON string in local storage using the username as the key
    localStorage.setItem(inputUsernameRegister.value, json);
    alert("Đăng Ký Thành Công");
    window.location.href = "index.html";
  }
});
