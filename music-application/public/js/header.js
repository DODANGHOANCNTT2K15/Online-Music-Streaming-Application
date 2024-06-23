// mở menu tài khoản
document.addEventListener('DOMContentLoaded', (event) => {
    const buttonProfit = document.getElementById('button-profit');
    const menuUser = document.getElementById('dropdown-menu-user');

    buttonProfit.addEventListener('click', ()=>{
        menuUser.classList.toggle('hidden');
    });
});

// minimize 
document.addEventListener('DOMContentLoaded', (event)=>{
    const btnMenu = document.getElementById('menu-icon');
    const divMenu = document.getElementById('catergory');
    const spanH = document.querySelectorAll(".hidden-span");
    const divCreate = document.querySelector(".playlist-user");

    btnMenu.addEventListener('click', ()=>{
        divMenu.classList.toggle('minimize');
        divCreate.classList.toggle('hidden');
        spanH.forEach(element => {
            element.classList.toggle('hidden');
        });
    })
})