$(document).ready(function() {
    $('.items-list').change(function() {
        let option = $(this).find('option[value=' + $(this).val() + ']');
        let item_template = $('.item-template');
        let new_item = item_template.clone().appendTo(item_template.parent()).removeClass('item-template').addClass('item-disabled');
        new_item.find('input').val(option.val());
        new_item.find('span').text(option.text());
        option.remove();
        itemEvents();
    });
    itemEvents();
    function itemEvents() {
        $('.item-disabled').draggable();
        $('.items-container').sortable().droppable({
            drop: function(event, ui) {
                if (ui.draggable.hasClass('item-disabled')) {
                    ui.draggable.draggable('disable').appendTo($(this));
                    ui.draggable.removeClass('item-disabled').find('input').removeAttr('disabled');
                    ui.draggable.css({'left': 0, 'top': 0});
                }
            }
        });
    }
});