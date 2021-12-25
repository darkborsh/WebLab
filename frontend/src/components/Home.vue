<template>
  <div class="wrapper">
    <Header></Header>
    <div class="homepage_content">
      <div class="wrap">
        <div class="landing">
          <h1 class="heading">
            The next-generation anime platform
          </h1>
          <h2 class="sub_heading">
            Track, share, and discover your favorite
            anime and manga with AniBase.
          </h2>
          <div class="feature_cards">
            <div class="features" v-for="features in features">
              <Features :features="features"></Features>
            </div>
          </div>
          <a href="" class="join_btn">
            <div class="label">Join Now</div>
          </a>
        </div>
      </div>
    </div>
    <div class="search">
      <div class="trends">
        <section class="prev-title landing">
          <h3 class="left-text">TITLES</h3>
          <a href=""><h5 class="right-text">View yours</h5></a>
        </section>
        <div style="clear: left"></div>
        <div style="clear: right"></div>
        <section class="search-trending landing">
          <div class="v-for titles" v-for="titles in titles">
            <Titles :titles="titles"></Titles>
          </div>
        </section>
      </div>
    </div>
    <Footer></Footer>
  </div>
</template>

<script>
// @ is an alias to /src

import Header from "./Header"
import Footer from "./Footer";
import Titles from "./Titles";
import Features from "./Features";

export default {
  name: 'Home',
  components: {
    Header,
    Footer,
    Titles,
    Features
  },

  data() {
    return {
      titles: [],
      features: []
    }
  },

  created() {
      this.$http.get('/features')
          .then(response => this.features = response.data)

      this.$http.get('/titles')
          .then(response => this.titles = response.data)
  }
}

</script>

<style src="../assets/style/home-style.css">
</style>
