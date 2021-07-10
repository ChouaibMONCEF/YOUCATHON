<template>
  <Navbar />
  <div class="home">
    <Sidebar />
    <div class="container">
      <h1 class="ask1">Ask Question</h1>
      <!-- <form>
        <label class="label" for="">Question :</label>
        <input class="input" type="text" />
        <label class="label" for="">Question :</label>
        <input class="input" type="text" />
        <label class="label" for="">Question :</label>
        <input class="input" type="text" />
        <label class="label" for="">Question :</label>
        <textarea class="textarea" name="" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Send">
        <button class="btn" type="submit">Send</button>
      </form> -->
      <questionForm />
    </div>
    

    <Profile />
  </div>
</template>

<script>
// @ is an alias to /src
import Navbar from "@/components/Navbar.vue";
import Sidebar from "@/components/Sidebar.vue";
import Profile from "@/components/Profile.vue";
import questionForm from "@/components/questionForm.vue";

export default {
  name: "Home",
  components: {
    Navbar,
    Sidebar,
    Profile,
    questionForm,
  },
};
</script>

<style scoped>
body {
  background-color: #f8f8fe;
}
.profile-container[data-v-bf1681ae] {
  /* background-color: red; */
  width: 450px;
  margin-left: 50px;
}
.home {
  margin: 40px auto 0;
  display: flex;
  width: 90%;

  height: calc(100vh - 133px);
}
.container {
  width: 100%;
  text-align: start;
}
.ask1 {
  font-family: "poppins", sans-serif;
  font-size: 30px;
  font-weight: normal;
  color: #232670;
  margin-bottom: 40px;
}
/* form {
  display: flex;
  flex-direction: column;
  margin: auto;
  width: 90%;
  border: 1px solid #7579e7;
  border-radius: 4px;
  padding: 20px 20px 20px 20px;
} */
/* .label {
  color: #232670;
  font-family: "poppins", sans-serif;
  font-size: 25px;
  font-weight: normal;
}
.input {
  width: 978px;
  height: 38px;
  border-radius: 4px;
  border: 0.5px solid rgba(112, 112, 112, 0.6);
  margin-bottom: 20px;
  background-color: white;
  outline: none;
}
.textarea {
  max-width: 978px;
  border-radius: 4px;
  margin-bottom: 20px;
  border: 0.5px solid rgba(112, 112, 112, 0.6);
}
.btn {
  width: 173px;
  height: 38px;
  background-color: #7579e7;
  color: #fff;
  border-radius: 4px;
  border: none;
  outline: none;
  margin-bottom: 20px;
  align-self: flex-end;
} */
</style>