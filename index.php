<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="jquery-2.1.4.min.js"></script>
        <style>
            #primer_parrafo{
                background-color: red;
            }
            
        </style>
    </head>
    <body>
        <p id="primer_parrafo">Primer parrafo</p><br>
        <p>Segundo parrafo</p><br>
        <p>Tercer parrafo</p>
        <script>
//        alert($("#primer_parrafo").css("background-color"));

        $("#primer_parrafo").css("background-color","blue");
        
        </script>
    </body>
</html>
