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

function cargarImagenes() {
    var request = new XMLHttpRequest();
    var formData = new FormData(document.querySelector('#form-imagenes'));
    //console.log(document.querySelector('#form-filtro'));
    request.open("POST", '/editar_actividad/evidencias',true);
    //alert('hola');
    request.onreadystatechange = function(){
        console.log(this.status);
        if (this.readyState==4) {
            if (this.status==200) {
                if (this.responseText!=null) {
                    //alert("llego");
                    document.getElementById('evidencia').click();
                    let evidencia = document.getElementById('evidencia');

                    evidencia.addEventListener('change', (event) => {
                       // console.log(evidencia.files);
                        let imagenes = "";
                        let files = evidencia.files;
                        let pre = document.getElementById("previsualizacion");
                        for (let i = 0; i < files.length; i++) {
                            let url = URL.createObjectURL(files[i]);
                            imagenes+='<img src="' + url + '" alt="Evidencia"><br>';
                        }
                        document.getElementById('evAlmacenadas').innerHTML="";
                        pre.innerHTML=imagenes;
                        
                        //document.getElementById('evidencia');

                    });

                    //document.getElementById('contenido-tarjetas').innerHTML=this.responseText;
                }else alert("Error de comunicacion: No se recibieron datos")
            }else alert("Error de comunicacionn "+this.statusText)
        }
    }
    request.send(formData);
}
