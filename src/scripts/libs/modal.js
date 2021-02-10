let sss = new Vue({
  el: '#movie-posts',
  data() {
    return {
      movies: [],
      apiKey: '65d5958e2e015c9b9d209285d930e600',
    }
  },
  methods: {
    getMovies() {
      axios.get(``)
        .then(response => {
          this.movies = response.data.results
          console.log(this.movies);
          // Vue.use(MagicGrid)
        })
      console.log(this.movies);
    },
  },
  created() {
    this.getMovies();
  }
})

