<template>
  <div>
    <button type="button" class="btn btn-primary ml-5" @click="followUser">Follow</button>
  </div>
</template>

<script>
export default {
  props: ["userId"],
  mounted() {
    console.log("Component mounted.");
  },

  methods: {
    followUser() {
      axios.post("/follow/" + this.userId ).then(respose => alert(respose.data));
    }
  }
};
</script>
