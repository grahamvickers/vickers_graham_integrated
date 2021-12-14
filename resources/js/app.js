const { default: Axios } = require('axios');

require('./bootstrap');

Axios.get('/api/get-bombermen')
    .then(function ({data}) {
        const element = document.getElementById("bombermen");
        element.innerHTML = '';

        for(var i = 0; i < data.length; i++) {
            const item = '<div class="item col-3">' +
                '<div class="image" style="background:url(' + data[i]['avatarUri'] + ')"></div>' +
                '<h4>' + data[i]['name'] + '</h4>' +
                '</div>';

                element.innerHTML += item;
        }
    })
    .catch(function (error){
        alert(error);
    });
