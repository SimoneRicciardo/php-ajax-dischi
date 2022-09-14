var app = new Vue({
    el: '#app',
    data: {
        database: []
    },
    created() {

        console.log('TEST');

        axios.get('http://localhost/php-ajax-dischi/database.php')
        .then(response => (
            this.database = response.data
            ))
    }
  })