// Looking for the v1.5 template?
// https://codepen.io/pen?template=GVoaNe

const App = {
    template: '#app-template',
    data: () => ({
      //
    })
  }
  
  
  new Vue({
    vuetify: new Vuetify(),
    render: h => h(App)
  }).$mount('#app')