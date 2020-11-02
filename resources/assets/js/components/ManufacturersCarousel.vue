<template>
    <transition-group v-if="showCount < 5" name="list"  tag="div" class="manufacturers__list">
        <div v-for="manufacturer in showedItems" :key="manufacturer.id" class="manufacturers__item" v-touch:swipe="offsetShowPoint">
            <img v-bind:src="manufacturer.img" alt="" class="manufacturers__item-image">
        </div>
    </transition-group>
    <div v-else class="manufacturers__list">
        <div v-for="manufacturer in manufacturers" :key="manufacturer.id" class="manufacturers__item" v-touch:swipe="offsetShowPoint">
            <img v-bind:src="manufacturer.img" alt="" class="manufacturers__item-image">
        </div>
    </div>
</template>
<style>
.manufacturers__item {
    transition: all 1s;
}
.list-enter {
     opacity: 0;
     transform: translateX(250px);
}
.list-leave-active {
    opacity: 0;
    position: absolute;
    transform: translateX(-250px);
}


</style>

<script>
    export default {
        data: function () {
            return {
                showCount: 5,
                showPoint: 0,
                interval: 0,
                currentPhotoIndex: 0,
                manufacturers: [
                    {'id':0, 'img': '/img/manufacturers/Monblanc.svg'},
                    {'id': 1, 'img': '/img/manufacturers/Veka.svg'},
                    {'id': 2, 'img': '/img/manufacturers/Kbe.svg'},
                    {'id': 3, 'img': '/img/manufacturers/Rehau.svg'},
                    {'id': 4, 'img': '/img/manufacturers/Deceuninck.svg'}
                ]
            }
        },
        computed: {
            showedItems: function () {
                var itemsCount = this.manufacturers.length,
                    index = this.showPoint,
                    items = [];

                while (items.length < this.showCount) {
                    if (!this.manufacturers[index]) {
                        index = 0;
                    }
                    items.push(this.manufacturers[index]);

                    index ++;
                }

                return items;
            }
        },
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

                const itemsCount = this.manufacturers.length;

                this.showPoint ++;

                if (this.showPoint == itemsCount) {
                    this.showPoint = 0;
                }
            },
            offsetBackShowPoint (stop = false) {
                if (stop) {
                    this.stopSliding();
                }

                const itemsCount = this.manufacturers.length;

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
            }
        },
        mounted: function () {
            console.log(34234);
            this.startSliding();
            var width = $(document).width();

            if (width <= 1280) {
                this.showCount = 3;
            }
            if (width <= 719) {
                this.showCount = 1;
            }
        }
    }
</script>
