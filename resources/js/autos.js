let app = new Vue({
  el:'#root',
  data: {
    autos:[]
  },

  created() {
    axios.get('http://localhost:8000/api/autos').then((response) => {
      this.autos = response.data.data;
    });
  }
}) //Chiusura Vue
