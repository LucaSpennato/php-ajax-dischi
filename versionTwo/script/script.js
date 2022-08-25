const app = new Vue({
    el: '#app',
    data: {
      disks: ''
    },
    methods: {
        getDisks(){
            axios.get('http://localhost/php-ajax-dischi/versionTwo/controller/controller.php')
            .then((response) =>{
                this.disks = response.data;
                console.log(response);
            })
        }
    },
    created(){
        this.getDisks();
    }

  })