<template>
  <header>
    <div class="header_elements">
      <router-link to="/">
        <img class="logo" src='../assets/img/logo.png' alt="AniBase">
      </router-link>
      <div class="links">
          <span class="wrap_browse">
              <a class="link" href="index.html">Browse</a>
          </span>
          <a class="link" href="index.html">Social</a>
          <a class="link" href="index.html">Forum</a>
          <router-link class="link login signup" to="/login">Login</router-link>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: "Header"
}
</script>

<style src="../assets/style/header-style.css">
</style>
