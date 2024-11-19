let d = new Date();
let element = document.getElementById('msg');
element.insertAdjacentHTML('afterend', '<p>' + d.toTimeString() + '</p>');

let btnReload = document.getElementById('btnReload');
btnReload.addEventListener('click', function(){
    location.reload();
});