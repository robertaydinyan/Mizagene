$(document).ready(function() {
    $(document).on('click', '.ajax-call', function () {
        if (!$(this).data('confirm_') || ($(this).data('confirm_') && confirm($(this).data('confirm_')))) {
            $.post($(this).data("path"), {
                'itemID': $(this).closest('tr').attr('data-key'),
            }).done(() => {
                $(this).closest('tr').remove();
            });
        }
    });

    $(document).on('click', '.item-mark', function() {
        $.post('/admin/items/put-mark', { 'id': $(this).closest('tr').attr('data-key') })
        .done((res) => {
            if (res) {
                if ($(this).hasClass('white-cat')) {
                    $(this).removeClass('white-cat').addClass('black-cat');
                } else {
                    $(this).removeClass('black-cat').addClass('white-cat');
                }
            }
        });
    });
});