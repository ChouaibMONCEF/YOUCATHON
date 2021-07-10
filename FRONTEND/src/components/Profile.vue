<template>
  <div class="profile-container">
    <div class="profile-details">
      <img class="profile-img" src="../assets/home.jpg" alt="Profilepicture" />
      <h1 class="profile-name">Mohssine Elattari</h1>
      <h5 class="profile-view">View Profile</h5>
    </div>
    <div class="Progres">
      <H1 class="progres-title">Subjects Progress </H1>
      <div class="box">
        <label class="bar" for="file">Mathematiques</label>
        <progress max="100" value="80"></progress>
      </div>
      <div class="box">
        <label class="bar" for="file">Physics</label>
        <progress max="100" value="80"></progress>
      </div>
      <div class="box">
        <label class="bar" for="file">English</label>
        <progress max="100" value="80"></progress>
      </div>
      <div class="box">
        <label class="bar" for="file">Philosophy</label>
        <progress max="100"  value="80"></progress>
      </div>
    </div>
    <div class="Progres">
      <H1 class="progres-title">OverAll Progress </H1>
      <div class="box">
        <label class="bar" for="file">This Year</label>
        <progress max="100" value="80"></progress>
      </div>
      
    </div>
  </div>
</template>
<style scoped>
.profile-container {
  /* background-color: red; */
  width: 450px;
}
.profile-img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  border: 1px solid #7579e7;
  margin-bottom: 22px;
}
.profile-name {
  font-family: "poppins", sans-serif;
  font-size: 16px;
  color: #232670;
  font-weight: normal;
    margin-bottom: 13px;

}
.profile-view {
  font-family: "poppins", sans-serif;
  font-size: 13px;
  color: #232670;
  font-weight: normal;
  margin-bottom: 20px;
}
.progres-title {
  font-family: "poppins", sans-serif;
  font-size: 20px;
  color: #232670;
  font-weight: bold;
  MARGIN-BOTTOM: 20PX;
}
.box {
    display: flex;
    flex-direction: column;
}
.Progres {
  text-align: start;
}
progress {
    width: 300PX;
        margin-bottom: 10px;
    /* color: blueviolet; */
    /* background-color: lightgrey; */
}
.bar {
  font-family: "poppins", sans-serif;
  font-size: 15px;
  color: #232670;
  font-weight: normal;
}
</style>