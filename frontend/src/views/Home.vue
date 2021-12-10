<template>
  <div class="wrapper">
    <Header></Header>
    <Footer></Footer>
  </div>
</template>

<script>
// @ is an alias to /src

import Header from "./Header"
import Footer from "./Footer";

export default {
  name: 'Home',
  components: {
    Header,
    Footer
  }
}
</script>

<style src="../assets/style/home-style.css">
</style>