import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../components/Home'
import TitlePage from '../components/TitlePage'
import LoginPage from '../components/LoginPage'

Vue.component('app-loginpage', LoginPage)
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
  },
  {
    path: '/login',
    name: 'LoginPage',
    component: LoginPage
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
