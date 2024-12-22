<?php
class windowMensajeSistema
{
    public function windowMensajeSistemaShow($mensaje, $enlace)
    {
        ?>
        <html>
            <head>
                <title>Mensaje del sistema</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f7f7f7;
                    }
                    .container {
                        max-width: 400px;
                        margin: 0 auto;
                        padding: 20px;
                        background-color: #fff;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                    }
                    .mensaje {
                        text-align: center;
                        font-size: 24px;
                        margin-bottom: 20px;
                        color: #8c0000;
                    }
                    .enlace {
                        text-align: center;
                        font-size: 18px;
                        color: #8c0000;
                        text-decoration: none;
                    }
                    .enlace:hover {
                        text-decoration: underline;
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <p class="mensaje"><strong><?php echo strtoupper($mensaje); ?></strong></p>
                    <p class="enlace"><?php echo $enlace; ?></p>
                </div>
            </body>
        </html>
        <?php
    }
}