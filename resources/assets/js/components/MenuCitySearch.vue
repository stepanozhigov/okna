<template>
    <div style="display: flex; flex-direction: column;" >
        <label class="dropdown__search search">
            <img src="/img/gui/search.svg" alt="" class="search__icon">
            <input v-model="search" type="text" placeholder="Поиск города" class="input search__input">
        </label>
        <a v-bind:href="'/'+city.code" :key="city.id" v-for="city in filtered" class="text dropdown__item dropdown__item_bordered red-hoverable">{{ city.name }}</a>
        <a v-if="search.length > 0 && filtered.length == 0" class="text dropdown__item dropdown__item_bordered red-hoverable">К сожалению, ничего не найдено</a>
    </div>
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
                search: '',
                notFiltered: [
                    1, 2, 3, 4, 5, 6, 7, 8        
                ]
            }
        },
        props: ['cities'],
        computed: {
            filtered () {
                if (this.search.length < 1) {
                    return [];
                }

                return this.cities.filter(city => {
                    var name = city.name.toLowerCase();
                    if (name.includes(this.search.toLowerCase()) && !this.notFiltered.includes(city.id)) {
                        return true;
                    }
                    return false;
                });
            }
        },
        mounted() {
            console.log('Window calc Component mounted.')
        },
        methods: {
        }        
    }
</script>
