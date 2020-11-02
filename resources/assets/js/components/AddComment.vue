<template>
    <div class="comment comment_client">
        <p class="third-title comment__title">Добавить комментарий</p>
        <textarea class="textarea comment__textarea" v-bind:disabled="!isUserLogged" name="" id="" v-bind:placeholder="placeholder" v-model="message"></textarea>
        <div v-if="isUserLogged" class="comment__user comment__user_client user">
            <div class="user__left">
                <img v-bind:src="user.avatar" alt="" class="user__avatar">
            </div>
            <div class="user__right">
                <p class="text user__name">{{ user.fullName }}</p>
            </div>
        </div>
        <div v-if="!isUserLogged" class="comment__auth">
            <span class="comment__autorise">Авторизуйтесь через</span>
            <div class="comment__socials socials">
                <a @click="vkAuth()" href="javascript:void(0)" class="socials__item">
                    <div class="socials__icon socials__icon_vk"></div>
                </a>
                <a href="javascript:void(0)" class="socials__item js-social-auth" data-social="vk">
                    <div class="socials__icon socials__icon_ok"></div>
                </a>
                <a href="javascript:void(0)" class="socials__item js-social-auth" data-social="vk">
                    <div class="socials__icon socials__icon_fb"></div>
                </a>
                <a href="javascript:void(0)" class="socials__item js-social-auth" data-social="vk">
                    <div class="socials__icon socials__icon_inst"></div>
                </a>
            </div>
        </div>
        <div class="comment__controls">
            <button v-if="!isSended" class="comment__sent" @click="send()">Отправить</button>
            <span class="intro" v-if="isSended">Комментарий отправлен!</span>
            <span class="link comment__close js-close">Закрыть</span>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
               user: {},
               message: '',
               isSended: false
            }
        },
        computed: {
            placeholder () {
                return this.isUserLogged ? 'Введите ваше сообщение':'Авторизуйтесь, чтобы оставить комментарий.'
            },
            isUserLogged () {
                return Object.keys(this.user).length > 0;
            },
            isValidated () {
                return this.user && this.message.length > 0
            }
        },
        methods: {
            send () {
                var $this = this;

                $.ajax({
                    url:'/forms/add-comment',
                    method: 'post',
                    data: {
                        _token: $('[name=token]').attr('content'),
                        fio: $this.user.fullName,
                        avatar: $this.user.avatar,
                        text: $this.message,
                        review_id: $this.review,
                        type: 'client'
                    },
                    success: function () {
                        $this.isSended = true;
                    }
                })
            },
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
        props: ['review'],
        mounted () {
            if (localStorage.getItem('socialUser')) {
                this.user = JSON.parse(localStorage.getItem('socialUser'))
            }
        }
    }
</script>
