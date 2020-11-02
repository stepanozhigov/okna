<template>
    <div class="portfolio__wrapper">
        <button @click="offsetBackShowPoint(true)" type="button" class="portfolio__prev" name="button">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16"><defs><path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z"/></defs><g><g transform="translate(-1405 -522)"><use fill="" xlink:href="#83zha"/></g></g></svg>
        </button>

            <div class="portfolio__carousel">
                <transition-group name="list-complete"  tag="div" class="portfolio__carousel">
                    <a v-touch:swipe.left="offsetShowPoint" v-touch:swipe.right="offsetBackShowPoint" @click="toggleMode(index)" v-for="(photo, index) in showedItems" v-bind:key="photo.id" class="case b-card portfolio__item portfolio__item_slide">
                        <img :data-src="`/storage/${postfix_url(photo.src)}`" alt="3" class="case__img lazyload">
                        <p class="card-title case__title">{{ photo.name }}</p>
                        <hr class="line line_small case__line">
                        <div class="case__totals">
                            <p class="case__info text">Стоимость: {{ photo.price.toLocaleString() }}  ₽</p>
                            <p class="case__info text">Площадь: {{ photo.area }} м<sup>2</sup></p>
                        </div>
                    </a>
                 </transition-group>
                <div @click="toggleMode" v-bind:class="['overlay', 'overlay_dark', mode == 'detail' ? 'overlay_active':'']"></div>
                <div v-if="mode == 'detail'" class="gallery">
                    <p class="gallery__totals">{{ showedItems[currentPhotoIndex].price }}  ₽ / {{ showedItems[currentPhotoIndex].area }} м<sup>2</sup></p>
                    <img @click="toggleMode" class="gallery__close" src="/img/gui/close.svg">
                    <img @click="prevItem" class="gallery__prev" src="/img/gui/arrow_top.png">
                    <img @click="nextItem" class="gallery__next" src="/img/gui/arrow_top.png">
                    <img class="gallery__img b-card" :src="`/storage/${showedItems[currentPhotoIndex].src}`">
                </div>
            </div>

        <button @click="offsetShowPoint(true)" type="button" class="portfolio__next" name="button">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16"><defs><path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z"/></defs><g><g transform="translate(-1405 -522)"><use fill="" xlink:href="#83zha"/></g></g></svg>
        </button>
    </div>
</template>
<style>
.list-complete-item {
  transition: all 1s;
  display: inline-block;
  margin-right: 10px;
}
.list-complete-enter, .list-complete-leave-to
/* .list-complete-leave-active до версии 2.1.8 */ {
  opacity: 0;
  transform: translateY(30px);
}
.list-complete-leave-active {
  position: absolute;
  display: none;
}
</style>
<script>
    export default {
        data: function () {
            return {
                showCount: 9,
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
            postfix_url(value) {
                return value.toString().replace(/(\.[^\.]+)$/, '-preview$1');
                
            },
            nextItem () {
                this.currentPhotoIndex++;

                if (!this.showedItems[this.currentPhotoIndex]) {
                    this.currentPhotoIndex = 0
                }
            },
            prevItem () {
                this.currentPhotoIndex--;

                if (!this.showedItems[this.currentPhotoIndex]) {
                    this.currentPhotoIndex = this.showedItems.length - 1;
                }
            },
            offsetShowPoint (stop = false) {
                if (stop) {
                    this.stopSliding();
                }

                const itemsCount = this.photos.length;

                this.showPoint ++;

                if (this.showPoint == itemsCount) {
                    this.showPoint = 0;
                }
            },
            offsetBackShowPoint (stop = false) {
                if (stop) {
                    this.stopSliding();
                }

                const itemsCount = this.photos.length;

                this.showPoint --;

                if (this.showPoint <= 0) {
                    this.showPoint = itemsCount;
                }
            },
            startSliding () {
                this.interval = setInterval(this.offsetShowPoint, 3000);
            },
            stopSliding () {
                clearInterval(this.interval);
            },
            toggleMode (index) {
                if (this.mode == 'list') {
                    this.currentPhotoIndex = index;
                    this.stopSliding();
                    this.mode = 'detail';
                } else {
                    this.mode = 'list';
                    this.startSliding();
                }
            }
        },
        mounted: function () { 
            this.startSliding();
        }
    }
</script>
