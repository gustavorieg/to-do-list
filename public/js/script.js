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
    const titulo = document.querySelector(".tit-modal-conteudo")

    add.addEventListener("click", function () {

        const elementoPai = document.querySelector(".menu-task");
        const elementoComClasse = elementoPai.querySelector(".tit-menu");
        const valor = elementoComClasse.textContent;
        const tit = valor.split("(");

        titulo.innerHTML = "Criar task" + tit[0];
        modal.style.display = "block";
    });

    modal.addEventListener("click", function (event) {
        if (event.target == modal ){
            modal.style.display = "none";
        }
    });
});