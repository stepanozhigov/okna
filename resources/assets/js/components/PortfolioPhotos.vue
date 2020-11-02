<template>
    <div class="portfolio__content container b-texture">
        <div class="portfolio__filter">
            <a href="javascript:void(0)" v-bind:class="{'tag portfolio__tag': true, 'tag_active': !currentType}" v-on:click="setCurrentType(null)">Все работы</a>
            <a
                    v-if="types && types.length"
                    v-for="type in types"
                    href="javascript:void(0)"
                    v-bind:class="{'tag portfolio__tag': true, 'tag_active': (parseInt(currentType) === parseInt(type.id))}"
                    v-on:click="setCurrentType(type.id)"
            >{{type.name}}</a>
        </div>
        <gallery-list v-if="photos && photos.length" :photos="photos"></gallery-list>
        <!-- Старая вёрстка для отображения фото без галлереии в popup
        <div v-if="photos && photos.length" class="portfolio__list" id="portfolio__list" :data-photos="photos">
            <a v-for="photo in photos" class="case b-card portfolio__item">
                <p class="case__totals">{{ (photo.price ? photo.price : 0) + ' ₽ / ' + (photo.area ? photo.area : '0.0' ) + 'м'}}<sup>2</sup></p>
                <img :src="photo.src" alt="Фотопечать" class="case__img">
                <p class="card-title case__title">{{ (photo.name) ? photo.name : 'Название не установленно'}}</p>
            </a>
        </div>
        -->
    </div>
</template>
<script>
    import axios from 'axios';
    export default {
        name: 'portfolio-photos',
        props: {
            types: {
                type: Array,
                default: () => {
                    return [];
                }
            }
        },
        data: function () {
            return {
                currentType: null,
                photos: []
            }
        },
        mounted: function () {},
        created() {
            this.$nextTick(() => this.getPhotos());
        },
        computed: {
              endpoint() {
                  return location.protocol + '//'
                      + location.hostname
                      + (location.port ? (':' + location.port) : '');
              }
        },
        watch: {
            'currentType'() {
                this.getPhotos();
            }
        },
        methods: {
            setCurrentType(id) {
                this.currentType = id;
            },
            getPhotos() {
                axios.get(this.endpoint + '/ajax/portfolio/' + this.currentType + '/photos')
                    .then(r => {
                        if (r && r.data) this.photos = Object.assign([], r.data);
                    });
            }
        }
    }
</script>