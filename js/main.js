const {createApp} = Vue;

createApp({
    data() {
        return {
            apiURL: './server.php',
        }
    },

    methods: {
        getAlbum(){
            axios.get(this.apiURL).then((response)=>    {
                console.log(response.data);
            })
        },
    },

    created() {
      this.getAlbum();  
    },
}).mount('#app');