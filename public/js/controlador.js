function buscarUsuario() {
    
    var request = new XMLHttpRequest();
    var formData = new FormData(document.querySelector('#form-filtro'));
    //console.log(document.querySelector('#form-filtro'));
    request.open("POST", '/users/filtro',true);
    //alert('hola');
    request.onreadystatechange = function(){
        console.log(this.status);
        if (this.readyState==4) {
            if (this.status==200) {
                if (this.responseText!=null) {
                   // alert(this.responseText);
                    document.getElementById('contenido-tabla').innerHTML=this.responseText;
                }else alert("Error de comunicacion: No se recibieron datos")
            }else alert("Error de comunicacionn "+this.statusText)
        }
    }
    request.send(formData);
}

function buscarProyecto() {
    var request = new XMLHttpRequest();
    var formData = new FormData(document.querySelector('#form-filtro'));
    //console.log(document.querySelector('#form-filtro'));
    request.open("POST", '/projects/filtro-proyecto',true);
    //alert('hola');
    request.onreadystatechange = function(){
        console.log(this.status);
        if (this.readyState==4) {
            if (this.status==200) {
                if (this.responseText!=null) {
                   // alert(this.responseText);
                    document.getElementById('contenido-tarjetas').innerHTML=this.responseText;
                }else alert("Error de comunicacion: No se recibieron datos")
            }else alert("Error de comunicacionn "+this.statusText)
        }
    }
    request.send(formData);
}