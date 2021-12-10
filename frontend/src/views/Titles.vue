<template>
    <div class="media-card">
      <a href="">
        <img :src = titles.img alt="img">
      </a>
      <h4 class="titleName">
        <a href="">{{titles.title}}</a>
      </h4>
    </div>
</template>

<script>
export default {
  name: "Titles",
  props: ['titles']
}
</script>