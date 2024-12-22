<?php
class WindowBienvenidaSistema
{
    public function WindowBienvenidaSistemaShow($listaPrivilegios)
    {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Bienvenido: <?php echo htmlspecialchars($_SESSION['login'], ENT_QUOTES, 'UTF-8'); ?></title>
            <link rel="stylesheet" type="text/css" href="./style/style.css">
            <style>
                body {
                    background-color: #77e4ff; /* Color de fondo */
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }

                .container {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    padding: 20px;
                }

                .privilege-box {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    width: 220px;
                    padding: 15px;
                    margin: 10px;
                    border: 1px solid #ccc;
                    border-radius: 8px;
                    background-color: #e8c6ae; 
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
                }

                .privilege-box:hover {
                    transform: scale(1.05);
                    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
                }

                .privilege-box img {
                    width: 70px;
                    height: 70px;
                    margin-bottom: 10px;
                }

                .privilege-box input[type="submit"] {
                    padding: 10px 20px;
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    font-size: 16px;
                    transition: background-color 0.2s, transform 0.2s;
                }

                .privilege-box input[type="submit"]:hover {
                    background-color: #0056b3;
                    transform: scale(1.1);
                }
            </style>
        </head>
        <body>
            <div class="container">
                <?php foreach ($listaPrivilegios as $privilegio) : ?>
                    <div class="privilege-box">
                        <img src="../img/<?php echo htmlspecialchars($privilegio['iconPriv'], ENT_QUOTES, 'UTF-8'); ?>" alt="Icono">
                        <form method="POST" action="<?php echo htmlspecialchars($privilegio['pathPriv'], ENT_QUOTES, 'UTF-8'); ?>">
                            <input type="submit" value="<?php echo htmlspecialchars($privilegio['labelPriv'], ENT_QUOTES, 'UTF-8'); ?>"
                                    name="<?php echo htmlspecialchars($privilegio['buttonPriv'], ENT_QUOTES, 'UTF-8'); ?>" />
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </body>
        </html>
        <?php
    }
}
