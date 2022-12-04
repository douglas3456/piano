<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Piano</title>
</head>
<header>trabalho</header>

<body>
<h1> Piano virtual</h1>

<p>botões do teclado</p>
<h3> a  s  d  f  g  h  j  k l ç</h3>
<h2>z  x  c  v  b  n  m</h2>  
<div class= "teclado" >
     <div class="oitavo" ot1>
   
 
     
     <div class="branca-key"   id="teste-Ca" onclick="somSi();"> </div>
     <div class="preta-key" cs  id="teste-do"   onclick="somDo();"></div>
      <div class="branca-key" id="teste-d" onclick="somLa();" ></div>
      <div class="preta-key" ds id="teste-re"onclick="somRe1();"></div>
      <div class="branca-key" id="teste-e" onclick="somFa();"></div>
      <div class="branca-key" id="teste-f"  onclick="somDoagudo();"></div>
      <div class="preta-key" fs id="teste-mi" onclick="somMi();"></div>
      <div class="branca-key" id="teste-t" onclick="somSol();"></div>
      <div class="preta-key" gs id="teste-sol" onclick="somLagudo();"></div>
      <div class="branca-key"  id="teste-a" onclick="somRe();"></div>
     <div class="preta-key" vu id="teste-b"  onclick="somSolagudo();"></div>
     <div class="branca-key" id="teste-fa"  onclick="somSiagudo();"> </div>
       
  </div> 
  <div class="oitavo" ot2>
      
      <div class="branca-key" id="teste-rf"  onclick="somFaagudo();"> </div>
       <div class="preta-key" cs id="teste-du" onclick="somMiagudo();"></div>
       <div class="branca-key" id="teste-dr" onclick="somDo2();"></div>
       
       <div class="preta-key"  ds id="teste-pi"onclick="somReagudo();"></div>
       <div class="branca-key" id="teste-o"onclick="somFaagudo4();"></div>
      
   </div>  
      
       

     
   </div>
   
   


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>
<script src="script.js"></script>
  </body>
</html>
