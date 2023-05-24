function groupItemEvents() {
    if ($(".group-item-container").length > 0) {
        $(".group-item-container, .droppable").sortable({
            placeholder: "group-item",
            connectWith: ".group-item-container, .droppable",
            stop: function(event, ui) {
                ui = $(ui.item);
                if (ui.closest(".group-item-container").length > 0) {
                    ui.find('input, textarea').attr('disabled', 'disabled');
                    $('.item-rule-' + ui.find('.group-item-id').text()).remove();
                    ui.find('.group-item-content').removeClass('col-10').addClass('col-11');
                    ui.children().eq(0).removeClass('d-flex').addClass('d-none');
                } else {
                    ui.children().eq(0).removeClass('d-none').addClass('d-flex');
                    ui.find('.group-item-content').removeClass('col-11').addClass('col-10');
                    ui.find('input, textarea').removeAttr('disabled');

                    let item_id = ui.find('.group-item-id').text();
                    let item_rule = $('.item-rule-template').clone().appendTo('.influence-item-rules');
                    item_rule.removeClass('item-rule-template').addClass('item-rule' + item_id);
                    let childs = item_rule.children();
                    childs.eq(0).html(ui.find('.group-item-title-en').prop('outerHTML') + ui.find('.group-item-title-ru').prop('outerHTML'));
                    childs.eq(1).find('input').attr('name', 'Item[' + item_id + '][lower][]');
                    childs.eq(2).find('input').attr('name', 'Item[' + item_id + '][upper][]');
                    childs.eq(3).find('input').attr('name', 'Item[' + item_id + '][coefficient][]');
                }
            }
        }).disableSelection();
    }
}
$(document).ready(function() {
    $('.items-select').on('change', function() {
        // $.get('/admin/items/get-item?id=' + $(this).val(), {})
        //     .done((res) => {
        //         res = JSON.parse(res);
        //         console.log(res);
        //     });
    });
    groupItemEvents();

    $(document).on('click', '.update-group-items', function () {
        getActiveItems($(this));
    });

    $(document).on('click', '.add-rule', function () {
        let els = $(this).closest('.item-rule-row').find('.item-rule-cell');
        els.eq(1).append(els.eq(1).find('input').clone().val(''));
        els.eq(2).append(els.eq(2).find('input').clone().val(''));
        els.eq(3).append(els.eq(3).find('input').clone().val(''));
    });

    $(document).on('keydown', '.group-input-search', function () {
        getActiveItems($(this));
    });
    $('.update-group-items').click();

    $('.dropdown-menu').on('click', function(el) {
        !$(el.target).hasClass('update-group-items') && el.stopPropagation();
    });
});