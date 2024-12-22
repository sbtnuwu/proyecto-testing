<?php
class formAutenticarUsuario
{
   public function formAutenticarUsuarioShow()
    {
        ?>
        <html>

        <head>
            <title>Login</title>
            <link rel="stylesheet" type="text/css" href="./style/style.css">
            <style>
 .container {
    margin-top: 50px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.logo {
    margin-bottom: 5px;
    display: flex;
    justify-content: center;
}

.Logo {
    align-items: center;
    justify-content: center;
    margin-bottom: 5px;
}
.form-table {
    text-align: center;
}
            </style>
        </head>

        <body>
            <div class="container">
                <div class="logo">
                    <img src="./img/LogoVarsa.png" alt="Logo">
                </div>
                <form name='form1' method='post' action='./securityModule/getUsuario.php'>
                    <table class="form-table" border='0' align='center'>
                        <tr>
                            <td>Usuario:</td>
                            <td><input name='txtLogin' type='text' /></td>
                        </tr>
                        <tr>
                            <td>Contraseña:</td>
                            <td><input name='txtPassword' type='password' /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input name='btnLogin' type='submit' value='Ingresar' /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </body>

        </html>
        <?php
    }


}
?>
