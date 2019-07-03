<html>
 
<head>
 
    <title>Registration Form</title>
 
    <script type="text/javascript">
        function validate_form() {
            if (document.emp.emp_name.value == "") {
                alert("Please fill in the 'Your Employee Name' box.");
                return false;
            }
            if (document.emp.num.value == "") {
                alert("Enter Employee Number");
                return false;
            }
            alert("sucessfully Submitted");
 
 
 
            if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.emp.email_id.value)) {
                alert("You have entered an invalid email address!")
                return (false)
            }
        }
 
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if (charCode != 46 && charCode > 31 &&
                (charCode < 48 || charCode > 57)) {
                alert("Enter Number");
                return false;
            }
            return true;
        }
 
 
        //-->
    </script>
 
</head>
 
<body bgcolor="#FFFFFF">
    <form name="emp" action="home.php" onsubmit="return validate_form();" method="post">
        <table align="center" width=40% width="100%" cellspacing="2" cellpadding="2" border="5">
            <tr>
                <td colspan="2" align="center"><b>Employee Registration Form.</b></td>
 
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Employee Name<span style="color:red">*</span></td>
 
                <td width="57%"><input type="text" value="" name="emp_name" size="24"></td>
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Employee Number<span style="color:red">*</span></td>
                <td width="57%">
                    <input type="text" value="" name="num" onkeypress="return isNumberKey(event)" size="24"></td>
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Address</td>
 
                <td width="57%"><textarea rows="4" maxlen="200" name="S2" cols="20"></textarea></td>
            </tr <tr>
 
            <td align="left" valign="top" width="41%">Contact Number</td>
            <td width="57%">
                <input type="text" value="" onkeypress="return isNumberKey(event)" name="txtFName1"></td>
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Job Location</td>
                <td width="57%"><select name="mydropdown">
<option value="Default">Default</option>
<option value="Chennai">Chennai</option>
<option value="Bangalore">Bangalore</option>
<option value="Chennai">Pune</option>
<option value="Bangalore">Mysore</option>
<option value="Chennai">Chandigarh</option>
 
</select></td>
 
 
            </tr>
 
            <tr>
                <td align="left" valign="top" width="41%">Designation</td>
                <td width="57%">
                    <select name="mydropdown1">
<option value="Default">Default</option>
<option value="Systems Engineer">Systems Engineer</option>
<option value="Senior Systems Engineer">Senior Systems Engineer</option>
<option value="Technology Analyst">Technology Analyst</option>
<option value="Technology Lead">Technology Lead</option>
<option value="Project Manager">Project Manager</option>
 
 
</select></td>
 
 
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Email<span style="color:red">*</span></td>
                <td width="57%">
                    <input type="text" value="" name="email_id" size="24"></td>
            </tr>
 
            <tr>
                <td colspan="2">
                    <p align="center">
                        <input type="submit" value="  Submit" name="B4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="  Reset All   " name="B5"></td>
            </tr>
 
        </table>
    </form>
</body>
 
</html>
<?php
if(isset($_POST["B4"]))
{
	$full_name = $_POST["emp_name"];
	$emp_no = $_POST["num"];
	$add = $_POST["S2"];
	$contact = $_POST["txtFName1"];
	$location = $_POST["mydropdown"];
	$desg = $_POST["mydropdown1"];
	$email = $_POST["email_id"];
	
define("host", "localhost");
define("u_name","root");
define("password", "WxRzgL6N3yJP7g5H");
define("db","emp");
$db_conn = mysqli_connect(host,u_name,password,db);

$query = mysqli_query($db_conn,"insert into emp_info(name, emp_id, address, mobile, loc, desg, email) VALUES
 ('$full_name','$emp_no','$add','$contact','$location','$desg','$email')");
 if(!$query)
 {
	 echo mysqli_error($db_conn);
 }

}

?>
