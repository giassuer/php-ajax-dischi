Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        dischi: []
    },
    methods: {
        getDisc: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/milestone-2/server.php')
            .then((response) => {
                this.dischi = response.data;
            });
        }
    },
    created: function() {
        this.getDisc();
    }
});