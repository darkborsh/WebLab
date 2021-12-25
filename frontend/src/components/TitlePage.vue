<template>
  <div class="wrapper">
    <Header></Header>
    <div class="page_content" v-if = "titles">
    <div class="title-info">
      <img :src="require(`../assets/img/${titles.id}.jpg`)" class="banner" alt="">
      <div class="info">
        <div class="container">
          <div class="cover-wrap overlap-banner">
            <div class="cover-wrap-inner">
              <img :src="require(`../assets/img/title${titles.id}.jpg`)" class="cover" alt="">
              <div class="action">
                <div class="AddButton" v-if = "flag">Added to Base</div>
                <div class="AddButton" v-else>Add to Base</div>
              </div>
            </div>
          </div>
          <div class="content">
            <h1>{{titles.name}}</h1>
            <p class="description">
              {{titles.description}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <Footer></Footer>
  </div>
</template>

<script>
import Footer from "./Footer";
import Header from "./Header";
import Titles from "./Titles";

export default {
  name: "TitlePage",
  components: {
    Header,
    Footer,
    Titles
  },
    data() {
        return {
            flag: null,
            titles: null
        }
    },

    created() {
        //Scrolls to top when view is displayed
        window.scrollTo(0, 0);

        const id = this.$route.params.id
        this.$http.get('/titles/' + id)
            .then(response => this.titles = response.data)

        this.info()
    },

    methods: {
      info() {
          const params = {
              userId: localStorage.userId, titleId: this.$route.params.id
          }
          this.$http.post('/user_titles', params)
              .then(response => this.flag = response.data)
      }
    }
}

</script>

<style src="../assets/style/titlepage-style.css">

</style>
