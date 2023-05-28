function groupItemEvents() {
    if ($(".group-item-container").length > 0) {
        $(".group-item-container, .droppable").sortable({
            placeholder: "group-item",
            connectWith: ".group-item-container, .droppable",
            stop: function(event, ui) {
                ui = $(ui.item);
                if (ui.closest(".group-item-container").length > 0) {
                    ui.find('input, textarea').attr('disabled', 'disabled');
                } else {
                    ui.find('input, textarea').removeAttr('disabled');
                }
            }
        }).disableSelection();
    }
}
$(document).ready(() => {
    groupItemEvents();

    $(document).on('click', '.update-group-items', function () {
        getActiveItems($(this));
    });

    $(document).on('keydown', '.group-input-search', function () {
        getActiveItems($(this));
    });
    $('.update-group-items').click();

    $('.dropdown-menu').on('click', function(el) {
        !$(el.target).hasClass('update-group-items') && el.stopPropagation();
    });

});