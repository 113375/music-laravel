import './bootstrap';

// npm run build для обновления css и js

function player(){
    let play_button = document.querySelector(".play_button")
    play_button.addEventListener("click", start_track)
    let song = new Audio("/music/Korn Blind.mp3")
    let isPlayed = false;
    console.log(isPlayed);

    function start_track(){
        if(!isPlayed){
            song.play()
            play_button.textContent = "Пауза"
            isPlayed = true
        }else{
            song.pause()
            play_button.textContent = "Start track (Only blind)"
            isPlayed = false
        }
    }

}

player()