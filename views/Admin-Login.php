<?php include '../controllers/Admin-Login-Controller.php'?>

<!DOCTYPE html>
<html>
<head>
    <title>Login-Admin</title>
</head>
    <body>
		<br>
		<br>
		<h1 style="text-align:center ;color:lightslategrey";>**Admin Login**</h1>
		<br>
		<br>
	
		<form action="#" method="post">
        
        <table align="center">
            <tr>
                <td>Username:</td>
                <td>
                    <input type="text" name="username" id="username"
                           value="<?php if (isset($username)) echo $username; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                 <td colspan="3" style="text-align: center">
                        <span style="color: red"><?php if (isset($usernameError)) {
                                echo $usernameError;
                            } ?></span>
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
					<input type="password" name="password" id="password">
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="3" style="text-align: center">
                        <span style="color: red"><?php if (isset($passwordError)) {
                                echo $passwordError;
                            } ?></span>
                </td>
            </tr>
            <tr>
				<td></td>
                <td align="center"><input type="submit" value="Login" name="button"></td>
            </tr>


            <tr>
				<td></td>
                <td align="center"></td>
            </tr>

            <tr>
				<td></td>
                <td align="center"></td>
            </tr>

            <tr>
                <td></td>
                <td align="center"> <span style="color:red";><?php if (isset($errorMessage)) echo $errorMessage; ?></span> </td>
            </tr>
        </table>
        
        
		</form>
	</body>
</html>