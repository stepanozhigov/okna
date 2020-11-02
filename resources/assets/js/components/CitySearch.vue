<template>
    <label class="cities__search search">
        <img class="search__icon" src="/img/gui/search.svg" alt="">
        <input type="text" class="input search__input" placeholder="Поиск города" v-model="search">
        <transition name="fade">
            <div v-if="filtered.length > 0" class="search__result">
                <a v-bind:href="'/'+city.code" v-for="city in filtered" class="button search__button">{{ city.name }}</a>
            </div>
            <div v-if="filtered.length == 0" class="search__result">
                <p class="text">К сожалению, ничего не найдено</p>
            </div>
        </transition>
    </label>
</template>

<style>
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active до версии 2.1.8 */ {
  opacity: 0;
}
</style>

<script>
    export default {
        data: function () {
            return {
                search: ''
            }
        },
        props: ['cities'],
        computed: {
            filtered () {
                if (this.search.length < 1) {
                    return false
                }
                return this.cities.filter(city => city.name.toLowerCase().includes(this.search.toLowerCase()));
            }
        }
    }
</script>
