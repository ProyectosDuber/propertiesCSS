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
        <input value="+" type="button" id="aumentar" />
         <input value="-" type="button" id="disminuir" />
        <script>
//        alert($("#primer_parrafo").css("background-color"));

        $("#primer_parrafo").css("background-color","blue");
        var aumenta = document.getElementById("aumentar").addEventListener("click",tamano,false);
        var disminulle = document.getElementById("disminuir").addEventListener("click",tamano,false);
        
        function tamano(fun){
          
            if(fun.target==aumentar){
              
               var tamanoDef = parseInt($("#primer_parrafo").css("font-size")) ;
           
               $("#primer_parrafo").css("font-size",tamanoDef*2);
            }else if(fun.target==disminuir){
                var tamanoDef = parseInt($("#primer_parrafo").css("font-size")) ;
    
           
           
           if(tamanoDef >8){
                $("#primer_parrafo").css("font-size",tamanoDef*0.95);
           }else{
               alert("Tamaño minimo admitido");
           }
              
            }
        }
        
        
        </script>
    </body>
</html>
