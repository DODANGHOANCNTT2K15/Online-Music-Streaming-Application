// tắt mở create playlist
document.addEventListener('DOMContentLoaded', (event)=>{
    const btnCreate = document.getElementById('btn-create-playlist');
    const divCreate = document.querySelector('.form-create-playlist');
    const btnCancel = document.getElementById('btn-create-playlist-2');

    btnCreate.addEventListener('click', ()=>{
        divCreate.classList.toggle('hidden');
    })

    btnCancel.addEventListener('click', ()=>{
        divCreate.classList.toggle('hidden');
    })
})

// tắt mở select playlist
document.addEventListener('DOMContentLoaded', (event)=>{
    const btnCancel = document.getElementById('btn-create-playlist-3');
    const divMenu = document.querySelector('.select-playlist')
    const btnPlaylistAdd = document.getElementById('playlist_add')

    btnCancel.addEventListener('click', ()=>{
        divMenu.classList.toggle('hidden');
    })

    btnPlaylistAdd.addEventListener('click', ()=>{
        divMenu.classList.toggle('hidden');
    })

    const btnCreate = document.getElementById('btn-create-playlist-4');
    const divCreate = document.querySelector('.form-create-playlist');

    btnCreate.addEventListener('click', ()=>{
        divCreate.classList.toggle('hidden');
    })
})

