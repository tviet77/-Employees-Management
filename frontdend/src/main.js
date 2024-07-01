import { createApp } from 'vue'
import { createPinia } from 'pinia'
import {
    Drawer,
    Button,
    message,
    List,
    Menu,
    Card,
    Table}
    from 'ant-design-vue';
import './style.css'
import App from './App.vue'
import router from './router/index.js'
import axios from "axios";

window.axios = axios;

import 'ant-design-vue/dist/antd.css';
import 'bootstrap/dist/css/bootstrap.min.css'

const app = createApp(App)
app.use(createPinia())
app.use(router)
app.use(Button)
app.use(Drawer)
app.use(List)
app.use(Menu)
app.use(Card)
app.use(Table)
app.mount('#app')

app.config.globalProperties.$message = message;