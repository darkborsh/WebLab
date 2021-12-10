<template>
  <div class="wrapper">
    <Header></Header>
    <PageContent></PageContent>
    <div class="search">
      <div class="trends">
        <section class="prev-title landing">
          <h3 class="left-text">TRENDING NOW</h3>
          <a href="index.html"><h5 class="right-text">View all</h5></a>
        </section>
        <div style="clear: left"></div>
        <div style="clear: right"></div>
        <section class="search-trending landing">
          <span class="v-for" v-for="titles in titles">
            <Titles :titles="titles"></Titles>
          </span>
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
import PageContent from "./PageContent";
import Titles from "./Titles";

export default {
  name: 'Home',
  components: {
    Header,
    Footer,
    PageContent,
    Titles
  },

  data() {
    return {
      titles: [
        {
          title: 'Mushoku Tensei: Isekai Ittara Honki Dasu Part 2',
          img: require('../assets/img/title1.jpg')
        },
        {
          title: 'ONE PIECE',
          img: require('../assets/img/title2.jpg')
        },
        {
          title: 'Kimetsu no Yaiba 2',
          img: require('../assets/img/title3.png')
        },
        {
          title: 'Komi-san wa, Komyushou desu',
          img: require('../assets/img/title4.png')
        }
      ]
    }
  }
}

</script>

<style src="../assets/style/home-style.css">
</style>