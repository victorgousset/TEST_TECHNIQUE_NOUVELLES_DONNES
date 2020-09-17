<template>
  <div>
    <h2 class="center">PARKING & CAR</h2>
    <div>{{ message_Parking }}</div>
    <ul>
      <li :key="parking.id" v-for="parking in words">{{ parking }}</li>
    </ul>
    <div>{{ message_Car }}</div>
    <ul>
      <li :key="parking.id" v-for="parking in words">{{ parking }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      message_Parking: "Parking",
      message_Car: "Car",
      words: [],
      words_Car: []




      
    };
  },
  mounted() {
    let el = document.querySelector("div[data-words]");
    let mywords = el.dataset.words.split(",");
    this.words.push.apply(this.words, mywords);





  }
};
</script>

<style>
.center {
  text-align: center;
}
</style>