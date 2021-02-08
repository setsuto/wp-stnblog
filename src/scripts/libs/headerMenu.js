var app = new Vue({
  el: '#headerMenu',
  data: {
    headerLists: [{
        id: 'global-container',
        name: 'Qiita'
      },
      {
        id: 'about',
        name: '映画'
      },
      {
        id: 'skill',
        name: '趣味'
      },
      {
        id: 'contact',
        name: 'contact'
      }
    ]
  },
});

let vm = new Vue({
  el: '#qiita-posts',
  data: {
    posts: [],
  },
  filters: {
    moment: function (date) {
        return moment(date).format('YYYY.MM.DD HH:mm');
    }
},
  methods: {
    getPosts() {
      axios.get('https://qiita.com/api/v2/users/stnb1201/items')
        .then((res) => {
          vm.posts = res.data;
        })
        .catch((res) => {
          console.error(res);
        });
      }
    },
    created() {
      this.getPosts();
    },
});
