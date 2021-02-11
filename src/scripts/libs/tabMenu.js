let tab = new Vue({
  el: "tabMenu",
  data() {
    return {
      active: 0,
      items: ["news", "column", "game", "OTHER"],
    };
  },
  methods: {
    activate: function (index) {
      this.active = index;
    },
  },
});
