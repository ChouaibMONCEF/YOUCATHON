<template>
  <Navbar />
  <div class="home">
    <Sidebar />
    <div class="container">gggggg</div>
    <Profile/>
  </div>
</template>

<script>
// @ is an alias to /src
import Navbar from "@/components/Navbar.vue";
import Sidebar from "@/components/Sidebar.vue";
import Profile from "@/components/Profile.vue";

export default {
  name: "Home",
  components: {
    Navbar,
    Sidebar,
    Profile
  },
};
</script>

<style scoped>
.home {
  margin: 40px auto 0;
  display: flex;
  width:90%;
  /* margin: auto; */
}
.container {
  height: 100vh;
  width: 100%;
}
/* Sidebar {
  width: 30%;
} */
</style>