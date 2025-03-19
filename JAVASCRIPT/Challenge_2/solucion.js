console.log("Holiwis");

function agregarTarea(){
    //Agarrar los elementos
    const tarea = document.getElementById('input_tarea')
    const lista = document.getElementById('lista_tareas')
    const error = document.getElementById('error');

    console.log(tarea.value);
    let valorTarea = tarea.value;

    //trim() -> Elimina de un string, los espacios al principio y al final
    //EJ: " HOLA COMO ESTAS? " -> "HOLA COMO ESTAS?"
    if( valorTarea.trim() !== ""){

    //Logica para agregar las tareas a la lista
    const li = document.createElement('li');
    
    //Agregamos el texto del input al li
    li.textContent = valorTarea;
    console.log(li);

    //Agregamos el evento onclick, utilizamos el remove para eliminarlo
    li.onclick = function(){ this.remove()}

    // Agregamos el li como hijo a la etiqueta ul
    lista.append(li);

    //Limpiamos el input al final
    tarea.value = "";

    error.innerText = "";
    }else{
        error.innerText = "Ingrese una tarea";
    }
}