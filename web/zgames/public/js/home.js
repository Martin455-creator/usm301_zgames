
const cargarMedidor = async()=>{
    
    let resultado = await axios.get("api/medidor/get");
    let medidor = resultado.data;
    
    let medidorSelect = document.querySelector("#medidor-select");
    marcas.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        marcaSelect.appendChild(option);
    });
    
};

cargarMedidor();

const cargarTipo = async()=>{
    
    let resultado = await axios.get("api/tipo/get");
    let tipo = resultado.data;
    
    let tipoSelect = document.querySelector("#tipo-select");
    tipo.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        tipoSelect.appendChild(option);
    });

};

cargarTipo();
document.querySelector=("#registrar-btn").addEventListener("click", ()=>{

let fecha=document.querySelector("#fecha-txt").value;
let hora=document.querySelector("#hora-txt").value;
let medidor=document.querySelector("#medidor-select").value;
let valor=document.querySelector("#valor-txt").value;
let tipo=document.querySelector("#tipo-select").value;



let resp= await crearConsola(consola);





});