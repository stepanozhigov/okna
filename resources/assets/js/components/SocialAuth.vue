<template>
    <div :class="[mix, 'socials']">
        <a @click="vkAuth()" href="" class="socials__item">
            <div class="socials__icon socials__icon_vk"></div>
        </a>
        <a href="" class="socials__item">
            <div class="socials__icon socials__icon_ok"></div>
        </a>
        <a href="" class="socials__item">
            <div class="socials__icon socials__icon_fb"></div>
        </a>
        <a href="" class="socials__item">
            <div class="socials__icon socials__icon_inst"></div>
        </a>
    </div>
</template>


<script>
    export default {
        data: function () {
            return {
                user: {}
            }
        },
        props: ['mix'],
        methods: {
            vkAuth: function () {
                VK.init({
                    apiId: 5898289
                });
                VK.Auth.login(response => {
                    if (response.session) {
                        let user = response.session.user;
                        return VK.Api.call('users.get', {'user_ids': user.id, fields: 'photo_200', v: '5.80'}, res => {
                            var userData = {
                                socialType: 'vk',
                                userHref: user.href,
                                fullName: user.first_name + ' ' + user.last_name,
                                surname: user.last_name,
                                avatar: res.response[0].photo_200
                            };
                            this.user = userData;
                            localStorage.setItem('socialUser', JSON.stringify(userData));

                        });
                    }
                });
            }
        },
        mounted () {
            this.user = JSON.parse(localStorage.getItem('socialUser'))
        },
        watch: {
            user: function (val) {
                if (val) {
                    this.$emit('logged', val);
                }

            }
        }
    };
</script>
