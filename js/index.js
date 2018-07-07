	var loginModal = document.getElementById('loginModal');

var signupModal = document.getElementById('signupModal')

var loginBtn = document.getElementById('loginBtn');

var signupBtn = document.getElementById('signupBtn');

var closeBtn = document.getElementById('close');

var teachercheck = document.getElementById('teacheck');

var loginform = document.forms.loginform;

var signupform = document.forms.signupform;

loginBtn.addEventListener('click', loginFun);

signupBtn.addEventListener('click', signupFun);

closeBtn.addEventListener('click', closeFun);

loginform.addEventListener('submit', loginvalidFun);

signupform.addEventListener('submit', signupvalidFun);
 
function loginFun(){
	loginModal.style.display = 'block';
}

function signupFun(){
	signupModal.style.display = 'block';
}

function closeFun(){
	if (loginModal.style.display == 'block') {
		loginModal.style.display = 'none';
		teachercheck.checked = false;
	}
	else if (signupModal.style.display == 'block'){
		signupModal.style.display = 'none';
	}
}

function loginvalidFun(){
	var username = document.getElementById('logusername').value;
	var password = document.getElementById('logpassword').value;
	if(username.match(/^[a-z0-9]+$/i)){
		if(8<=password.length){
			if(password.length<16){
				return true;
			}
		}
		else{
			alert('Please enter valid password');
			return false;
		}	
	}
	else{
		alert("Please enter valid username");
		return false;
	}
	
}

function signupvalidFun(){
	var name = document.getElementById('name').value;
	var erpno = document.getElementById('erpno').value;
	var username = document.getElementById('signusername').value;
	var password = document.getElementById('signpassword').value;
	var repassword = document.getElementById('re-password').value;
	var email = document.getElementById('email').value;
	var year = document.signupform.year;
	var gender = document.signupform.gender;
        
           

	if(String(name).match(/^[a-z ]+$/i)){
		if (gender[0].checked == true || gender[1].checked == true || gender[2].checked == true){
				if(String(erpno).match(/^[a-z0-9]+$/i)){
					if(year[0].checked == true || year[1].checked == true || year[2].checked == true || year[3].checked == true){
						if(String(email).match(/\S+@\S+\.\S+/)){
							if (String(username).match(/^[a-z0-9]+$/i)) {
								if (password.length >= 8 && password.length < 16) {
									if (password.length == repassword.length) {
											return true;
									}
									else{alert('Please enter same passwords');
										//document.signupform.signpassword.style.border = "1px solid red";
										//document.signupform.re-password.style.border = "1px solid red";
										return false;
									}
								}
								else{alert('Password should have length 8-16');
								//document.signupform.signpassword.style.border = "1px solid red";
									return false;
								}
							}
							else{alert('Username should not contain any symbol');
								//document.signupform.signusername.style.border = "1px solid red";
								return false;
							}
						}
						else{alert('Please enter valid email-id');
							//document.signupform.email.style.border = "1px solid red";
							return false;
						}
					}
					else{alert('Please select year');
						//document.signupform.year.style.border = "1px solid red";
						return false;
					}
				}
				else{alert('Please enter valid ERP no');
					//document.signupform.erpno.style.border = "1px solid red";
					return false;
				}
		}
		else{alert('Please select gender');
			//document.signupform.gender.style.border = "1px solid red";
			return false;
		}
	}
	else{alert('Please enter valid name');
		//document.signupform.name.style.border = "1px solid red";
		return false;
	}
}	 
	


