// Modal editar/excluir
document.addEventListener("DOMContentLoaded", function () {
    const task = document.querySelector(".task");
    const contextMenu = document.querySelector(".context-menu");

    task.addEventListener("contextmenu", function (event) {
        event.preventDefault();
        contextMenu.style.left = event.clientX + "px";
        contextMenu.style.top = event.clientY + "px";
        contextMenu.style.display = "block";
    });

    document.addEventListener("click", function (event) {
        if (event.target !== task && event.target !== contextMenu) {
            contextMenu.style.display = "none";
        }
    });
});


// Modal Criar
document.addEventListener("DOMContentLoaded", function () {
    const add = document.getElementById("add-menu")
    const modal = document.querySelector(".addModal")
    const conteudo = document.querySelector(".addModal-conteudo")

    add.addEventListener("click", function () {
        modal.style.display = "block";
    });


    modal.addEventListener("click", function (event) {
        if (event.target == modal ){
            modal.style.display = "none";
        }
        
    });
});