<template>
    <div class="catalogue-slider">
        <button @click="offsetBackShowPoint(true)" type="button" class="catalogue-slider__prev" name="button">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16"><defs><path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z"/></defs><g><g transform="translate(-1405 -522)"><use fill="" xlink:href="#83zha"/></g></g></svg>
        </button>

            <div class="catalogue-slider__carousel">
                <transition-group name="list-complete"  tag="div" class="catalogue-slider__carousel">
                    <a v-touch:swipe.left="offsetShowPoint" v-touch:swipe.right="offsetBackShowPoint" @click="toggleMode(index)" v-for="(photo, index) in showedItems" v-bind:key="photo.id" class="catalogue-slider__item">
                        <img :src="`/storage/${photo.src}`" alt="3" class="catalogue-slider__img">
                    </a>
                 </transition-group>
                <div @click="toggleMode" v-bind:class="['overlay', 'overlay_dark', mode == 'detail' ? 'overlay_active':'']"></div>
                <div v-if="mode == 'detail'" class="gallery">
                    <img class="gallery__img b-card" :src="`/storage/${showedItems[currentPhotoIndex].src}`">
                </div>
            </div>

        <button @click="offsetShowPoint(true)" type="button" class="catalogue-slider__next" name="button">
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
