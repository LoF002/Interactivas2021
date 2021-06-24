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
        <div class="row justify-content-center pt-4 pb-3 c_top fixed-top">
            <div class="col-sm-8 ">
                <div class="row justify-content-between">
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-sm-5 pt-2 logo_container">
                                <a href="index.php"> <img class="img-fluid" src="./img/icon/logo.svg" alt="BookEvent"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row justify-content-center pt-3 ">
                            <div class="col-auto">
                                <input class="form-control" type="text" placeholder="Buscar">
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
    <section class=" row s-outstanding pt-5 pb-5 justify-content-start ">
        <div class="col-sm-8 pt-sm-5 mt-5">
            <h3 class="text-center mb-2">Destacados</h3>
            <div id="carouselExampleIndicators" class="carousel slide pointer-event" data-bs-ride="carousel">
                <div class="carousel-indicators"><button type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button><button type="button"
                        data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"
                        class=""></button><button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3" class=""></button></div>
                <div class="carousel-inner">
                    <div class="carousel-item active"><img v-bind:src="events[0].image" class="d-block w-100" v-bind:alt="events[0].title">
                        <div class="carousel-caption d-none d-md-block carousel_container">
                            <h5>{{events[0].title}}</h5>
                            <p>Lugar: {{events[0].location}}</p>
                            <p>Fecha: {{events[0].date}}</p>
                            <p>Categoría: {{events[0].category}}</p>
                        </div>
                    </div>
                    <div class="carousel-item"><img v-bind:src="events[3].image" class="d-block w-100" v-bind:alt="events[3].title">
                        <div class="carousel-caption d-none d-md-block carousel_container">
                            <h5>{{events[3].title}}</h5>
                            <p>Lugar: {{events[3].location}}</p>
                            <p>Fecha: {{events[3].date}}</p>
                            <p>Categoría: {{events[3].category}}</p>
                        </div>
                    </div>
                    <div class="carousel-item"><img v-bind:src="events[7].image" class="d-block w-100" v-bind:alt="events[7].title">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="carousel-caption d-none d-md-block carousel_container">
                                <h5>{{events[7].title}}</h5>
                                <p>Lugar: {{events[7].location}}</p>
                                <p>Fecha: {{events[7].date}}</p>
                                <p>Categoría: {{events[7].category}}</p>
                            </div>
                        </div>
                    </div>
                </div><button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span
                        class="visually-hidden">Previous</span></button><button class="carousel-control-next" type="button"
                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next"><span class="carousel-control-next-icon"
                        aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
            </div>
    
        </div>
    
    </section>
    <section class="s-main">
        <div class="row justify-content-center">
            <div class="col-sm-2  mt-2  p-sm-3  filter_container ">
                <p>Filtros:</p>
    
                <div class="row-cols-auto">
                    <div class="col container pt-2 pb-2 mb-3 mb-3 f_container">
                        <p>Categoría</p>
                        <div class="form-check container_casilla">
                            <input type="checkbox" class="form-check-input" id="MCheck">
                            <label class="form-check-label slash" for="MCheck">Música</label>
                        </div>
                        <div class="form-check container_casilla">
                            <input type="checkbox" class="form-check-input" id="TCheck">
                            <label class="form-check-label slash" for="TCheck">Teatro</label>
                        </div>
                        <div class="form-check container_casilla">
                            <input type="checkbox" class="form-check-input" id="CCheck">
                            <label class="form-check-label slash" for="CCheck">Conferencia</label>
                        </div>
    
                    </div>
                    <div class="col container pt-2 pb-2 mb-3 f_container">
                        <p>Zona</p>
                        <div class="form-check container_casilla">
                            <input type="checkbox" class="form-check-input" id="ACheck">
                            <label class="form-check-label slash" for="ACheck">Alajuela</label>
                        </div>
                        <div class="form-check container_casilla">
                            <input type="checkbox" class="form-check-input" id="SJCheck">
                            <label class="form-check-label slash" for="SJCheck">San josé</label>
                        </div>
                        <div class="form-check container_casilla">
                            <input type="checkbox" class="form-check-input" id="Resto_Check">
                            <label class="form-check-label slash" for="Resto_Check">Resto del país</label>
                        </div>
                    </div>
    
                    <div class="col pt-2 pb-2 mb-3 container f_container">
                        <p>Apto para público</p>
                        <div class="form-check container_casilla">
                            <input type="checkbox" class="form-check-input" id="SCheck">
                            <label class="form-check-label slash" for="SCheck">Sí</label>
                        </div>
                    </div>
                </div>
    
            </div>
    
            <div class="col-sm-6 pt-4">
                <h3 class="text-center pt-4">Todos los eventos</h3>
                <div class="row card_container justify-content-start ">
    
                    <div v-for="(event, index) in events" class="col-sm-5 card m-sm-3 mb-2 ostd-card ">
                        <div class="row justify-content-start">
                            <div class=" card-header">
                                <img class="card-img img-fluid " v-bind:src="event.image" v-bind:alt="event.title">
                            </div>
                            <div class="p-4 card-body data_basic">
                                <h4 class="card-title  text-center">{{ event.title }}</h4>
                                <p class="card-text">Lugar: {{ event.location }}</p>
                                <p class="card-text">Fecha: {{ event.date }} </p>
                                <p class="card-text">Categoría: {{ event.category }} </p>
                                <div class="row justify-content-center">
                                    <div class="col-3 pb-2">
                                        <button v-on:click="showEventDetails(index)" data-bs-toggle="modal"data-bs-target="#eventModal" class="btn-secondary align-self-center b_details">
                                            Detalles
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
    
    
            </div>
        </div>
    
    </section>
    <footer >
        <div class="row justify-content-sm-center footer_container pt-5 pb-4 mt-2">
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
<!-- Modal -->
<div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="card-title" id="eventModalLabel">{{ events[selectedEvent].title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3">
                <img class="img-fluid" v-bind:src="events[selectedEvent].image" v-bind:alt="events[selectedEvent].title">
                <div class="p-3">
                <p class="card-text pt-2">{{ events[selectedEvent].description }}</p>
                <p class="card-text ">Fecha y hora: {{events[selectedEvent].date}}</h5>
                <p class="card-text">Lugar: {{events[selectedEvent].location}}</p>
                <p class="card-text">Categoría: {{events[selectedEvent].category}}</p>
                <p class="card-text">Evento gratuito: {{ showStr(events[selectedEvent].free) }}</p>
                <p class="card-text">Apto para todo público: {{ showStr(events[selectedEvent].atp) }}</p>
                <p>{{detectRelated(events[selectedEvent].id, events[selectedEvent].category)}}</p>
                </div>

            </div>
            <div class="modal-footer">
                
                <a href="registro.php"><button type="button"  v-on:click="" class="btn btn-secondary b_details">Registrarse</button></a>
            </div>
        </div>
        <h2 class="text-center text-light pt-2 pb-2">Eventos relacionados</h2>
        <div class="modal-content">
            
            <div class="row justify-content-center">
                    
                <div v-for="(event, index) in related" class="col-sm-5 h-auto card m-3 ostd-card ">
                    <div class="row justify-content-start">
                        <div class=" card-header">
                            <img class="card-img img-fluid " v-bind:src="event.image" v-bind:alt="event.title">
                        </div>
                        <div class="p-4 card-body data_basic">
                            <h4 class="card-title  text-center">{{ event.title }}</h4>
                            <p class="card-text">Lugar: {{ event.location }}</p>
                            <p class="card-text">Fecha: {{ event.date }} </p>
                            <p class="card-text">Categoría: {{ event.category }} </p>
                            
                            <div class="row justify-content-center">
                                <div class="col-6 pb-2">
                                    <button v-on:click="showEventDetails(event.id)"  class="btn-secondary align-self-center b_details ">Detalles</button> 
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Modal -->
</div>

</body>
<script src="./js/main.js"></script>
<script>
    const mountedApp = app.mount("#app");
</script>
</html>