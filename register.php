<?php session_start();
// if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
// 			echo "<script>alert('Incorrect verification code');</script>" ;
// 		} 
// 		else{
// 			echo "<script>alert('Verification code match !');</script>" ;
// 		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php
	include("includes/head.inc.php");
	?>
    <style>
    /* COMPACT CAPTCHA */

    .capbox {
        background-color: #BBBBBB;
        background-image: linear-gradient(#BBBBBB, #9E9E9E);
        border: #2A7D05 0px solid;
        border-width: 2px 2px 2px 20px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        display: inline-block;
        padding: 5px 8px 5px 8px;
        border-radius: 4px 4px 4px 4px;
    }

    .capbox-inner {
        font: bold 12px arial, sans-serif;
        color: #000000;
        background-color: #E3E3E3;
        margin: 0px auto 0px auto;
        padding: 3px 10px 5px 10px;
        border-radius: 4px;
        display: inline-block;
        vertical-align: middle;
    }

    #CaptchaDiv {
        color: #000000;
        font: normal 25px Impact, Charcoal, arial, sans-serif;
        font-style: italic;
        text-align: center;
        vertical-align: middle;
        background-color: #FFFFFF;
        user-select: none;
        display: inline-block;
        padding: 3px 14px 3px 8px;
        margin-right: 4px;
        border-radius: 4px;
    }

    #CaptchaInput {
        border: #38B000 2px solid;
        margin: 3px 0px 1px 0px;
        width: 105px;
    }

    /* STACKED CAPTCHA */

    /* .capbox {
        width: 100%;
        max-width: 220px;
        background-color: #BBBBBB;
        background-image: linear-gradient(#BBBBBB, #9E9E9E);
        border: #2A7D05 0px solid;
        border-width: 2px 2px 2px 20px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        display: inline-block;
        padding: 5px 15px 5px 15px;
        border-radius: 4px 4px 4px 4px;
    }

    .capbox-inner {
        font: bold 12px arial, sans-serif;
        color: #000000;
        background-color: #E3E3E3;
        margin: 8px auto 0px auto;
        padding: 5px 10px 5px 10px;
        border-radius: 4px;
    }

    #CaptchaDiv {
        font: normal 25px Impact, Charcoal, arial, sans-serif;
        font-style: italic;
        color: #000000;
        background-color: #FFFFFF;
        user-select: none;
        padding: 4px;
        border-radius: 4px;
    }

    #CaptchaInput {
        border: #38B000 2px solid;
        margin: 3px 0px 1px 0px;
        width: 98%;
    } */
    </style>



</head>

