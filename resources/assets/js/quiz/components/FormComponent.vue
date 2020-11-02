<template>
    <form class="form" @submit="submitForm">
        <input type="text" v-model="name" class="input input_name" placeholder="Введите ваше имя"/>
        <div>
            <masked-input 
                type="tel" 
                autocomplete="off" 
                required
                v-model="phoneclear"
                placeholder="Введите ваш номер*"
                mask="\+\7 (111) 111-11-11"
                @input="phone = arguments[1]"
                class="input"
                />
        </div>
        <button :disabled="!isPhoneValid" class="btn">{{button}}</button>
    </form>
</template>

<script>
    import MaskedInput from 'vue-masked-input'
    import axios from 'axios'
    import { mapActions } from 'vuex'
    
    const pattern = /^[0-9]+$/;

    export default {
        data: function () {
            return {
                name: '',
                phone: '',
                phoneclear: '',
                rawVal: ''
            }
        },
        props: ['button', 'tag'],
        computed: {
            isPhoneValid() {
                return pattern.test(this.phone)
            }
        },
        methods: {
            ...mapActions([
                'beforeSendForm'
            ]),
            submitForm (e){
                e.preventDefault();

                axios.post('/lead', {
                    name: this.name,
                    phone: this.phone,
                    tag: this.tag
                }).then(response => (
                    this.phoneclear = '',
                    this.name = '',
                    this.beforeSendForm()
                ))
            }
        },
        components: { 
            MaskedInput
        }
    }
</script>