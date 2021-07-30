const cargarMedidor= async()=>{
let filtroCbx=document.querySelector("#filtro-cbx");
let medidor=await getMedidor();
medidor.array.forEach(m => {
    let option=document.createElement("option");
    option.innerText=m;
    option.value=m;
    filtroCbx.appendChild(option);
});

}

const cargarTabla=(consolas)=>{
     
 let tbody=document.querySelector("#tbody-consola");

 for(let i=0; i<consolas.lenght; ++1){
     let tr=document.createElement("tr");
     let tdfecha=document.createElement("td");
     tdNombre.innerText=consolas[i].fecha;
     let tdhora=document.createElement("td");
     tdMarca.innerText=consolas[i].hora;
     let tdmedidor=document.createElement("td");
     tdAnio.innerText=consolas[i].medidor;
     let tdAcciones=document.createElement("td");
     
     
     tr.appendChild(tdfecha);
     tr.appendChild(tdhora);
     tr.appendChild(tdmedidor);
     tr.appendChild(tdAcciones);
    
     tbody.appendChild(tr);
    
    }
    };
document.querySelector("#filtro-cbx").addEventListener("change", async ()=>  { 
     let filtro=document.querySelector("#filtro-cbx").value;
     let consolas=await getConsolas(filtro);
     cargarTabla(consolas);
});

document.addEventListener("DOMContentLoaded", async()=>{

await cargarMarcas();
let consolas= await getConsolas();
cargarTabla(consolas);
});