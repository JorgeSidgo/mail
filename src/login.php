<?php?>

<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto SO - Login</title>
</head>
<body>
    <center>
        <img src="img/logo.png" alt="">
    </center>
    <center>
    <small>SquirrelMail version 1.4.22-16-e17</small>
        <br>
        <small>By the SquirrelMail Project Team</small>
    </center>
        <center>
        <p class="title" style="background:#dcdcdc; width: 350px;"><b>Proyecto SO Login</b></p>  
        </center>

        
        <form action="procLogin.php" method="POST" id="frmLogin">
            <center>
                <table>
                    <tr>
                        <td style="text-align: right"><label for="user">Name:</label></td>
                        <td><input name="nom" type="text"></td>
                    </tr>
                    <tr>
                        <td><label for="pass">Password:</label></td>
                        <td><input name="pass" type="password"></td>
                    </tr>
                </table> 
            </center>           
            <br>
            <center>
                <button type="submit">Login</button>
            </center>
            
        </form>

</body>
</html>