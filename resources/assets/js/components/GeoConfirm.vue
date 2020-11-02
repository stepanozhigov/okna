<template>
	<div v-if="located && !confirmed" class="geoConfirm">
	    <div class="container">
	        <div class="geoConfirm__content">
	            <div class="geoConfirm__city"> 
	                <p class="geoConfirm__city-text">Ваш город <span class="geoConfirm__city-name">{{ located.name }}</span> </p>
	            </div>
	            <button @click="confirm" class="geoConfirm__confirm">Да, верно</button>
	            <button @click="citiesShown = true" class="geoConfirm__choose">Нет, сменить город</button>
	        </div>
	        <div v-if="citiesShown" class="geoConfirm__choose-city">
	            <div class="geoConfirm__choose-content">
	                <a @click="chose(city)" v-if="city.name !== located.name && city.hidden !== 1" v-for="city in cities" class="geoConfirm__choose-link red-hoverable">{{ city.name }}</a>  
	            </div>
	        </div>
	    </div>
	</div>

</template>

<script type="text/javascript">
	export default {
		data: function () {
			return {
				located: null,
				confirmed: false,
				citiesShown: false
			}
		},
		mounted: function () {
			if (!localStorage.getItem('cityConfirm')) {
				this.confirmed = false;
				this.getCity();
			} else {
				this.confirmed = true;
			}
		},
		props: ['cities'],
		methods: {
			getCity: function () {
				var thus = this;
				$.ajax({
			        url:'/geo/locate',
			        dataType: 'json',
			        success: function (response) {
			            if (response.city)
			            {
			                window.city = response.city;
			                window.city.location = response.location;

			                thus.located = response.city;
			                // if(response.city.code) {
			                //     citySwitch.text('Выбрать '+ response.city.name);
			                //     citySwitch.attr('href', 'https://potolki-ts.ru/'+ response.city.code);
			                // }
			            }
			        }
			    });
			},
			chose: function (city) {
				this.confirm();
				window.location = '/'+ city.code;
			},
			confirm: function () {
				this.confirmed = true;
				localStorage.setItem('cityConfirm', true);
				if (location.href.search(this.located.code) < 0) {
						location = '/' + this.located.code;
				}
			}
		}
	}
</script>