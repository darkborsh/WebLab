<template>
    <div class="media-card">
      <router-link :to = "{name:'TitlePage', params: {id: titles.id}}">
        <img :src = titles.img alt="img">
      </router-link>
      <h4 class="titleName">
        <router-link :to = "{name:'TitlePage'}">{{titles.name}}</router-link>
      </h4>
    </div>
</template>

<script>
export default {
  name: "Titles",
  props: ['titles']
}
</script>
