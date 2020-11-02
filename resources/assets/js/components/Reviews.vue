<template>
	<div class="reviews__content">
	</div>
</template>

<script>
	export default {
		data: function () {
			return {
				mode: 'list',
				showCount: 3,
				showPoint: 0,
				screenWidth: $(document).width()
			}
		},
		props: ['reviews'],
		mounted: function () {
			console.log('reviews', 'screen width', this.screenWidth);
		}
	}
</script>