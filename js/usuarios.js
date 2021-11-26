usuarios = [{id:'1',usuario:'Fernando10b'}, 
            {id:'2',usuario:'Camila32a'},
            {id:'3',usuario:'Gloria13'}];

usroId = 3;
idaeliminar = 0;
idaeditar = 0;

actualizar();
console.log(mensajes);

function agregarUsuario(){
    let usr = $("#usr").val();
    usroId ++;
    nuevoUS = {id: usroId,usuario:usr};
    usuarios.push(nuevoUS);
    console.log(usuarios);
    actualizar();
}

function actualizar(){
    $("#tablaUSU").html('');
    for(let i = 0 ; i < usuarios.length; i++){
        let fila = "<tr><td>" + usuarios[i].id + "</td><td>" + usuarios[i].usuario;
        fila = fila + "<td><button onclick='editarUsuario("+ usuarios[i].id +");' class='btn btn-primary' data-toggle='modal' data-target='#modificaUS'>";
        fila += "<i class='material-icons align-middle'>edit</i></button>";
        fila += "<button onclick='eliminarUsuario("+ usuarios[i].id +");' class='btn btn-danger' data-toggle='modal' data-target='#eliminaUS'>";
        fila += "<i class='material-icons align-middle'>cancel</i></button></td></tr>";
        //console.log(fila);
        $("#tablaUSU").append(fila);
    }
    
}

function editarUsuario(id){
    for(let i = 0 ; i < usuarios.length; i++){
        if(usuarios[i].id==id){
            $("#USEditar").val(usuarios[i].usuarios);
            idaeditar = id;
            break;
        }
    }
}

function eliminarUsuario(id){
    idaeliminar = id;
}

function confirmarEliminar(){
    for(let i = 0 ; i < usuarios.length; i++){
        if(usuarios[i].id==idaeliminar){
            usuarios.splice(i,1);
            break;
        }
    }
    actualizar();
}

function guardaCambios(){
    for(let i = 0 ; i < usuarios.length; i++){
        if(usuarios[i].id==idaeditar){
            usuarios[i].usuario = $("#USEditar").val();
            break;
        }
    }
    actualizar();
}