<template>
    <div class="portfolio__list">
        <a @click="toggleMode(index)" v-for="(photo, index) in photos" v-bind:key="photo.id" class="case b-card portfolio__item">
            <img :src="`/storage/${photo.src}`" alt="3" class="case__img">
            <p class="card-title case__title">{{ photo.name }}</p>
            <hr class="line line_small case__line">
            <div class="case__totals">
                <p class="case__info text">Стоимость: {{ photo.price.toLocaleString() }}  ₽</p>
                <p class="case__info text">Площадь: {{ photo.area }} м<sup>2</sup></p>
            </div>
        </a>
        <div @click="toggleMode" v-bind:class="['overlay', mode == 'detail' ? 'overlay_active':'']"></div>
        <div v-if="mode == 'detail'" class="gallery">
            <p class="gallery__totals">{{ photos[currentPhotoIndex].price }}  ₽ / {{ photos[currentPhotoIndex].area }} м<sup>2</sup></p>
            <img @click="toggleMode" class="gallery__close" src="/img/gui/close.svg">
            <img @click="prevItem" class="gallery__prev" src="/img/gui/arrow_top.png">
            <img @click="nextItem" class="gallery__next" src="/img/gui/arrow_top.png">            
            <img class="gallery__img b-card" :src="`/storage/${photos[currentPhotoIndex].src}`">
        </div>
    </div>
    
</template>

<script>
    export default {
        data: function () {
            return {
                showCount: 5,
                showPoint: 0,
                interval: 0,
                currentPhotoIndex: 0,
                mode: 'list'
            }
        },
        computed: {
            showedItems: function () {
                var itemsCount = this.photos.length,
                    index = this.showPoint,
                    items = [];

                while (items.length < this.showCount) {
                    if (!this.photos[index]) {
                        index = 0;
                    }
                    items.push(this.photos[index]);

                    index ++;
                }

                return items;
            }
        },
        props:['photos'],
        methods: {
            nextItem () {
                this.currentPhotoIndex++;

                if (!this.photos[this.currentPhotoIndex]) {
                    this.currentPhotoIndex = 0
                }
            },
            prevItem () {
                this.currentPhotoIndex--;

                if (!this.photos[this.currentPhotoIndex]) {
                    this.currentPhotoIndex = this.photos.length - 1;
                }
            },
            toggleMode (index) {
                if (this.mode == 'list') {
                    this.currentPhotoIndex = index;
                    this.mode = 'detail';
                } else {
                    this.mode = 'list';
                }                
            }
        },
        mounted: function () {
        }
    }
</script>
