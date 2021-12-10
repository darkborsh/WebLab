<template>
  <section>
    <Header></Header>
    <Footer></Footer>
  </section>
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
