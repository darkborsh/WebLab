<template>
  <div class="wrapper">
    <Header></Header>
    <div class="page_content">
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
          <h3 class="left-text">TRENDING NOW</h3>
          <a href=""><h5 class="right-text">View all</h5></a>
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
      ],
      features: [
        {
          title: 'Discover your obsessions',
          description: 'What are your highest rated genres or most watched voice actors?\n' +
              'Follow your watching habits over time with in-depth statistics.',
          img: require('../assets/img/icon1.svg')
        },
        {
          title: 'Bring AniBase anywhere',
          description: 'Keep track of your progress on-the-go with one of many AniList apps across iOS, Android, macOS, and Windows.',
          img: require('../assets/img/icon2.svg')
        },
        {
          title: 'Join the conversation',
          description: 'Share your thoughts with our thriving community, make friends, socialize, and receive recommendations.',
          img: require('../assets/img/icon3.svg')
        },
        {
          title: 'Tweak it to your liking',
          description: 'Customize your scoring system, title format, color scheme,\n' +
              '                                and much more! Also, we have a dark mode.',
          img: require('../assets/img/icon4.svg')
        }
      ]
    }
  }
}

</script>

<style src="../assets/style/home-style.css">
</style>