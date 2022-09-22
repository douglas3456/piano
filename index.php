<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Piano</title>
</head>
<header>Piano virtual</header>

<body>
<h1> Piano virtual</h1>
<p>Toque nas teclas para tocar uma melodia e quem sabe descubre uma música secreta.</p>
  
<div class= "teclado">
     <div class="oitavo" ot1>
   
 
     <audio  controls src="./audios piano/do.mp3"></audio>
     <div id="audio" class="branca" id="c"> </div>
      <div class="preta" cs></div>
      <div class="branca"d></div>
      <div class="preta" ds></div>
      <div class="branca"e></div>
      <div class="branca"f></div>
      <div class="preta" fs></div>
      <div class="branca"g></div>
      <div class="preta"gs></div>
      <div class="branca" a></div>
      <div class="preta"as></div>
      <div class="branca"b></div>
  </div> 
  <div class="oitavo" ot2>
      
      <div class="branca" f> </div>
       <div class="preta" cs></div>
       <div class="branca"d></div>
       <div class="preta" ds></div>
       <div class="branca"e></div>
       <div class="branca"f></div>
       <div class="preta" fs></div>
       <div class="branca"g></div>
       <div class="preta"gs></div>
       <div class="branca" a></div>
       <div class="preta"as></div>
       <div class="branca"b></div>
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
