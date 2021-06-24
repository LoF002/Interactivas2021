const app = Vue.createApp({
    data() {
        return {
            cart: 10,
            visible: false,
            qtyK: 0,
            qtyA: 0,
            total: 0,
            email: '',
            name: '',
            lname: '',
            selectedEvent: 0,
            related: [],
            events: [{
                    id: 0,
                    title: 'Chivo: Soen',
                    'description': 'Una de las bandas de metal más legendarias de Noruega visitan nuestro país en busca de brindar un gran espectáculo, Soen los destructores del tiempo prometen dar el espectaculo de sus vidas, un espectaculo no apto para menores',
                    category: 'música',
                    image: './img/cards/event1.jpg',
                    free: true,
                    espacios: 200,
                    atp: false,
                    date: 'Thu, May 20, 2021, 1:00 PM CST',
                    location: 'San José',
                    priceA: 1500
                },
                {
                    id: 1,
                    title: 'Orquesta Sinfónica Nacional de Costa Rica: XI Concierto de Temporada',
                    'description': 'Gran conciento virtual de la Orquesta Sinfonica de Costa Rica, un evento para toda la famia. La Orquesta Sinfónica Nacional de Costa Rica (OSN) es una institución pública cultural costarricense, adscrita al Centro Nacional de Música, órgano parte del Ministerio de Cultura y Juventud de Costa Rica. Tiene su sede en la ciudad de San José. Su objetivo es la difusión de la música clásica, así como del canto coral y las artes líricas, además de encargarse de la formación instrumental en este país.',
                    category: 'música',
                    image: './img/cards/event2.jpg',
                    free: false,
                    espacios: 200,
                    atp: true,
                    date: 'Tue, May 18, 2021, 6:00 PM UTC',
                    location: 'Alajuela',
                    priceA: 3000,
                    priceK: 2000
                },
                {
                    id: 2,
                    title: 'Concierto con Chet Faker',
                    'description': 'Nicholas James Murphy (born 23 June 1988), known professionally as Chet Faker, is an Australian singer and songwriter. In 2012, as Chet Faker, he issued an extended play, Thinking in Textures, and signed to Downtown Records in the United States.',
                    category: 'música',
                    image: './img/cards/event3.jpg',
                    free: false,
                    espacios: 200,
                    atp: true,
                    date: 'Thu, May 20, 2021, 1:00 PM CST',
                    location: 'San José'
                },
                {
                    id: 3,
                    title: 'The big three: Silent theater',
                    'description': 'Elder Bixby is killed when a big sequoia tree is chopped down by Jims men and falls on his cabin. Jims desperate attempt to rescue Alicias father saves him from being convicted of murder. Meanwhile, timber rival Cleve Gregg (Harry Cording) appears on the scene, making it a three-way fight. Gregg and his partner Frenchy LeCroix (John Archer) try to assassinate Jim, but end up killing Yukon instead. Jim has a dramatic change of heart and leads the settlers in defeating Gregg and Frenchy. Afterwards, Jim marries Alicia and settles down.',
                    category: 'Teatro',
                    image: './img/cards/event4.jpg',
                    free: true,
                    espacios: 50,
                    atp: true,
                    date: 'Thu, May 20, 2021, 1:00 PM CST',
                    location: 'San José'
                },
                {
                    id: 4,
                    title: 'Don Quijote: en Teatro Auditorio Nacional',
                    'description': 'La obra, considerada una de las más famosas de la literatura universal, será dirigida por tercer año consecutivo por el reconocido director escénico Luis Carlos Vásquez y contará con la participación de un total de 20 actores.',
                    category: 'Teatro',
                    image: './img/cards/event5.jpg',
                    free: false,
                    espacios: 100,
                    atp: true,
                    date: 'MON, May 31, 2021, 4:00 PM CST',
                    location: 'San José'
                },
                {
                    id: 5,
                    title: 'Las bodas de Fígaro',
                    'description': 'De Wolfgang A. Mozart, se trata de una opera buffa -ópera de comedia- en cuatro actos con libreto en italiano de Lorenzo da Ponte, basado en Le mariage de Figaro de Pierre Augustin Caron de Beaumarchais. La pieza, considerada una de las más importantes de la historia de la música, estrenó en Viena, 1786, bajo la dirección de su compositor.',
                    category: 'Teatro',
                    image: './img/cards/event6.jpg',
                    free: false,
                    espacios: 75,
                    atp: false,
                    date: 'MON, May 31, 2021, 4:00 PM CST',
                    location: 'San Carlos'
                },
                {
                    id: 6,
                    title: 'Conferencia Ministerial sobre la Sociedad de la Información de América Latina y el Caribe',
                    'description': 'En el año 2000 se inició un diálogo regional sobre la sociedad de la información y del conocimiento en América Latina y el Caribe, en el que los países afirmaron su voluntad de diseñar e implementar programas para el acceso y uso de las tecnologías de la información y las comunicaciones (TIC).',
                    category: 'Conferencia',
                    image: './img/cards/event7.jpg',
                    free: true,
                    espacios: 300,
                    atp: true,
                    date: 'MON, May 31, 2021, 4:00 PM CST',
                    location: 'Online'
                },
                {
                    id: 7,
                    title: 'Reunión preparatoria de la Cuarta Conferencia Ministerial sobre Sociedad de la Información de América Latina y el Caribe',
                    'description': 'Un seminario, al que asistieron expertos y representantes de la sociedad civil y el sector privado, abordó temas como las estrategias digitales y la competitividad regional, las oportunidades de cooperación para el desarrollo digital en la región y la gestión de residuos tecnológicos.',
                    category: 'Conferencia',
                    image: './img/cards/event8.jpg',
                    free: true,
                    espacios: 300,
                    atp: true,
                    date: 'MON, May 31, 2021, 4:00 PM CST',
                    location: 'Online'
                },
                {
                    id: 8,
                    title: 'Alimentación saludable durante la cuerantena, OMS',
                    'description': 'La vida se ha vuelto más sedentaria y los nuevos hábitos han eliminado el ejercicio que habitualmente hacíamos, sin embargo, comer menos, no es la solución en estos tiempos, ajustar nuestros hábitos de ejercicio y alimentación no es fácil, ¿cómo debe de ser nuestra dieta en estos tiempos?, ¿cómo podemos ajustar nuestros hábitos para tener una vida saludable en esta contingencia?',
                    category: 'Conferencia',
                    image: './img/cards/event9.jpg',
                    free: true,
                    espacios: 300,
                    atp: true,
                    date: 'THU, JUN 3, 2021, 8:00 PM CST',
                    location: 'Online'
                },
            ]
        }
    },
    methods: {
        showEventDetails(index) {
            //console.log("INDEX -> " + index);
            this.selectedEvent = index;


        },
        addToCart() {
            this.cart += Number(this.qty);
        },
        removeFromCart() {


        },
        closeModal() {

        },
        showStr(estado) {
            if (estado) {
                return "Si";
            } else {
                return "No";
            }
        },

        detectRelated(id, category) {
            let rela = [];

            this.events.forEach(function (evento, index) {
                if (evento.id != id && evento.category == category) {
                    rela.push(evento);


                }



            });
            this.related = rela;
        },

        chargeTotal(total) {
            this.total = total;
        },
        checkSpaces() {
            if (this.name != '' && this.lname != '' && this.email != '' && this.total != 0) {
                return false;
            } else {
                return true;
            }
        },
        confirmSpaces() {
            if (this.name != '' && this.lname != '' && this.email != '' && this.total != 0) {
                this.visible = !this.visible;
            }
        }



    }
});