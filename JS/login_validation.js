function validate() {
      if(document.login.username.value=='') {
            alert("Please enter your username");
            return false;
      }

      if(document.login.password.value=='') {
            alert("Please enter your password");
            return false;
      } 
	  return confirm("Do you want to login?");
}