<template>
  <div class="wrapper">
    <Header></Header>
    <PageContent></PageContent>
    <Footer></Footer>
  </div>
</template>

<script>
// @ is an alias to /src

import Header from "./Header"
import Footer from "./Footer";
import PageContent from "./PageContent";

export default {
  name: 'Home',
  components: {
    Header,
    Footer,
    PageContent
  }
}
</script>

<style src="../assets/style/home-style.css">
</style>