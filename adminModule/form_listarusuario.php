<?php
class formListar {
    public function formListarShow($resultado) {
        ?>
        <html>
        <head>
            <title>Formulario de Usuarios</title>
            <style>
                /* Estilos CSS */
                body {
                    font-family: Arial, sans-serif;
                }

                h1 {
                    text-align: center;
                    color: #8c1f1f;
                    margin-top: 50px;
                }

                .styled-table {
                    width: 100%;
                    border-collapse: collapse;
                    margin: 25px 0;
                    font-size: 0.9em;
                    font-family: sans-serif;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                }

                .styled-table thead tr {
                    background-color: #8c1f1f;
                    color: #fff;
                    text-align: left;
                }

                .styled-table th,
                .styled-table td {
                    padding: 12px 15px;
                }

                .styled-table tbody tr {
                    border-bottom: 1px solid #dddddd;
                }

                .styled-table tbody tr:nth-of-type(even) {
                    background-color: #f3f3f3;
                }

                .styled-table tbody tr:last-of-type {
                    border-bottom: 2px solid #8c1f1f;
                }
            </style>
        </head>
        <body>
            <h1>Formulario de Usuarios</h1>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Password</th>
                        <th>Estado</th>
                        <th>Privilegios</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($resultado as $fila) {
                        echo "<tr>";
                        echo "<td>" . $fila["login"] . "</td>";
                        echo "<td>" . $fila["password"] . "</td>";
                        echo "<td>" . $fila["estado"] . "</td>";
                        echo "<td>" . $fila["idPriv"] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
                <button type='button' onclick="window.location.href='../index.php'">Volver</button>
            </table>
        </body>
        </html>
        <?php
    }
}