$(document).ready(function() {
    $('.items-select').on('change', function() {
        $.get('/admin/items/get-item?id=' + $(this).val(), {})
            .done((res) => {
                res = JSON.parse(res);
                console.log(res);
            });
    });
});