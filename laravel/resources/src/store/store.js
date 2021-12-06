import { createStore } from 'vuex';
import auth from './modules/auth/index';


const store = createStore({
    modules: {
        auth,
    },
    state() {
        return {
            showLoading: false,
        };
    },

});

export default store;