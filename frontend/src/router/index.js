import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../components/Home'
import TitlePage from '../components/TitlePage'

Vue.component('app-titlepage', TitlePage)
Vue.component('app-home', Home)
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/titles/:id',
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
