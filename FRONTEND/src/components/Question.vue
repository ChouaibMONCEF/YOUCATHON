<template>
  <div class="box3">
    <div class="question-box2">
      <div class="counter">
        <button @click="$store.commit('increasecounter')" class="counter-item">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20.911"
            height="11.859"
            viewBox="0 0 20.911 11.859"
          >
            <path
              id="Icon_awesome-caret-up"
              data-name="Icon awesome-caret-up"
              d="M20.3,24.75H2.2a1.406,1.406,0,0,1-.994-2.4L10.256,13.3a1.406,1.406,0,0,1,1.989,0l9.047,9.047A1.406,1.406,0,0,1,20.3,24.75Z"
              transform="translate(-0.794 -12.891)"
              fill="#7579e7"
            />
          </svg>
        </button>
        <div class="counter-item">{{ $store.state.count }}</div>
        <button @click="$store.commit('decreasecounter')" class="counter-item">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20.911"
            height="11.859"
            viewBox="0 0 20.911 11.859"
          >
            <path
              id="Icon_awesome-caret-up"
              data-name="Icon awesome-caret-up"
              d="M20.3,24.75H2.2a1.406,1.406,0,0,1-.994-2.4L10.256,13.3a1.406,1.406,0,0,1,1.989,0l9.047,9.047A1.406,1.406,0,0,1,20.3,24.75Z"
              transform="translate(21.706 24.75) rotate(180)"
              fill="#db1f58"
            />
          </svg>
        </button>
      </div>
      <div class="box">
        <h1 class="question_title">
          consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna ?
        </h1>
        <p class="question_para">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est vel
          dolorem officiis ipsum veritatis, eos, autem, minus aspernatur
          cupiditate laudantium accusamus dignissimos maiores dolores sunt animi
          error! Voluptate, reiciendis minus?
        </p>
      </div>
    </div>
    <div class="question-box2">
        <div class="counter">
          <button
            @click="$store.commit('increasecounter')"
            class="counter-item"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20.911"
              height="11.859"
              viewBox="0 0 20.911 11.859"
            >
              <path
                id="Icon_awesome-caret-up"
                data-name="Icon awesome-caret-up"
                d="M20.3,24.75H2.2a1.406,1.406,0,0,1-.994-2.4L10.256,13.3a1.406,1.406,0,0,1,1.989,0l9.047,9.047A1.406,1.406,0,0,1,20.3,24.75Z"
                transform="translate(-0.794 -12.891)"
                fill="#7579e7"
              />
            </svg>
          </button>
          <div class="counter-item">{{ $store.state.count }}</div>
          <button
            @click="$store.commit('decreasecounter')"
            class="counter-item"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20.911"
              height="11.859"
              viewBox="0 0 20.911 11.859"
            >
              <path
                id="Icon_awesome-caret-up"
                data-name="Icon awesome-caret-up"
                d="M20.3,24.75H2.2a1.406,1.406,0,0,1-.994-2.4L10.256,13.3a1.406,1.406,0,0,1,1.989,0l9.047,9.047A1.406,1.406,0,0,1,20.3,24.75Z"
                transform="translate(21.706 24.75) rotate(180)"
                fill="#db1f58"
              />
            </svg>
          </button>
        </div>
        <div class="box">
          <h1 class="question_title">
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna ?
          </h1>
          <p class="question_para">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est vel
            dolorem officiis ipsum veritatis, eos, autem, minus aspernatur
            cupiditate laudantium accusamus dignissimos maiores dolores sunt
            animi error! Voluptate, reiciendis minus?
          </p>
        </div>
      </div>
      <div class="question-box2">
        <div class="counter">
          <button
            @click="$store.commit('increasecounter')"
            class="counter-item"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20.911"
              height="11.859"
              viewBox="0 0 20.911 11.859"
            >
              <path
                id="Icon_awesome-caret-up"
                data-name="Icon awesome-caret-up"
                d="M20.3,24.75H2.2a1.406,1.406,0,0,1-.994-2.4L10.256,13.3a1.406,1.406,0,0,1,1.989,0l9.047,9.047A1.406,1.406,0,0,1,20.3,24.75Z"
                transform="translate(-0.794 -12.891)"
                fill="#7579e7"
              />
            </svg>
          </button>
          <div class="counter-item">{{ $store.state.count }}</div>
          <button
            @click="$store.commit('decreasecounter')"
            class="counter-item"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20.911"
              height="11.859"
              viewBox="0 0 20.911 11.859"
            >
              <path
                id="Icon_awesome-caret-up"
                data-name="Icon awesome-caret-up"
                d="M20.3,24.75H2.2a1.406,1.406,0,0,1-.994-2.4L10.256,13.3a1.406,1.406,0,0,1,1.989,0l9.047,9.047A1.406,1.406,0,0,1,20.3,24.75Z"
                transform="translate(21.706 24.75) rotate(180)"
                fill="#db1f58"
              />
            </svg>
          </button>
        </div>
        <div class="box">
          <h1 class="question_title">
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna ?
          </h1>
          <p class="question_para">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est vel
            dolorem officiis ipsum veritatis, eos, autem, minus aspernatur
            cupiditate laudantium accusamus dignissimos maiores dolores sunt
            animi error! Voluptate, reiciendis minus?
          </p>
        </div>
      </div>
      <div class="question-box2">
        <div class="counter">
          <button
            @click="$store.commit('increasecounter')"
            class="counter-item"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20.911"
              height="11.859"
              viewBox="0 0 20.911 11.859"
            >
              <path
                id="Icon_awesome-caret-up"
                data-name="Icon awesome-caret-up"
                d="M20.3,24.75H2.2a1.406,1.406,0,0,1-.994-2.4L10.256,13.3a1.406,1.406,0,0,1,1.989,0l9.047,9.047A1.406,1.406,0,0,1,20.3,24.75Z"
                transform="translate(-0.794 -12.891)"
                fill="#7579e7"
              />
            </svg>
          </button>
          <div class="counter-item">{{ $store.state.count }}</div>
          <button
            @click="$store.commit('decreasecounter')"
            class="counter-item"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20.911"
              height="11.859"
              viewBox="0 0 20.911 11.859"
            >
              <path
                id="Icon_awesome-caret-up"
                data-name="Icon awesome-caret-up"
                d="M20.3,24.75H2.2a1.406,1.406,0,0,1-.994-2.4L10.256,13.3a1.406,1.406,0,0,1,1.989,0l9.047,9.047A1.406,1.406,0,0,1,20.3,24.75Z"
                transform="translate(21.706 24.75) rotate(180)"
                fill="#db1f58"
              />
            </svg>
          </button>
        </div>
        <div class="box">
          <h1 class="question_title">
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna ?
          </h1>
          <p class="question_para">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est vel
            dolorem officiis ipsum veritatis, eos, autem, minus aspernatur
            cupiditate laudantium accusamus dignissimos maiores dolores sunt
            animi error! Voluptate, reiciendis minus?
          </p>
        </div>
      </div>
      <div class="question-box2">
        <div class="counter">
          <button
            @click="$store.commit('increasecounter')"
            class="counter-item"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20.911"
              height="11.859"
              viewBox="0 0 20.911 11.859"
            >
              <path
                id="Icon_awesome-caret-up"
                data-name="Icon awesome-caret-up"
                d="M20.3,24.75H2.2a1.406,1.406,0,0,1-.994-2.4L10.256,13.3a1.406,1.406,0,0,1,1.989,0l9.047,9.047A1.406,1.406,0,0,1,20.3,24.75Z"
                transform="translate(-0.794 -12.891)"
                fill="#7579e7"
              />
            </svg>
          </button>
          <div class="counter-item">{{ $store.state.count }}</div>
          <button
            @click="$store.commit('decreasecounter')"
            class="counter-item"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20.911"
              height="11.859"
              viewBox="0 0 20.911 11.859"
            >
              <path
                id="Icon_awesome-caret-up"
                data-name="Icon awesome-caret-up"
                d="M20.3,24.75H2.2a1.406,1.406,0,0,1-.994-2.4L10.256,13.3a1.406,1.406,0,0,1,1.989,0l9.047,9.047A1.406,1.406,0,0,1,20.3,24.75Z"
                transform="translate(21.706 24.75) rotate(180)"
                fill="#db1f58"
              />
            </svg>
          </button>
        </div>
        <div class="box">
          <h1 class="question_title">
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna ?
          </h1>
          <p class="question_para">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est vel
            dolorem officiis ipsum veritatis, eos, autem, minus aspernatur
            cupiditate laudantium accusamus dignissimos maiores dolores sunt
            animi error! Voluptate, reiciendis minus?
          </p>
        </div>
      </div>
      <div class="question-box2">
        <div class="counter">
          <button
            @click="$store.commit('increasecounter')"
            class="counter-item"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20.911"
              height="11.859"
              viewBox="0 0 20.911 11.859"
            >
              <path
                id="Icon_awesome-caret-up"
                data-name="Icon awesome-caret-up"
                d="M20.3,24.75H2.2a1.406,1.406,0,0,1-.994-2.4L10.256,13.3a1.406,1.406,0,0,1,1.989,0l9.047,9.047A1.406,1.406,0,0,1,20.3,24.75Z"
                transform="translate(-0.794 -12.891)"
                fill="#7579e7"
              />
            </svg>
          </button>
          <div class="counter-item">{{ $store.state.count }}</div>
          <button
            @click="$store.commit('decreasecounter')"
            class="counter-item"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20.911"
              height="11.859"
              viewBox="0 0 20.911 11.859"
            >
              <path
                id="Icon_awesome-caret-up"
                data-name="Icon awesome-caret-up"
                d="M20.3,24.75H2.2a1.406,1.406,0,0,1-.994-2.4L10.256,13.3a1.406,1.406,0,0,1,1.989,0l9.047,9.047A1.406,1.406,0,0,1,20.3,24.75Z"
                transform="translate(21.706 24.75) rotate(180)"
                fill="#db1f58"
              />
            </svg>
          </button>
        </div>
        <div class="box">
          <h1 class="question_title">
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna ?
          </h1>
          <p class="question_para">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est vel
            dolorem officiis ipsum veritatis, eos, autem, minus aspernatur
            cupiditate laudantium accusamus dignissimos maiores dolores sunt
            animi error! Voluptate, reiciendis minus?
          </p>
        </div>
      </div>

  </div>
</template>

<style scoped>
.question-box2 {
  display: flex;
  border: 1px solid #7579e7;
  border-radius: 3px;
  margin-bottom: 20px;
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
  padding: 15px 0px 15px 0px;
}
.counter {
  width: 10%;
  padding: 25px 0 0 0;
}
.counter-item {
  background: none;
  border: none;
}
.question_para {
  font-family: "poppins", sans-serif;
  font-size: 16px;
  font-weight: normal;
  color: #232670;
}
.box3{
  overflow-y: scroll;
  /* overflow:-moz-hidden-unscrollable; */
  height:70vh;
}
</style>