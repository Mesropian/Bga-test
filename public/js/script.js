
menuBtn.addEventListener('click',()=>{

})

document.addEventListener('DOMContentLoaded', function () {
    let menuBtn = document.getElementById('menuBtn')
    const menu = document.getElementById('menu');

    menuBtn.addEventListener('click', function () {
        menuBtn.classList.toggle('active');
        menu.classList.toggle('active');
    });
});
