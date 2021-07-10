<template>
  <nav>
    <div class="container">
      <H1 class="logo">NAJA7</H1>
      <div class="box">
        <input class="search" placeholder="Your Question here." type="text" />
        <button class="search-icon">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="18.223"
            height="18.227"
            viewBox="0 0 18.223 18.227"
          >
            <path
              id="Icon_ionic-ios-search"
              data-name="Icon ionic-ios-search"
              d="M22.509,21.4l-5.068-5.116a7.223,7.223,0,1,0-1.1,1.11l5.035,5.082a.78.78,0,0,0,1.1.028A.785.785,0,0,0,22.509,21.4ZM11.765,17.458a5.7,5.7,0,1,1,4.034-1.67A5.668,5.668,0,0,1,11.765,17.458Z"
              transform="translate(-4.5 -4.493)"
              fill="#888cea"
            />
          </svg>
        </button>
      </div>

      <div class="btn-group">
        <h4>Lessons</h4>
        <button class="btn1">Sign in</button>
        <button class="btn2">Register</button>
      </div>
    </div>
  </nav>
</template>

<style scoped>
nav {
  background-color: #7579e7;
  height: 93px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 90%;
  margin: auto;
  justify-content: space-between;
}
.logo {
  font-family: 'poppins', sans-serif;
  font-size: 40px;
  font-weight: bold;
  color: #fff;
}
.box {
  display: flex;
  align-items: center;
}
.search {
  height: 38px;
  border-radius: 4px 0 0 4px;
  border: none;
  outline: none;
  width: 578px;
  box-sizing: border-box;
  padding-left: 20px;
  /* color: #BFBFBF;
  font-family: Segoe UI; */
  font-size: 17px;
  
}
.btn-group {
  display: flex;
  align-items: center;
}
h4 {
  font-family: 'poppins', sans-serif;
  font-size: 15px;
  font-weight: bold;
  color: #fff;
  cursor: pointer;
}
.btn1 {
  height: 40px;
  width: 125px;
  border-radius: 4px;
  font-family: 'poppins', sans-serif;
  font-size: 15px;
  font-weight: bold;
  color: #fff;
  outline: none;
  background-color: transparent;
  border: 2px solid #fff;
  margin-left: 20px;
  cursor: pointer;
}
.btn2 {
  height: 40px;
  width: 125px;
  border-radius: 4px;
  font-family: 'poppins', sans-serif;
  font-size: 15px;
  font-weight: bold;
  color: #7579e7;
  background-color: #fff;
  outline: none;
  border: none;
  cursor: pointer;
  margin-left: 20px;
}
.search-icon {
  height: 38px;
  cursor: pointer;
  width: 30px;
  border: none;
  outline: none;
  background-color: #fff;
  border-radius: 0 4px 4px 0;
  padding-right: 20px;
  display: inline-grid;
  align-items: center;
}
</style>