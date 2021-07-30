const getConsolas=async(filtro="todos")=>{
    let resp; 
    if (filtro=="todos"){
        resp=axios.get("api/consolas/get");
    }else{
resp= await axios.get('api/consolas/filtrar?filtro=${filtro}');

    }
return resp.data;
};


const crearConsola=async(consola)=>{
let resp=await axios.post("api/consolas/post", consola, {

    headers:{
        "Content-Type": "application/json"
    }
    });
return resp.data;
};

    
