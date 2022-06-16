document.querySelector('.header_burger').addEventListener('click', function(){
    document.querySelector('.header_burger').classList.toggle('active');
    document.querySelector('.header_menu').classList.toggle('active');
    document.querySelector('body').classList.toggle('lock');
    document.querySelector('.gray').classList.toggle('lock');

})

