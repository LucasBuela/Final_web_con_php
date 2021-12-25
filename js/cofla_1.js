//Cofla capitulo 1:

// let helados="Helado de agua: 0.10,helado crema: 1.5, naranju: 0.50";
// alert("Tabla de precios: "+helados);

// let cofla=prompt("Ingrese dinero de Cofla: ");
// let jose=prompt("Ingrese dinero de Jose: ");
// let maria=prompt("Ingrese dinero de Maria: ");

// if(cofla>=1.5){
//     alert("El dinero de cofla es de: "+cofla+" Se puede comprar el helado de crema");
// }else if(cofla>=0.50 && cofla<1.5){
//     alert("El dinero de cofla es de: "+cofla+" Se puede comprar el naranju");
// }else if(cofla>=0.10 && cofla<0.50){
//     alert("El dinero de cofla es de: "+cofla+" Se puede comprar el helado de agua");
// }
// else{
//     alert("El dinero de cofla es de: "+cofla+" No le alcanza el dinero");
// };
// if(jose>=1.5){
//     alert("El dinero de jose es de: "+jose+" Se puede comprar el helado de crema");
// }else if(jose>=0.50 && jose<1.5){
//     alert("El dinero de jose es de: "+jose+" Se puede comprar el naranju");
// }else if(jose>=0.10 && jose<0.50){
//     alert("El dinero de jose es de: "+jose+" Se puede comprar el helado de agua");
// }
// else{
//     alert("El dinero de jose es de: "+jose+" No le alcanza el dinero");
// };
// if(maria>=1.5){
//     alert("El dinero de maria es de: "+maria+" Se puede comprar el helado de crema");
// }else if(maria>=0.50 && jose<1.5){
//     alert("El dinero de maria es de: "+maria+" Se puede comprar el naranju");
// }else if(maria>=0.10 && jose<0.50){
//     alert("El dinero de maria es de: "+maria+" Se puede comprar el helado de agua");
// }
// else{
//     alert("El dinero de maria es de: "+maria+" No le alcanza el dinero");
// };


//EJ_2

// let tabla_boletos="Boleto A=1,Boleto B=1.5,Boleto C=0.60";


// let boleto_1=1;
// let boleto_2=1.5;
// let boleto_3=0.60;
// let dinero=prompt("Ingresar el dinero disponible: ");

// if(dinero>boleto_1 && dinero<boleto_2){
//     let vuelto=dinero-boleto_1;
//     alert("Puede comprar el boleto 1, su vuelto seria: $"+vuelto)
// }else if(dinero>=boleto_2 && dinero>boleto_1){
//     let vuelto=dinero-boleto_2;
//     alert("Puede comprar el boleto 2, su vuelto seria: $"+vuelto)
// }else if(dinero>=boleto_3 && dinero<boleto_1){
//     let vuelto=dinero-boleto_3;
//     alert("Puede comprar el boleto 3, su vuelto seria: $"+vuelto)
// }else{
//     alert("No le alcanza el dinero")
//}

//EJ_3
// let resultado=prompt("Ingresar resultado: 1-miente,2-verdad,3-duda");
// if (resultado==1){
//     alert("El resulto dio: "+resultado+",mentira");
// }else if(resultado==2){
//     alert("El resulto dio: "+resultado+",verdad");
// }else if(resultado==3){
//     alert("El resulto dio: "+resultado+",duda");
// }else{
//     alert("Error en el ingreso de dato.");
// }

//Cofla capitulo 2: 
//Ej_1:

let gratis=false
fiesta=(hora)=>{
    let edad=prompt("Ingrese edad");
    if(edad>=18){
        if(hora>=2 && hora<7 && gratis==false){
            gratis=true;
            return alert("Ingreso gratis");
        }else{
            return alert("Pagar para igresar");
        }
    }else{
        return alert("No puede ingresar porque es menor de edad.");
    }
};
fiesta(1);
fiesta(2);
fiesta(3);
