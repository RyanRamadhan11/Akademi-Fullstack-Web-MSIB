$("document").ready(function () {
    const audioKuda = new Audio('./assets/audios/kuda-sound.mp3')
	const audioKucing = new Audio('./assets/audios/kucing-sound.mp3')
    const audioPinguin = new Audio('./assets/audios/pinguin-sound.mp3')
    const audioPanda = new Audio('./assets/audios/panda-sound.mp3')
    const audioHamster = new Audio('./assets/audios/hamster-sound.mp3')
    const audioKoala = new Audio('./assets/audios/koala-sound.mp3')
    

    $('#kuda').click(function () {
        $(this).removeClass('blur')
        playAudio(audioKuda)
    }).mouseleave(function () {
        $(this).addClass('blur')
        stopAudio(audioKuda)
    })

    $('#pinguin').click(function () {
        $(this).removeClass('blur')
        playAudio(audioPinguin)
    }).mouseleave(function () {
        $(this).addClass('blur')
        stopAudio(audioPinguin)
    })

    $('#panda').click(function () {
        $(this).removeClass('blur')
        playAudio(audioPanda)
    }).mouseleave(function () {
        $(this).addClass('blur')
        stopAudio(audioPanda)
    })

    $('#hamster').click(function () {
        $(this).removeClass('blur')
        playAudio(audioHamster)
    }).mouseleave(function () {
        $(this).addClass('blur')
        stopAudio(audioHamster)
    })

    $('#koala').click(function () {
        $(this).removeClass('blur')
        playAudio(audioKoala)
    }).mouseleave(function () {
        $(this).addClass('blur')
        stopAudio(audioKoala)
    })

    $('#kucing').click(function () {
        $(this).removeClass('blur')
        playAudio(audioKucing)
    }).mouseleave(function () {
        $(this).addClass('blur')
        stopAudio(audioKucing)
    })

    function playAudio(audio) {
        audio.play()
        audio.currentTime = 0
    }

    function stopAudio(audio) {
        audio.pause()
    }

});