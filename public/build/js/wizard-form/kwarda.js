$.ajax({
    url: config.routes.provinsi,
    type: 'GET',
    headers: {
        'X-CSRF-TOKEN': config.csrf
    },
    cache: false,
    success: function (data) {
        let element = '<option value="">Pilih Kwarda</option>';
        for (let i = 0; i < data.length; i++) {
            element += '<option value="' + data[i]['id'] + '">' +
                data[i]['name'] +
                '</option>'
        }

        $('#kwarda').html(element);
    },
})