const { createApp } = Vue;

createApp({
    data() {
        return {
            dischi: [],
        }
    },
    mounted() {
        axios.get('./server.php').then(res => {
        console.log(res.data);
        this.dischi = res.data
    })
    },
}).mount("#app");