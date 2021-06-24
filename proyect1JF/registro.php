<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookEvent</title>
    <link rel="icon" href="./img/icon/icon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Import Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@next"></script>

</head>
<body>
<div id="app" class="container-fluid">
    <header  >
        <div class="row justify-content-center pt-4 pb-3 c_top">
            <div class="col-sm-8 ">
                <div class="row justify-content-between">
                    <div class="col-sm-5 ">
                        <div class="row">
                            <div class="col-5 pt-2 logo_container">
                            <a href="index.php"> <img class="img-" src="./img/icon/logo.svg" alt="BookEvent"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row justify-content-center pt-3 ">
                            <div class="col-auto">
                                <input class="form-control" f type="text" placeholder="Buscar">
                            </div>
                            <div class="col-auto">
                                <button class="btn lupa_btn"> 
                                    <img class="lupa" src="./img/icon/lupa.svg" alt="Buscar" height="20">
                                </button>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </header>
    <section class="reg_section">
            <div class="row justify-content-center">
                <div v-if="!visible" class="col-sm-8 mt-2">
                    <h3 class="text-center mt-3 mb-2">{{events[1].title}}</h3>
                    <div  class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button btn_head" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              1. Seleccione sus entradas
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <p>Cantidad de niños</p>
                                        <p>cantidad de adultos</p>
                                        <p>impuestos (IVA)</p>
                                        <p>total</p>
                                    </div>
                                    <div class="col-auto">
                                        <p>Valor: {{events[1].priceK}} </p>
                                        <p>Valor: {{events[1].priceA}} </p>
                                        <p>13%</p>
                                        <p>{{(qtyK*events[1].priceK+events[1].priceA*qtyA)+(qtyK*events[1].priceK+events[1].priceA*qtyA)*0.13}}</p>
                                    </div>
                                    <div class="col-1">
                                        <label for="quantityK" class="visually-hidden">Qty</label>
                                        <input type="number" v-model="qtyK" class="input_C pt-sm-0 pb-sm-0" id="quantityK" placeholder="0" required>
                                        <label for="quantityA" class="visually-hidden">Qty</label>
                                        <input type="number" v-model="qtyA" class="input_C pt-sm-0 pb-sm-0 mt-1" id="quantityA" placeholder="0" required>
                                         
                                        
                                        
                                    </div>    
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-auto">
                                        <button v-on:click="chargeTotal((qtyK*events[1].priceK+events[1].priceA*qtyA)+(qtyK*events[1].priceK+events[1].priceA*qtyA)*0.13)" class="btn-dark b_details " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            siguiente
                                        </button>
                                    </div>
                                 </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button v-on:click="chargeTotal((qtyK*events[1].priceK+events[1].priceA*qtyA)+(qtyK*events[1].priceK+events[1].priceA*qtyA)*0.13)" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              2. Ingrese sus datos
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-1">Email:</p>
                                        <input v-model="email" class="form-control mb-3" type="email" placeholder="juan.perezsolis@ejemplo.com">
                                        <p class="mb-1">Apellidos</p>
                                        <input v-model="lname" class="form-control mb-3" type="text" placeholder="Pérez Solis">
                                        <p class="mb-1">Nombre</p>
                                        <input  v-model="name"class="form-control mb-3" type="text" placeholder="Juan">
                                    </div>
                                </div>
                             
                                
                                
                                <div class="row justify-content-end">
                                    <div class="col-auto">
                                        <button  class="btn-dark b_details " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            siguiente
                                        </button>
                                    </div>
                                 </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button v-on:click="chargeTotal((qtyK*events[1].priceK+events[1].priceA*qtyA)+(qtyK*events[1].priceK+events[1].priceA*qtyA)*0.13)" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              3. Confirmacion
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p class="text-success">Detalle de la compra</p>
                              <p>Nombre del evento: {{events[1].title}}</p>
                              <p>Lugar: {{events[1].location}}</p>
                              <p>Fecha y hora: {{events[1].date}}</p>
                              <p>Cliente: {{name+" "+lname}}</p>
                              <p>Correo electrónico: {{email}}</p>
                              <p>Cantidad niños: {{qtyK}}</p>
                              <p>Cantidad adultos: {{qtyA}}</p>
                              <p>impuesto: {{(qtyK*events[1].priceK+qtyA*events[1].priceA)*0.13}}</p>
                              <p>Total: {{total}}</p>
                              <div class="row justify-content-end pr-2">
                                <div class="col-auto">
                                    <p v-if="checkSpaces()" class="text-danger">Faltan datos por llenar</p>
                                    <button  v-on:click="confirmSpaces()" class="btn-dark b_details " type="button" >
                                        Confirmar
                                    </button>
                                </div>
                             </div>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <div v-if="visible" class="row pt-3">
                <div class="container c_msg">
                    <h5 class="text-success text-center">Solicitud registrada con éxito</h5>
                    <p class="text-center">Se ha envidado una factura con los detalles al correo {{email}}</p>
                </div>
            </div>
        
    </section>
    <footer class="sm-fixed-bottom" >
        <div class="row justify-content-sm-center footer_container pt-5 pb-4 mt-2 fixed-bottom">
            <div class="col-sm-8 contac_container">
                <div class="row justify-content-sm-evenly">
                    <div class="col-sm-auto">
                        <h4>Contacto</h4>
                    </div>
                    <div class="col-sm-auto ">
                        <div class="row justify-content-start ">
                            <div class="col-auto">
                                <img src="./img/icon/phone.svg" alt="Telefono" height="30">
                            </div>
                            <div class="col-auto">
                                <p  class="p-2 ">+506 89563123</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="row justify-content-start">
                            <div class="col-auto">
                                <img src="./img/icon/mail.svg" alt="Email" height="35">
                            </div>
                            <div class="col-auto">
                                <p  class="p-2 ">soporte@bookevent.com</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-auto">
                        <div class="row justify-content-start">
                            <div class="col-auto">
                                <img src="./img/icon/facebook.svg" alt="Facebook" height="30">
                            </div>
                            <div class="col-auto">
                                <p  class="p-2 ">facebook.com/bookevent</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-auto">
                        <div class="row justify-content-start">
                            <div class="col-auto">
                                <img src="./img/icon/instagram.svg" alt="instagram" height="30">
                            </div>
                            <div class="col-auto">
                                <p class="p-2 ">instagram.com/bookevent</p>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>

        </div>
        
    </footer>

</div>

</body>
<script src="./js/main.js"></script>
<script>
    const mountedApp = app.mount("#app");
</script>
</html>