<body>
    <!-- start header -->
    <div id="header">
        <div id="menu">
            <?php
			include("includes/menu.inc.php");
			?>
        </div>
    </div>

    <div id="logo-wrap">
        <div id="logo">
            <?php
			include("includes/logo.inc.php");
			?>
        </div>
    </div>
    <!-- end header -->

    <!-- start page -->

    <div id="page">
        <!-- start content -->

        <div id="content">

            <div class="post">
                <h1 class="title">Welcome to Registeration.</h1>

                <div class="entry">
                    <br><br>
                    <?php




					if (isset($_GET['error'])) {
						echo '<font color="red">' . $_GET['error'] . '</font>';
						echo '<br><br>';
					}

					if (isset($_GET['ok'])) {
						echo '<font color="blue">You are successfully Registered..</font>';
						echo '<br><br>';
					}

					?>

                    <table>
                        <form action="process_register.php" method="POST" onsubmit="return checkform(this);">
                            <tr>
                                <td><b>Full Name :</b>&nbsp;&nbsp;</td>
                                <td><input type='text' size="30" maxlength="30" name='fnm'></td>

                            </tr>

                            <tr>
                                <td>&nbsp;
                            </tr>

                            <tr>
                                <td><b>User Name :</b>&nbsp;&nbsp;</td>
                                <td><input type='text' size="30" maxlength="30" name='unm'></td>
                                <td>&nbsp;</td>

                            </tr>

                            <tr>
                                <td>&nbsp;
                            </tr>

                            <tr>
                                <td><b>Password :</b>&nbsp;&nbsp;</td>
                                <td><input type='password' name='pwd' size="30"></td>

                            </tr>

                            <tr>
                                <td>&nbsp;
                            </tr>

                            <tr>
                                <td><b>Confirm Password:</b>&nbsp;&nbsp;</td>
                                <td><input type='password' name='cpwd' size="30"></td>

                            </tr>

                            <tr>
                                <td>&nbsp;
                            </tr>

                            <tr>
                                <td><b>Gender:</b>&nbsp;&nbsp;</td>
                                <td><input type="radio" value="Male" name="gender" id='m'><label>
                                        Male</label>&nbsp;&nbsp;&nbsp;
                                    <input type="radio" value="Female" name="gender" id='f'><label>Female</label>
                                </td>
                                <td>&nbsp;</td>
                            </tr>

                            <tr>
                                <td>&nbsp;
                            </tr>

                            <tr>
                                <td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
                                <td><input type='email' name='mail' size="30"></td>

                            </tr>

                            <tr>
                                <td>&nbsp;
                            </tr>

                            <tr>
                                <td><b>Contact No.:</b>&nbsp;&nbsp;</td>
                                <td><input type="text" pattern="[7-9]{1}[0-9]{9}" name='contact' size="30"></td>

                            </tr>

                            <tr>
                                <td>&nbsp;
                            </tr>


                            <tr>
                                <td><b>City:</b>&nbsp;&nbsp;</td>
                                <td>
                                    <select style="width: 195px;" name="city">

                                        <option>Bhadohi
                                        <option>Varanasi
                                        <option>Gorakhpur
                                        <option>Prayagraj
                                        <option>Lucknow
                                        <option>Raebareily
                                        <option>Bareily


                                    </select>

                            </tr>

                            <tr>
                                <td>&nbsp;
                            </tr>
                            <tr>
                                <td>

                                    <!-- </div>
                <div class="g-recaptcha" data-sitekey="6LeSOn4bAAAAABg7R950yo_n3Mt665NmjurIe_4n"></div>
                </td> -->
                                    <!-- <td> -->
                                    <!-- <input type="text" name="vercode" class="form-control" placeholder="Verfication Code" -->
                                    <!-- required="required"> -->
                                    <!-- </div>
            <div class="form-group small clearfix">
                <label class="checkbox-inline">Verification Code</label>
                <img src="captcha.php">
            </div>
            </td>
            </tr> -->

                                    <!-- START CAPTCHA -->
                                    <br>
                                    <div class="capbox">

                                        <div id="CaptchaDiv"></div>

                                        <div class="capbox-inner">
                                            Type the number:<br>

                                            <input type="hidden" id="txtCaptcha">
                                            <input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>

                                        </div>
                                    </div>
                                    <br><br>
                                    <!-- END CAPTCHA -->



                                    <div class="form-group">


                            <tr>
                                <td colspan='2' align='center'>
                                    <input type='submit' value="  OK  ">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>

            </div>


        </div>

        <!-- end content -->

        <!-- start sidebar -->
        <div id="sidebar">
            <?php
			include("includes/search.inc.php");
			?>
        </div>
        <!-- end sidebar -->
        <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end page -->

    <!-- start footer -->
    <div id="footer">
        <?php
		include("includes/footer.inc.php");
		?>
    </div>
    <!-- end footer -->
    <script type="text/javascript">
    // Captcha Script

    function checkform(theform) {
        var why = "";

        if (theform.CaptchaInput.value == "") {
            why += "- Please Enter CAPTCHA Code.\n";
        }
        if (theform.CaptchaInput.value != "") {
            if (ValidCaptcha(theform.CaptchaInput.value) == false) {
                why += "- The CAPTCHA Code Does Not Match.\n";
            }
        }
        if (why != "") {
            alert(why);
            return false;
        }
    }

    var a = Math.ceil(Math.random() * 9) + '';
    var b = Math.ceil(Math.random() * 9) + '';
    var c = Math.ceil(Math.random() * 9) + '';
    var d = Math.ceil(Math.random() * 9) + '';
    var e = Math.ceil(Math.random() * 9) + '';

    var code = a + b + c + d + e;
    document.getElementById("txtCaptcha").value = code;
    document.getElementById("CaptchaDiv").innerHTML = code;

    // Validate input against the generated number
    function ValidCaptcha() {
        var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
        var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
        if (str1 == str2) {
            return true;
        } else {
            return false;
        }
    }

    // Remove the spaces from the entered and generated code
    function removeSpaces(string) {
        return string.split(' ').join('');
    }
    </script>
</body>

</html>