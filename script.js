//https://sciactive.com/pnotify/
var stack = {"dir1": "up", "dir2": "left", "push": "top"};

function mostrarNotificacion(tipo, texto) {

    if (tipo === 'Exito') {

        new PNotify({
            title: 'Guardado correctamente',
            text: texto,
            type: 'success',
            buttons: {
                sticker: false
            },
            addclass: 'stack-bottomright',
            stack: stack,
            delay: 3000

        });

    } else if (tipo === 'Error') {

        new PNotify({
            title: 'Error',
            text: texto,
            type: 'error',
            buttons: {
                sticker: false
            },
            addclass: 'stack-bottomleft',
            stack: stack,
            delay: 3000

        });

    }else{
        console.log("Error");
    }


}

