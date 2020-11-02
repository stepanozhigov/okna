<template>
    <transition-group v-if="showCount < 5" name="list"  tag="div" class=" banks">
        <div v-for="bank in showedItems" :key="bank.id" class="banks__item" v-touch:swipe="offsetShowPoint">
            <img v-bind:src="bank.img" alt="" class="banks__item-image">
        </div>
    </transition-group>
    <div v-else class="banks">
        <div v-for="bank in banks" :key="bank.id" class="banks__item" v-touch:swipe="offsetShowPoint">
            <img v-bind:src="bank.img" alt="" class="banks__item-image">
        </div>
    </div>
</template>
<style>
.banks__item {
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
                banks: [
                    {'id':0, 'img': '/img/banks/credit_alfa.png'},
                    {'id': 1, 'img': '/img/banks/credit_globex.png'},
                    {'id': 2, 'img': '/img/banks/credit_otkrytie.png'},
                    {'id': 3, 'img': '/img/banks/credit_otp.png'},
                    {'id': 4, 'img': '/img/banks/credit_otpcredit_tinkoff.png'}
                ]
            }
        },
        computed: {
            showedItems: function () {
                var itemsCount = this.banks.length,
                    index = this.showPoint,
                    items = [];

                while (items.length < this.showCount) {
                    if (!this.banks[index]) {
                        index = 0;
                    }
                    items.push(this.banks[index]);

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

                const itemsCount = this.banks.length;

                this.showPoint ++;

                if (this.showPoint == itemsCount) {
                    this.showPoint = 0;
                }
            },
            offsetBackShowPoint (stop = false) {
                if (stop) {
                    this.stopSliding();
                }

                const itemsCount = this.banks.length;

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
