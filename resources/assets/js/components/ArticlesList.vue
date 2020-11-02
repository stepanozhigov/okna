<template>
    <div class="articles__slider">
        <div class="articles__list">
            <div class="articles__content">
                <post v-for="post in posts" :post="post" :key="post.id"></post>
            </div>
        </div>
		<button @click="offsetShowPoint(true)" class="articles__slide articles__prev">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16"><defs><path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z"/></defs><g><g transform="translate(-1405 -522)"><use fill="" xlink:href="#83zha"/></g></g></svg>
        </button>
        <button @click="offsetShowPoint(false)" class="articles__slide articles__next">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16"><defs><path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z"/></defs><g><g transform="translate(-1405 -522)"><use fill="" xlink:href="#83zha"/></g></g></svg>
        </button>
    </div>
</template>

<script>
    Vue.component('post', require('./Article.vue'));
    export default {
        props: ['posts'],

        data: function () {
            return {
                imgPath: '/storage/',
                mode: 'list',
                showCount: 3,
                showPoint: 0
            }
        },
        mounted: function () {
            var width = $(document).width();

            if (width <= 1280) {
                this.showCount = 2;
            }
            if (width <= 719) {
                this.showCount = 1;
            }
        },
        methods: {
            offsetShowPoint(reverse = false) {
                if (reverse) {
                    const itemsCount = this.posts.length;
                    this.showPoint --;

                    if (this.showPoint <= 0) {
                        this.showPoint = itemsCount;
                    }
                } else {
                    const itemsCount = this.posts.length;
                    this.showPoint ++;

                    if (this.showPoint == itemsCount) {
                        this.showPoint = 0;
                    }
                }
            }
        },
        computed: {
            showedItems: function () {
                var itemsCount = this.posts.length,
                    index = this.showPoint,
                    items = [];

                while (items.length < this.showCount) {
                    if (!this.posts[index]) {
                        index = 0;
                    }
                    items.push(this.posts[index]);

                    index ++;
                }

                return items;
            }
        }
    }
</script>
