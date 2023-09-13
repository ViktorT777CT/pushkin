

const dropdownButton = document.querySelectorAll('.dropbtn');
function hiddenMenu(id = ''){
    document.querySelectorAll('.dropdown-content').forEach(function (itemMenu){
        itemMenu.classList.remove('show');
        if (itemMenu.getAttribute('id')=== id){
            itemMenu.classList.add('show');
        }
    })
}
// используем метод addEventListener


dropdownButton.forEach(function (item) {
    item.addEventListener('click', function(event) {
        event.preventDefault();

        let id = this.dataset.id;
        hiddenMenu(id);
    })
});

window.addEventListener('click', e => {
    const target = e.target
    if (!target.closest('.menu')){
       hiddenMenu();
    }
});


