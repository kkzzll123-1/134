<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>현재시각</title>
        <style>
            #current-time {
                color: blueviolet;
                font-weight: bold;
                font-size: 20pt
            }
        </style>
        <body>
            <hi>현재시각PHP</hi>
            <div id="current-time"><?= date("H:i:s") ?></div>

        </body>
    </head>
</html>