<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body onload="home()">

    <nav style="display:flex;gap:20px;">
        <button onclick="home()">Home</button>
        <a onclick="about()">About</a>
        <a onclick="contact()">contact</a>
    </nav>

    <div id="demo">

    </div>
    
    <script> 

        function home(){
              document.getElementById("demo").innerHTML = "<?php require("../nav/Home.php"); ?>";
        }
        function about(){
            document.getElementById("demo").innerHTML = "<?php require("../nav/About.php"); ?>" ;
        }
        function contact(){
            document.getElementById("demo").innerHTML = "<?php require("../nav/Contact.php"); ?>";
        }

    </script>

    



 
      

</body>
</html>