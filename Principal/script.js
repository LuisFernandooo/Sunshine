const disco = document.querySelector("#disco");
const musica = new Audio("../music/musica.mp3");

musica.volume = 0.2;
let disco_rodando = false;

disco.addEventListener("click", () => {
    if(!disco_rodando){
        disco_rodando = true;
        musica.play()
        disco.animate([
            {transform: "rotate(0deg)"},
            {transform: "rotate(360deg)"}
    ],  {
            duration: 1000,
            iterations: Infinity
        });
    } else{
        disco_rodando = false;
        musica.pause();
        musica.currentTime = 0;
        disco.animate([
            {transform: "rotate(0deg)"},
            {transform: "rotate(0deg)"},
        ], {
            duration: 1000,
            iterations: Infinity
        })
    }
})


