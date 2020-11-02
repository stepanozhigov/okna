<template>
    <transition-group name="list-complete"  tag="div" class="carousel catalog__carousel">
        <a :href="'/'+this.city.code+'/catalogue/'+city.slug" v-touch:swipe.left="offsetShowPoint" v-touch:swipe.right="offsetBackShowPoint" v-for="(cat, index) in showedItems" v-bind:key="cat.id" class="carousel__item b-card">
            <img :data-src="'/storage/'+cat.img" :alt="cat.name" class="carousel__item_img lazyload">
            <div class="carousel__item_wrap">
                <p class="carousel__item_title">{{ cat.name }}</p>

            </div>
        </a>
    </transition-group>    
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
                showCount: null,
                showPoint: 0,
                interval: 0,
                currentCatIndex: 0,
            }
        },
        computed: {
            showedItems: function () {
                if(!this.cats) {
                    return false;
                }
                var itemsCount = this.cats.length,
                    index = this.showPoint,
                    items = [];

                while (items.length < this.showCount) {
                    if (!this.cats[index]) {
                        index = 0;
                    }
                    items.push(this.cats[index]);
                    index ++;
                }
                return items;
            },

        },
        props:['cats', 'city'],
        methods: {
            onResize() {
                if(document.documentElement.clientWidth >= 768){
                    this.showCount = 8;
                }else{
                    this.showCount = 7;
                }
            },
            formatPrice(value) {
                return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")
            },
            offsetShowPoint (stop = false) {
                if (stop) {
                    this.stopSliding();
                }
                if(!this.cats) {
                    return false;
                }

                const itemsCount = this.cats.length;
                this.showPoint ++;
                if (this.showPoint == itemsCount) {
                    this.showPoint = 0;
                }
            },
            offsetBackShowPoint (stop = false) {
                if (stop) {
                    this.stopSliding();
                }

                const itemsCount = this.cats.length;
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
        },
        created() {
            window.addEventListener('resize', this.onResize);
            this.onResize();
        },
        beforeDestroy() {
            window.removeEventListener('resize', this.onResize);
        },
    }
</script>