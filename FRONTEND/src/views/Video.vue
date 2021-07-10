<template>
  <Navbar />
  <div class="home">
    <h1 class="title">Donec massa sapien faucibus et. Congue.</h1>
    <div class="container">
      <div class="video-box">
        <!-- <video controls>
          <source src="https://www.youtube.com/watch?v=xKuJrmlCdig" type="video/mp4" />
          <source src="movie.ogg" type="video/ogg" />
          Try another browser
        </video> -->
        <iframe
          src="https://www.youtube.com/embed/xKuJrmlCdig"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
      <div id="box" class="box">
        <div class="boxx">
          <div class="question-box">
            <div class="question">
              <h1 class="question-title">
                Morbi tincidunt augue interdum velit euismod in ?
              </h1>
              <p class="question-description">
                Putate odio ut enim blandit volutpat maecenas volutpat blandit.
                Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo.
                Adipiscing commodo elit at imperdiet dui accumsan sit amet
              </p>
            </div>
          </div>
          <div class="question-box">
            <div class="question">
              <h1 class="question-title">
                Morbi tincidunt augue interdum velit euismod in ?
              </h1>
              <p class="question-description">
                Putate odio ut enim blandit volutpat maecenas volutpat blandit.
                Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo.
                Adipiscing commodo elit at imperdiet dui accumsan sit amet
              </p>
            </div>
          </div>
          <div class="question-box">
            <div class="question">
              <h1 class="question-title">
                Morbi tincidunt augue interdum velit euismod in ?
              </h1>
              <p class="question-description">
                Putate odio ut enim blandit volutpat maecenas volutpat blandit.
                Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo.
                Adipiscing commodo elit at imperdiet dui accumsan sit amet
              </p>
            </div>
          </div>
          <div class="question-box">
            <div class="question">
              <h1 class="question-title">
                Morbi tincidunt augue interdum velit euismod in ?
              </h1>
              <p class="question-description">
                Putate odio ut enim blandit volutpat maecenas volutpat blandit.
                Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo.
                Adipiscing commodo elit at imperdiet dui accumsan sit amet
              </p>
            </div>
          </div>
          <div class="question-box">
            <div class="question">
              <h1 class="question-title">
                Morbi tincidunt augue interdum velit euismod in ?
              </h1>
              <p class="question-description">
                Putate odio ut enim blandit volutpat maecenas volutpat blandit.
                Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo.
                Adipiscing commodo elit at imperdiet dui accumsan sit amet
              </p>
            </div>
          </div>
          <div class="question-box">
            <div class="question">
              <h1 class="question-title">
                Morbi tincidunt augue interdum velit euismod in ?
              </h1>
              <p class="question-description">
                Putate odio ut enim blandit volutpat maecenas volutpat blandit.
                Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo.
                Adipiscing commodo elit at imperdiet dui accumsan sit amet
              </p>
            </div>
          </div>
          <div class="question-box">
            <div class="question">
              <h1 class="question-title">
                Morbi tincidunt augue interdum velit euismod in ?
              </h1>
              <p class="question-description">
                Putate odio ut enim blandit volutpat maecenas volutpat blandit.
                Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo.
                Adipiscing commodo elit at imperdiet dui accumsan sit amet
              </p>
            </div>
          </div>
        </div>
        <div class="btn-group">
          <button class="Back">Back</button>
          <button class="Continue">Continue</button>
        </div>
      </div>
    </div>
  </div>
</template>




<script>
// @ is an alias to /src
import Navbar from "@/components/Navbar.vue";

export default {
  name: "Home",
  components: {
    Navbar,
  },
 
};
</script>

<style scoped>
body {
  background-color: #f8f8fe;
}
.home {
  margin: 40px auto 0;
  display: flex;
  flex-direction: column;
  text-align: start;
  width: 90%;

  height: calc(100vh - 133px);
}
.title {
  font-family: "poppins", sans-serif;
  font-size: 30px;
  font-weight: normal;
  color: #232670;
  margin-bottom: 20px;
}
.container {
  display: flex;
}
.box {
  width: 470px;
  height: 650px;
  /* background-color:red; */
  border-radius: 3px;
  
  box-sizing: border-box;
  margin-left: 10px;
  display: flex;
    flex-direction: column;
}
.video-box {
  width: 1160px;
}
iframe {
  height: 650px;
  width: 100%;
  margin-right: 10%;
}
.question-box {
  width: 90%;
  margin: auto;
  /* background-color:beige; */
  padding: 10px 0 10px 0;
}
.question-title {
  font-family: "poppins", sans-serif;
  font-size: 20px;
  font-weight: bold;
  color: #7579e7;
}
.question-description {
  font-family: "poppins", sans-serif;
  font-weight: normal;
  font-size: 15px;
  color: #232670;
}
.btn-group {
  display: flex;
  justify-content: space-between;
  margin-top: 28PX;
}
.boxx{
        overflow-y: scroll;
width: 470px;
  height: 550px;
  border: 1px solid #7579e7;
    padding: 10px 0 10px 0;

}
.Back{
    width: 183px;
    height: 50px;
    border-radius: 4px;
    border: 2px solid #7579E7;
    background-color: #fff;
    cursor: pointer;
    color: #232670;
    font-family: "poppins", sans-serif;
    font-size: 20px;
    font-weight: normal;
    
}
.Continue{
    width: 183px;
    height: 50px;
    border-radius: 4px;
    border: none;
    background-color: #7579E7;
    cursor: pointer;
    color: #fff;
    font-family: "poppins", sans-serif;
    font-size: 20px;
    font-weight: normal;
}
</style>