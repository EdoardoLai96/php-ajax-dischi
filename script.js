
   
const app = new Vue({

    el: '#root',

    created() {
        axios.get('http://localhost/php-ajax-dischi/server.php').then((response) => {
             this.discCollection = response.data;
        });
    },
    data: {
    discCollection : [],
    selectedGenre : "",
    },
    computed:{
        discsByGenres(){
            if(this.selectedGenre != ""){
                return this.discCollection.filter(item => item.genre == this.selectedGenre)
            }else{
                return this.discCollection;
            }
        }
    }

})