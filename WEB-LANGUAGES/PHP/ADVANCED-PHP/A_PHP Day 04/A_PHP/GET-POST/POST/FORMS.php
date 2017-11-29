<html>
<head>
<title>Forms in HTML</title>
<link href='style.css' rel='stylesheet' type='text/css'/>
</head>
<body>
<form name='regForm' action='post.php' method='POST'>
<table align='center' border='1' width='75%' cellpadding='6' cellspacing='0'>
<tr><th colspan='2'>New User Please Register</th></tr>
<tr><td>Enter Name</td><td>
<input type='text' name='fname' placeholder='Upper Case Only' value='' id='regName'/>
</td></tr>
<tr><td width='32%'>Enter Email</td><td>
<input type='text' name='email' value='' id='regEmail'/>
</td></tr>
<tr><td>Enter DOB</td><td>
<input type='text' name='dob' id='regDob' value='' placeholder='YYYY-MM-DD'/>
</td></tr>
<tr><td>Enter Password</td><td>
<input type='password' name='pwd' id='regPwd' value=''/>
</td></tr>
<tr><td>Confirm Password</td><td>
<input type='password' name='cpwd' id='regCpwd' value=''/>
</td></tr>
<tr><td>Choose Gender</td><td>
<input type='radio' id='regGendm' name='gend' value='Male' /> <label for='regGendm'>Male</label>
<input type='radio' id='regGendf' name='gend' value='Female'/> <label for='regGendf'>Female</label>
</td></tr>
<tr><td>Choose Language</td><td>
<input type='checkbox' name='lang[]' id='regLange' value='English'/> Eng
<input type='checkbox' name='lang[]' id='regLangh' value='Hindi'/> Hin
<input type='checkbox' name='lang[]' id='regLangt' value='Telugu'/> <label for='regLangt'>Tel</label>
</td></tr>
<tr><td>Choose Country</td><td>
<select name='coun' id='regCoun'>
<option value=''>Please Select</option>
<option value='IN'>INDIA</option>
<option value='US'>UNITED STATES</option>
<option value='UK'>UNITED KINGDOM</option>
</select>
</td></tr>
<tr><td>Address</td><td>
<textarea rows='4' cols='20' name='addr' id='regAddr'></textarea>
</td></tr>
<tr><td colspan='2' align='right'>
<input type='submit' name='submit' value='Register !'/>
<input type='reset' value='Refresh !' name='cancel'/>
</td></tr>
</table>
</form>
</body>
</html>
<pre>













</pre>