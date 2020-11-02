import Vue from 'vue';
window.Vue = Vue;

Vue.component('quiz-component', require('./views/Quiz.vue'));

new Vue({
    el: '#app'
})







