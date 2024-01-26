<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>el quesito graciosito</title>
        <style>
            .contenedor{
                width: 300px;
                height: 300px;
                margin: 40px;
                background: orange;
                position: relative;
                z-index: 100;

            }
            .hijo{
                width: 100px;
                height: 100px;
                background: blue;
                position: relative;
                top: -20px;
                left: -20px;
                z-index: 10;
            }

        </style>
    </head>
    <body>
        <div class="contenedor">
        <div class="hijo"></div>
        </div>
        </body>
</html>