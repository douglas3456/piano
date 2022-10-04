

const teclas = document.querySelectorAll(".oitavo > div")

function desmarcar(tecla){
    tecla.classList.remove("selecionada")
  }

  teclas.forEach(function(tecla){
  tecla.onmousedown = function(){
   tecla.classList.add("selecionada")

  }
  
  
tecla.onmouseup = () => desmarcar (tecla)
tecla.onmouseleave = () => desmarcar(tecla)
})

function somDo() {
var audio = new Audio('./audios piano/do.mp3');
audio.play();

}

function somRe() {
  var audio = new Audio('./audios piano/re.mp3');
  audio.play();
  
  }
  function somMi() {
    var audio = new Audio('./audios piano/mi.mp3');
    audio.play();
    
    }

    function somFa() {
      var audio = new Audio('./audios piano/fa.mp3');
      audio.play();
      
      }

      function somSol() {
        var audio = new Audio('./audios piano/sol.mp3');
        audio.play();
        
        }

        function somLa() {
          var audio = new Audio('./audios piano/la.mp3');
          audio.play();
          
          }

          function somSi() {
            var audio = new Audio('./audios piano/si.mp3');
            audio.play();
            
            }

            function somDoagudo() {
              var audio = new Audio('./audios piano/do-agudo.mp3');
              audio.play();
              
              }
              
              function somMiagudo() {
                var audio = new Audio('./audios piano/mi-agudo.mp3');
                audio.play();
                
                }

                function somFaagudo() {
                  var audio = new Audio('./audios piano/fa-agudo.mp3');
                  audio.play();
                  
                  }

                  function somSolagudo() {
                    var audio = new Audio('./audios piano/sol-agudo.mp3');
                    audio.play();
                    
                    }
                    function somLaagudo() {
                      var audio = new Audio('./audios piano/la-agudo.mp3');
                      audio.play();
                      
                      }
                      function somSiagudo() {
                        var audio = new Audio('./audios piano/si-agudo.mp3');
                        audio.play();
                        
                        }
                        function somReagudo() {
                          var audio = new Audio('./audios piano/re-agudo.mp3');
                          audio.play();
                          
                          }

                          const BRANCA_KEY = ['z','x','c','v','b','n','m']
                          const PRETA_KEY = ['s','d','g','h','j']
                      const Key = document.querySelectorAll('.key')
                      const whiteKey = document.querySelectorAll('.key.branca')
                      const blackKey = document.querySelectorAll('.key.preta')
                      keys.forEach(key => {
                        key.addEventListener('click',() => playNote(key))
                      })
                        
                      

                        document.addEventListener('keydown', e =>{
                         const key = e.key
                         const brancaKeyIndex = BRANCA_KEY.indexOf(key)
                         const pretaKeyIndex = PRETA_KEY.indexOf(key)

                         if (brancaKeyIndex > -1) playNote(branca[brancaKeyIndex])
                         if (pretaKeyIndex > -1) playNote(preta[pretaKeyIndex])
                        })

                        function playNote(key){
                          const noteAudio = document.getElementById(key.dataset.note)
                        noteAudio.currentTime = 0
                        noteAudio.play()
                        key.classList.add('active')
                        noteAudio.addEventListener('ended',() => {
                        key.classList.remove('active')
                        })

                       
                      }
                        