import './assets/main.css'

import { createApp } from 'vue'//create vue application
import { createPinia } from 'pinia'//global state management
//import the bootstrap package
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.bundle.min.js'
import App from './App.vue'
import router from './router'

//create vue app
const app = createApp(App)

app.use(createPinia())
//page navigation
app.use(router)

app.mount('#app')
