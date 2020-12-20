import Vue from 'vue';
import axios from 'axios';

const app = new Vue ({
    el: '#app',
    data: {
        dischi: [],
    },
    created() {
        axios.get('http://localhost:8888/php-ajax-dischi/scripts/json_script_database.php')
        .then(response => {
            this.dischi = response.data;
        })
    }
})