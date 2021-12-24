<template>
  <div class="feature_card">
    <div class="icon">
      <img :src = "require(`../assets/img/icon${features.id}.svg`)" alt="img">
    </div>
    <div>
      <h3 class="title">{{features.title}}</h3>
      <div class="description">
        {{features.description}}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Features",
  props: ['features']
}
</script>
