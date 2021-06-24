const app = Vue.createApp({
    data() {
        return {
            qtyK: 0,
            qtyA: 0,
            total: 0,
            email: "",
            name: "",
            events: [{
                    id: 101,
                    image: './img/event01.png',
                    title: 'Bajando la montaña',
                    'description': 'Let\'s get together to discuss the future of getting together. Introducing RECONVENE, a two-day virtual summit made by and for independent event makers and doers (we call them “creators”), featuring some of the most forward-thinking entrepreneurs, artists, producers, and promoters in the event world. You’ll also hear from some of the biggest stars in health, equity, and wellness. On Day One, you\'ll get access to the latest guidelines for re-opening. On Day Two, you\'ll get your hands dirty at workshops with some of your industry heroes and peers. We hope you\'ll join us to explore where the event world is heading — or better yet, where you\'d like to take it.',
                    location: 'Río Frío',
                    date: 'Thu, May 20, 2021, 1:00 PM CST',
                    category: 'Cycling',
                    priceA: 10000,
                    priceK: 5000,
                    available: true,
                    inventory: 200
                },
                {
                    id: 102,
                    image: './img/event02.png',
                    title: 'Ruta de los conquitadores',
                    'description': 'Let\'s get together to discuss the future of getting together. Introducing RECONVENE, a two-day virtual summit made by and for independent event makers and doers (we call them “creators”), featuring some of the most forward-thinking entrepreneurs, artists, producers, and promoters in the event world. You’ll also hear from some of the biggest stars in health, equity, and wellness. On Day One, you\'ll get access to the latest guidelines for re-opening. On Day Two, you\'ll get your hands dirty at workshops with some of your industry heroes and peers. We hope you\'ll join us to explore where the event world is heading — or better yet, where you\'d like to take it.',
                    location: 'Cariari',
                    date: 'Thu, May 20, 2021, 1:00 PM CST',
                    category: 'Cycling',
                    priceA: 10000,
                    priceK: 5000,
                    available: true,
                    inventory: 200
                }
            ]
        }
    },
    methods: {
        chargeTotal(total) {
            this.total = total;
        }
    }
});

let nav = document.body.getElementsByClassName('top-nav')[0];

let modal = document.body.getElementsByClassName('modal')[0];

function openMobileMenu() {
    nav.style.left = "0";
    modal.style.display = "block";
} //Fin funtion

function closeMobileMenu() {
    nav.style.left = "-24em";
    modal.style.display = "none";
} //Fin funtion

window.onclick = function (e) {
    if (e.target == modal) {
        modal.style.display = "none";
        nav.style.left = "-24em";
    }
}