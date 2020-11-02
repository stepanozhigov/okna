<template>
    <div class="add-review">
        <div v-if="!user.fullName" class="add-review__label">
            <p>Авторизуйтесь через</p>
            <social-auth v-on:logged="setUser" mix='add-review__socials'></social-auth>
        </div>
        <div :class="['add-review__label', {'add-review__label_person': user.avatar} ]">
            <p v-if="!user.fullName">Или представьтесь</p>
            <img class="add-review__avatar" :src="user.avatar">
            <input type="text" class="input add-review__input" v-model="user.fullName" placeholder="Ваше имя *">
        </div>

        <div class="add-review__label add-review__label_full">
            <p>Сформулируйте Ваше сообщение</p>
            <textarea v-model="text" name="" id="" class="textarea add-review__textarea" placeholder="Ваше сообщение. Просим Вас соблюдать нормативную лексику и нормы уважения. В противном случае отзыв может быть удалён."></textarea>
        </div>
        <div class="add-review__label">
            <p>Прикрепите фотографии</p>
            <label class="file add-review__file">
                <img src="/img/gui/add-file.png" alt="" class="file__preview">
                <input v-on:change="handlePhoto"  type="file" class="file__input">
                <div class="file__preview add-review__preview">
                    <img v-for="preview in previews" v-bind:src="preview">
                </div>
                <div class="file__preview add-review__preview">
                    <img v-for="preview in previews" v-bind:src="preview">
                </div>
                <div class="file__preview add-review__preview disable">
                    <img v-for="preview in previews" v-bind:src="preview">
                </div>
            </label>
        </div>
        <div class="add-review__label">
            <p>или видео</p>
            <label class="file file_video add-review__file">
                <img src="/img/gui/add-file.png" alt="" class="file__preview">
                <input v-on:change="handleVideo" type="file" class="file__input">
                <div class="file__preview add-review__preview">
                    <img v-for="preview in previews" v-bind:src="preview">
                </div>
            </label>
        </div>
        <button v-if="!sended" @click="send" class="button add-review__submit">Оставить отзыв</button>
        <p v-if="sended" class="intro add-review__submit">{{ resultText }}</p>
        <p class="subtext add-review__agreement">Оставляя контактную информацию, Вы соглашаетесь на <a href="javascript:void(0);">обработку персональных данных</a></p>
        <img src="/img/photo-girl.png" class="add-review__girl" alt="">
    </div>
</template>

<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('[name=token]').attr('content')
    }
    });
    const socialAuth = require('./SocialAuth.vue');
    export default {
        components: {
            'social-auth': socialAuth
        },
        props: ['city'],
        data: function () {
            return {
                user: {
                    fullName: ''
                },
                text: '',
                photos: [],
                video: null,
                previews: [],
                videoPreview: null,
                sended: false,
                resultText: ''
            }
        },
        methods: {
            send: function ()
            {
                this.sended = true;

                var data = new FormData,
                    $this = this;

                this.photos.forEach(element => {
                    data.append('photos[]', element);
                });

                data.append('direction_id', 1);
                data.append('video', this.video);
                data.append('fio', this.user.fullName);
                data.append('text', this.text);
                data.append('city', this.city);

                if (this.user.avatar) {
                    data.append('avatar', this.user.avatar);
                }

                if (this.user.socialType) {
                    data.append('social', this.user.socialType);
                }

                if (this.user.userHref) {
                    data.append('link', this.user.userHref);
                }

                $.ajax({
                    url:'/forms/add-review',
                    data: data,
                    method: 'post',
                    processData: false,
                    contentType: false,
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                $this.resultText = "Идет загрузка: "+ parseInt(percentComplete  * 100) + " %. Не закрывайте страницу";
                            }
                        }, false);

                        return xhr;
                    },
                    success: function (response) {

                        $this.resultText = "Отзыв отправлен!";
                    }
                })
            },
            setUser: function (user)
            {
                this.user = user;
            },
            handleVideo(event) {
                var input = event.target;

                this.video = input.files[0];

            },
            handlePhoto(event) {
                var input = event.target,
                    $previews = this.previews,
                    reader = new FileReader;

                this.photos.push(input.files[0]);

                reader.onload = function (event) {
                    $previews.push(event.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    }
</script>
