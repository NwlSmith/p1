<?php include("random.php");?>
<!DOCTYPE html>
<html lang=en>
    <head>
        <title>p1</title>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,200i" rel="stylesheet">
        <style>
            body {
                background-color: rgb(5, 5, 5);

                text-align: center;
                font-family: Raleway, Impact, "Trebuchet MS", "Courier New";
                color: rgb(240, 240, 240);
                width: 60%;
                margin-left: 20%;
                font-weight: bold;
            }

            #quote {
                border: 5px solid rgb(240, 240, 240);
                font-size: 1.2em;
            }

        </style>
    </head>
    <body>
        <h1>Nate Smith</h1>
        <img src="cat.jpg" alt="me">
        <p>Hi everyone!<br>
            My name is Nate and I am from Jamaica Plain, MA. I work at a place called Einstein's Workshop, a STEM education center for middle school aged students, where I teach a class on 3D printing. I am currently on a gap year as I transfer from one university to another, and in the meantime, I am taking courses to fulfill requirements and also courses that I think will be useful in the future. I am planning on entering a career in game design with a focus on programming, and I am currently developing a curriculum for a new course at my job on making games using Unity.</p>

        <p id="quote">
            <?php echo $quote; ?>
        </p>

    </body>

</html>