const btnswitch = document.querySelector("#switch");

btnswitch.addEventListener('click', () => {

    document.body.classList.toggle('dark');
    btnswitch.classList.toggle('active');

    //guardar el modo en localstorage
    if (document.body.classList.contains('dark')) {
        localStorage.setItem('modo-oscuro', true);
    } else {
        localStorage.setItem('modo-oscuro', false);

    }
});
//obtenemos el modo actual
if (localStorage.getItem('modo-oscuro') === "true") {
    document.body.classList.add('dark');
    btnswitch.classList.toggle('active');
} else {
    document.body.classList.remove('dark');
    btnswitch.classList.remove('active');

}