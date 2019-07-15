function change_point(){
document.getElementById('point').innerText =
document.querySelector('.bonus_input')[0].value;
}

function do_first(){
    change_point();
}

window.addEventListener('load',do_first);