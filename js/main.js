const {createApp} = Vue;

createApp({
    data() {
        return {
            apiURL: './server.php',
            albumsList: [],
        }
    },

    methods: {
        getAlbum(){
            axios.get(this.apiURL).then((response)=>{
                //console.log(response.data);

                this.albumsList = response.data;
            })
        },
    },

    created() {
      this.getAlbum();  
    },
}).mount('#app');