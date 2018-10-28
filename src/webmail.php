<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido Estimado Usuario</title>
    <link rel="stylesheet" href="main.css">
    <script src="jquery.js"></script>
</head>
<body>

    <div class="side-bar">
        <div class="side-bar-top">
            <h3><b>Folders</b></h3>
            <small>Last Refresh:</small>
            <br>
            <small>Sun, 2:20 pm</small>
            <br>
            <small><a href="">(Check Email)</a></small>
        </div>

        <div class="side-bar-bottom">
            <ul>
                <li><a href="javascript:load('component/inbox.php')">INBOX</a></li>
                <li><a href="">Borradores</a></li>
                <li><a href="">Enviados</a></li>
                <li><a href="">Papelera</a></li>
            </ul>
        </div>
    </div>

    <div class="right">
    <div class="top-bar">
        <table style="width: 100%;">
            <tr>
                <td style="text-align:right; background: #bcbcbc"><a href=""><b>Sign Out</b></a></td>
            </tr>
            <tr>
                <td>
                    <div class="menu-bar">
                        <div class="menu-left">
                            <ul>
                                <li><a href="javascript:load('component/compose.html')">Compose</a></li>
                                <li><a href="">Adresses</a></li>
                                <li><a href="">Folders</a></li>
                                <li><a href="">Options</a></li>
                                <li><a href="">Search</a></li>
                                <li><a href="">Help</a></li>
                                <li><a href="">Fetch</a></li>
                                <li><a href="">Calendar</a></li>
                            </ul>
                        </div>
                        <div class="menu-right">
                            <a href="">proyecto_so</a>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
        <div id="content">
            
        </div>
    </div>

</body>

<script>    
    function load(url)
    {
        $('#content').load(url);
    }

    load('component/inbox.php');
</script>
</html>