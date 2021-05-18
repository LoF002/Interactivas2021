const app = Vue.createApp({
    data(){
        return{
            tittle: 'Event',
            description: 'Event description',
            image: './imgs/event01.jpg',
            inventory: 30,
            cart: 0
        }
    },
    methods:{
        addToCart(){
            this.cart += 1;
        },
        removeFromCart(){
            if(this.cart>0) this.cart -=1;
        }
    }
});