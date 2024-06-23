// volumn
document.addEventListener('DOMContentLoaded',(event) =>{
    const btnVolume = document.getElementById('btn-volume');
    const divVolume = document.querySelector('.volume-slider-container');
    const audio = document.getElementById('play-audio');
    const volumeSlider = document.getElementById('volume-slider');

    btnVolume.addEventListener('click', ()=>{
        divVolume.classList.toggle('hidden');
    });

    // Cập nhật âm lượng khi kéo thanh trượt âm lượng
    volumeSlider.addEventListener('input', () => {
        audio.volume = volumeSlider.value / 100;
    });
});


// thay doi tren run bar
// suffle
document.addEventListener('DOMContentLoaded', (event)=>{
    const btnShuffle = document.getElementById('shuffle');

    btnShuffle.addEventListener('click', ()=>{
        btnShuffle.classList.toggle('opacity-50per');
    });
})

// chay nhac
document.addEventListener('DOMContentLoaded', (event)=>{
    const btnPause = document.getElementById('play-pause');
    const audio = document.getElementById('play-audio');
    const progressBar = document.getElementById('progress-bar');
    const driver = document.getElementById('rotation');

    btnPause.addEventListener('click', ()=>{
        if(btnPause.textContent === 'play_arrow'){
            btnPause.textContent = 'pause';
            driver.classList.toggle('rotation');
            audio.play();
        }else{
            btnPause.textContent = 'play_arrow';
            driver.classList.toggle('rotation');
            audio.pause();
        }
    })
    
    // Cập nhật thanh tiến trình khi âm thanh phát
    audio.addEventListener('timeupdate', () => {
        const value = (audio.currentTime / audio.duration) * 100;
        progressBar.value = value;
    });

    // Cập nhật vị trí phát lại khi kéo thanh tiến trình
    progressBar.addEventListener('input', () => {
        const value = progressBar.value;
        audio.currentTime = (value / 100) * audio.duration;
    });

    // Cập nhật thanh tiến trình khi âm thanh tải xong
    audio.addEventListener('loadedmetadata', () => {
        progressBar.max = 100;
        progressBar.value = 0;
    });
})

//loop
let loop = 0;

document.addEventListener('DOMContentLoaded', (event) => {
    const btnLoop = document.getElementById('loop');
    
    btnLoop.addEventListener('click', () => {
        if (loop === 0) {
            btnLoop.textContent = 'repeat';
            btnLoop.classList.toggle('opacity-50per');
            loop = 1;
        } else if (loop === 1) {
            btnLoop.textContent = 'repeat_one';
            loop = 2;
        } else if (loop === 2) {
            btnLoop.classList.toggle('opacity-50per');
            btnLoop.textContent = 'repeat';
            loop = 0;
        }
    });
});

// like
document.addEventListener('DOMContentLoaded', (event) =>{
    const btnLike = document.getElementById('like');

    btnLike.addEventListener('click', ()=>{
        if(btnLike.textContent === 'favorite_border'){
            btnLike.textContent = 'favorite';
        }else{
            btnLike.textContent = 'favorite_border';
        }
    })
})

// tải nhạc
document.addEventListener('DOMContentLoaded', (event) => {
    const downloadButton = document.getElementById('download-music');
    const audioElement = document.getElementById('play-audio');

    downloadButton.addEventListener('click', () => {
        const musicUrl = audioElement.src;

        fetch(musicUrl)
            .then(response => response.blob())
            .then(blob => {
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.style.display = 'none';
                a.href = url;
                a.download = 'music.mp3'; // Tên file khi tải về
                document.body.appendChild(a);
                a.click();
                window.URL.revokeObjectURL(url);
            })
            .catch(error => console.error('Error downloading the file', error));
    });
});

let a = true;
document.addEventListener('DOMContentLoaded', (event) => {
    const rotateIcon = document.getElementById('rotate-icon');
    const homelisten = document.querySelector('.home-listen');
    const homecenter = document.querySelector('.home-center');
    const list = document.querySelector('.track-in-playlist');
    const home = document.getElementById('home-catergory');

    rotateIcon.addEventListener('click', () => {
        if(a){
            homecenter.classList.remove('hidden');
            divlike.classList.add('hidden');
            list.classList.add('up');
            rotateIcon.classList.add('rotation180');
            homelisten.classList.add('up');
            a = false;
            rotateIcon.classList.remove('rotation180back');
            homelisten.classList.remove('down');
            list.classList.remove('down');
        }else{
            homecenter.classList.add('hidden');
            divlike.classList.add('hidden');
            rotateIcon.classList.add('rotation180back');
            homelisten.classList.add('down');
            list.classList.add('down');
            a = true;
            rotateIcon.classList.remove('rotation180');
            homelisten.classList.remove('up');
            list.classList.remove('up');
        }
    });

    const like = document.getElementById('home-library');
    const divlike = document.querySelector('.liked');

    home.addEventListener('click', () => {
        // Hide the liked section and show the home center section
        divlike.classList.add('hidden');
        homecenter.classList.toggle('hidden');
    });

    like.addEventListener('click', () => {
        // Hide the home center section and show the liked section
        homecenter.classList.add('hidden');
        divlike.classList.toggle('hidden');
    });
});

// chạy thời lượng nhạc
document.addEventListener('DOMContentLoaded', (event) => {
    const audio = document.getElementById('play-audio');
    const currentTimeSpan = document.getElementById('current-time');
    const durationSpan = document.getElementById('duration');

    // Hàm định dạng thời gian từ giây sang phút:giây
    function formatTime(seconds) {
        const minutes = Math.floor(seconds / 60);
        const secs = Math.floor(seconds % 60);
        return `${minutes}:${secs < 10 ? '0' : ''}${secs}`;
    }

    // Cập nhật thời lượng tối đa khi metadata đã được tải
    audio.addEventListener('loadedmetadata', () => {
        durationSpan.textContent = formatTime(audio.duration);
    });

    // Cập nhật thời gian hiện tại mỗi khi thời gian thay đổi
    audio.addEventListener('timeupdate', () => {
        currentTimeSpan.textContent = formatTime(audio.currentTime);
    });
});
