import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        city:null,
        siteUrl: 'https://okna-ts.ru',
        isModal: false,
        isSuccess: false,
    }
})
