import './styles/rutinaActual.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
//Puenteado de las sesiones de symfony con js
let btnfinalizarRutina = document.querySelector(".finalizarRutina");
console.log(btnfinalizarRutina);
btnfinalizarRutina.addEventListener("click", (e) => {
    if (e.target.className == "finalizarRutina") {
        console.log("ab");
        
        const sessionData = {
            formValue: false,
            RutinaActual: ''
        };

        fetch('http://localhost:8000/actualizar-datos-sesion', { 
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(sessionData)
        })
            .then(response => {

            if (response.ok) {
                console.log('La variable de sesión se actualizó correctamente.');
            } else {
                console.error('Error al actualizar la variable de sesión.');
            }
        })
        .catch(error => {
            console.error('Error en la solicitud AJAX:', error);
        });
    }
});

//Botón configuración
let configuracion = document.querySelector(".config");
let opciones = document.querySelector(".opciones");
let btnOpciones = document.querySelector("#not_admin");
let oculto = true;
configuracion.addEventListener("click", (e) => {
    if (e.target.className == "config") {
        if (oculto == true) {
            oculto = false;
            opciones.removeAttribute("hidden");
        } else {
            oculto = true;
            opciones.setAttribute("hidden", true);
        }

    }
});

//Ocultar boton de configuración
if (btnOpciones == null) {
    configuracion.removeAttribute("hidden");
} else {
    configuracion.setAttribute("hidden", true);
}


//Redirección

document.querySelector('.finalizarRutina').addEventListener('click', function() {
    var url = this.getAttribute('data-url');
    window.location.href = url;
});