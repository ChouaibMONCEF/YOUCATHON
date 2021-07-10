import { createStore } from 'vuex'

export default createStore({
  state: {
    count: 0,
  },
  mutations: {
    decreasecounter(state) {
      state.count--
    },
    increasecounter(state) {
      state.count++
    },
  },
  actions: {
  },
  modules: {
  }
})
