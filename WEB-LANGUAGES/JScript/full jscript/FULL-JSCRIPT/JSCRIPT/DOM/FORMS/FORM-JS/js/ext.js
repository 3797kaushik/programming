function doDel(){
	c = confirm('Are you Sure to Delete Values');
	return c;
}

function doValidate(v){
	n = v.fname.value;
	e = v.email.value;
	d = v.dob.value;
	p = v.pwd.value;
	c = v.cpwd.value;
	m = v.mob.value;
	i = v.pic.value;

n_pat = /^[a-z.' ]{1,30}$/i;

e_pat = /^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,8}$/;

d_pat = /^(19|20)?[0-9]{2}[- -.](0?[1-9]|1[012])[- -.](0?[1-9]|[12][0-9]|3[01])$/;

p_pat = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

m_pat = /^[7-9][0-9]{9}$/;

i_pat = /\.(jpe?g|png|gif)/i;

	error = "";

if(!n_pat.test(n)){
	error+= "Min 2 Char With Alphabets Allowed<br>";
}
 
if(!e_pat.test(e)){
	//error+= "Invalid Email Given<br>";
	document.getElementById('regEmail').style.border = "3px solid red";
} else {
	document.getElementById('regEmail').style.border = "";	
}

if(!d_pat.test(d)){
	//error+= "Format Should Be YYYY-MM-DD<br>";
	document.getElementById('ddyn').innerHTML = "<img src='img/cross.png'/>";
} else {
	document.getElementById('ddyn').innerHTML = "<img src='img/tick.png'/>";
}

if(!p_pat.test(p)){
	error+= "<ul><li>Should have Min 6 and Max 16</li><li>Should have Atleast One Number</li><li>Should have Special Char as !@#$%^&*</li></ul>";
}

if(c != p){
	error+= "Mismatch Password<br>";
}

if(!m_pat.test(m)){
	//error+= "Invalid Mobile<br>";
	document.getElementById('mdyn').innerHTML = "Invalid Mobile";
} else {
	document.getElementById('mdyn').innerHTML = "";
}

if(!i_pat.test(i)){
	error+= "Image should have jpg | jpeg | png | gif Extensions only<br>";
}


if(error == ''){
	return true;
} else {
	document.getElementById('eBox').style.display = 'block';
	document.getElementById('eMsg').innerHTML = error;
	return false;
}

}

function doHide(){
	document.getElementById('eBox').style.display = 'none';
}