// javascript.js

function toggleMenu() {
    var sidebar = document.getElementById('sidebar');
    var mainContent = document.querySelector('.main-content');
    sidebar.classList.toggle('show');
    mainContent.classList.toggle('show');
}

function filterElements(categoria){
    const elements = document.querySelectorAll(".box");
    elements.forEach((element) => {
        element.classList.remove("show");
        if(categoria === "Todos" || element.classList.contains(categoria))
            element.classList.add("show");
    });
}


// CONFIG BOTAO PARA MANDAR PRA OUTRA PAG
document.getElementById("profissionais").onclick = function() {
    window.location.href = "funcionarios.php";
};