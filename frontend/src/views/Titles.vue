<template>
    <div class="media-card">
      <a href="">
        <img :src = titles.img alt="img">
      </a>
      <h4 class="titleName">
        <router-link to="/title">{{titles.title}}</router-link>
      </h4>
    </div>
</template>

<script>
export default {
  name: "Titles",
  props: ['titles']
}
</script>