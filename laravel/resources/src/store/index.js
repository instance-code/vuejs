import { createStore } from 'vuex';
import errors from './errors';

const store = createStore({
  modules: {
    errors
  }
});

export default store;
