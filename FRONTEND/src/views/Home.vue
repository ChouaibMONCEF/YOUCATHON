<template>
  <Navbar />
  <div class="home">
    <Sidebar />
    <div class="container">
      <div class="question-top">
        <h1 class="question">hhhhhh</h1>
        <button class="question-btn">Ask Question</button>
      </div>
      <div class="question-top2">
        <h5 class="question1">203,921 Question</h5>
        <div class="question-box">
          <div class="filter">
            <h4 class="bbb">Newest</h4>
            <hr />
            <h4 class="filter_item">Newest</h4>
            <hr />
            <h4 class="filter_item">Newest</h4>
            <hr />
            <h4 class="filter_item">Newest</h4>
          </div>
        </div>
      </div>
      <Question/>
    </div>
    <Profile />
  </div>
</template>

<script>
// @ is an alias to /src
import Navbar from "@/components/Navbar.vue";
import Sidebar from "@/components/Sidebar.vue";
import Profile from "@/components/Profile.vue";
import Question from "@/components/Question.vue";

export default {
  name: "Home",
  components: {
    Navbar,
    Sidebar,
    Profile,
    Question

  },
};
</script>

<style scoped>
body {background-color:#F8F8FE;}
.profile-container[data-v-bf1681ae] {
    /* background-color: red; */
    width: 450px;
    margin-left: 50PX;
}
.home {
  margin: 40px auto 0;
  display: flex;
  width: 90%;
  background-color:#F8F8FE;
  height: 100%;
  /* height: calc(100vh - 133px); */
}
.container {
  width: 100%;
}
.question-top {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
  
}
.question-top2 {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
  align-items: center;
}
.question {
  font-family: "poppins", sans-serif;
  font-size: 30px;
  font-weight: normal;
  color: #232670;
}
.bbb{
  cursor: pointer;
}
.question-btn {
  height: 38px;
  width: 173px;
  color: white;
  background-color: #7579e7;
  border-radius: 4px;
  font-family: "poppins", sans-serif;
  font-size: 15px;
  font-weight: normal;
  outline: none;
  border: none;
  cursor: pointer;
}
.question1 {
  font-family: "poppins", sans-serif;
  font-size: 20px;
  font-weight: normal;
  color: #232670;
}
.filter {
  display: flex;
  height: 100%;
  width: 90%;
  margin: 0 auto;
  align-items: center;
  justify-content: space-between;
  background-color: white;
}
.question-box {
  border-radius: 2px;
  border: 1px solid #7579e7;
  height: 54px;
  width: 400px;
  background-color: white;
}
.filter_item {
  font-weight: normal;
  cursor: pointer;
}

hr {
  width: 35px;
  transform: rotate(90deg);
  /* color: #7579e7; */
  border: 1px solid #7579e7;
}

.question-box2 {
  display: flex;
  border: 1px solid #7579e7;
  border-radius: 3px;
}
.counter {
  margin: 10px 0 10px 0;
}
.question_title {
  font-family: "poppins", sans-serif;
  font-size: 25px;
  font-weight: normal;
  color: #232670;
  margin-bottom: 15px;
}
.box {
  text-align: start;
  width: 90%;
  margin-left: auto;
  PADDING: 15PX 0PX 15PX 0PX;
}
.counter{
  width: 10%;
  PADDING: 25px 0 0 0;
}
.counter-item{
  background:none;
  border: none;
}
.question_para{
  font-family: "poppins", sans-serif;
  font-size: 16px;
  font-weight: normal;
  color: #232670;
}
</style>