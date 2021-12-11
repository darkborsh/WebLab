import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import TitlePage from "../views/TitlePage";

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/title',
    name: 'TitlePage',
    component: TitlePage
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
