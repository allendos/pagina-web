 /*--------------------------------pagar productos------------------------------------*/
let producto=[];
let total=0;

/* boton de añadir*/ 
function add(cos,precio)
{console.log(cos,precio );
producto.push(cos);
total=total+precio
document.getElementById("checkout").innerHTML = "pagar $" +(total)}

/*boton de eliminar*/ 
function remove (cos,precio)
{console.log(cos,precio );
producto.splice(1,1);
total=total-precio;
document.getElementById("checkout").innerHTML = "pagar $" +(total)
if(total<=0){total=0
    document.getElementById("checkout").innerHTML = "pagar $" +(total)}}
    

/* boton para pagar */
function pay() {
swal("se añadido al carrito \n"+producto.join ("\n")); 
 total=total-total;
 producto=[];
document.getElementById("checkout").innerHTML = "pagar " }
 /*---------------------------------------------------------------------------------------*/

/* ---------------------------------iniciar sesion -----------------------------------------*/
function login(){
    var user,pass;
    user = document.getElementById("usuario").value;
    pass = document.getElementById("contraseña").value;

   if(user== "allen" && pass == "2611"){
    window.location="index.html"}
    if(user!= "allen" )
    {window.alert("el usuario es incorrect@ o no existe")}
    else if(pass!= "2611"){window.alert(" la  contraseña es incorrecta ")}
}
function crear (){
    nam= document.getElementById("nomb").value;
    ap= document.getElementById("apellido").value;
    tel= document.getElementById("telefono").value;
    dir= document.getElementById("direccion").value;
    eda=document.getElementById("edad").value;
    corre=document.getElementById("correo").value;
    password=document.getElementById("contraseñ").value;}
 /*---------------------------------------------------------------------------------------*/

    /*--------------------------------- recuperar contraseña----------------------------------*/ 
 const desaparecer =document.querySelector(".desvanecer");
    function invisible(){   
        desaparecer.style.opacity=0;}

    /*---------------------------------------------------------------------------------------*/

 /*aparecer*/
function aparecer(){
  onmouseout=" this.style.opacity=0;this.filter.alpha(opacity=40)"
  OnMouseOver="this.style.opacity=1;this.filter.alpha(opacity=100)"}

/*function desparecer() /*desaparecer{
    document.getElementById("tex_inf").style.opacity="0"}   
 sirve para cambiar la opacidad de un objeto
 OnMouseOver="this.style.opacity=1;this.filter.alpha(opacity=0)"
OnMouseOut="this.style.opacity=0.4;this.filter.alpha(opacity=100)"*/