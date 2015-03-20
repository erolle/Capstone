<?php 

?>
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="js/script.js"> </script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="Vendors/Inkblot/rorschach.js"></script>
        <script type="text/javascript" src="js/sha512.js"> </script>
        <link rel="stylesheet" type="text/css" href="css/app.css" />
    </head>
    <body>
    <div id="contente">
        <div id='divUsername' class='show'>
        	<h2>Inkblot Password Test</h2>
        	<p>Thank you for participating in this low fidelity prototype test. You will be asked to enter and e-mail address and to take two passwords that describe and above inkblot image. This is a simple test to informed future designs.</p>
            <label>Enter Email</label>
            <input id='username' type='text' onkeydown="if (event.keyCode == 13) document.getElementById('submmitUserName').click()" autocomplete="off" />
            <button id='submmitUserName' onclick="Username(document.getElementById('username'))">Next 1</button>
        </div>
        <div id='divPass1' class='hide'>
             <canvas id='canPass1' class='hide'>get a new browser pleae yours sucks!</canvas><br/>
             <!--<img src="img/Inkblot1.png" alt="inkblot">-->
             <canvas id='rorschachCanvas1' width="800" height="400">
    This text is displayed if your browser does not support HTML5 Canvas.
    </canvas><br/>
             <label>Enter password 1. Type what the inkblot looks like</label>
             <input id='pass1'  type="password" onkeydown="if (event.keyCode == 13) document.getElementById('submitPass1').click()" autocomplete="off"/>
             <button id='submitPass1'  onclick="Pass1(document.getElementById('pass1'), '1')"> Next 2</button>
        </div>
        <div id='divPass2' class='hide'>
             <canvas id='canPass2' class='hide'>get a new browser pleae yours sucks!</canvas><br/>
             <br/>
             <label>Enter password 2. Type what the inkblot looks like</label>
             <input id='pass2' type="password" onkeydown="if (event.keyCode == 13) document.getElementById('submitPass2').click()" autocomplete="off"/>
             <button id='submitPass2'  onclick="Pass2(document.getElementById('pass2'))"> Next 3</button>
        </div>
        
    </div>
    <!-- Run the rorschach script  ONE-->
    <script type="text/javascript">
    var Pass1 = Pass1();
    // Create a Rorschach inkblot painter
    var painter = new RorschachPainter();
    // Set the amount of ink range
    painter.setInkAmountRange(2500, 25000);

    // Set the maximum blob dimensions
    painter.setMaximumBlobDimensions(7, 5);

    // Set the palette to a few colors
    painter.setPalette([
      new Color(187, 54, 54),
      new Color(127, 187, 95),
      new Color(57, 77, 127),
    ]);

    // Paint the inkblot on the canvas element
    //painter.paint("rorschachCanvas");

    </script>
    </body>
</html>
