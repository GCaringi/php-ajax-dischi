const app = new Vue({
    el: "#app",
    data: {
        albums: [],
        genres: new Set(),
        select: "all",
    },
    created(){
        axios
            .get("http://localhost:8888/php-ajax-dischi/server/api.php",{
            params: {
                filter : this.select,
            }})
            .then((response) => {
                this.albums = response.data;
                response.data.forEach(element => {
                    this.genres.add(element.genre);
                })
            })
            .catch((response) => {
                console.log("Error",response);
            })
    },
    methods: {
        filterPage(){
            axios
            .get("http://localhost:8888/php-ajax-dischi/server/api.php",{
            params: {
                filter : this.select,
            }})
            .then((response) => {
                this.albums = response.data;
                response.data.forEach(element => {
                    this.genres.add(element.genre);
                })
            })
            .catch((response) => {
                console.log("Error",response);
            })
        }
    }
})