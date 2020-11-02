$('.js-social-auth').on('click', function (e) {
    var social = $(this).data('social'),
        callback = $(this).data('callback'),
        params = {},
        authMethod = eval(social + 'Auth');

    if (callback) {
        params.callback = callback;
    }

    authMethod(params);
    
})

function unlockComment () {
    console.log('unlock comment');
}

function vkAuth (params)
{
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
                window.socialUser = userData;
                localStorage.setItem('socialUser', JSON.stringify(userData));

                if (params.callback) {
                    eval(params.callback + '()');
                }
            });
        }
    });
}