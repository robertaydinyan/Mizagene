$(document).ready(function() {
    // functions
    function reportGroupEvents() {
        $(".report-group-container, .droppable").sortable({
            placeholder: "report-group",
            connectWith: ".report-group-container, .droppable",
            tolerance: "pointer",
            handle: ".report-group-content",
            stop: function(event, ui) {
                ui = $(ui.item);
                if (ui.closest(".report-group-container").length > 0) {
                    ui.find('input, textarea').attr('disabled', 'disabled');
                } else {
                    ui.find('input, textarea').removeAttr('disabled');
                }
            }
        }).disableSelection();
    }

    // variables
    var fixHelper = function(e, ui) {
        ui.children().each(function() {
            $(this).width($(this).width());
        });
        return ui;
    };

    // events
    $('.report-search-bar').on('change', function() {
        $.get('/admin/reports/get-reports-list', { 'search': JSON.stringify({ "message": $(this).val() }) })
            .done((res) => {
                $('.grid-view').html(res);
            });
    });

    $(document).on('click', '.update-report-groups', function () {
        $.get('/admin/group/get-active-groups', {
            'search': $(this).prev().val(),
        }).done((res) => {
            let data = JSON.parse(res);
            let selectedValues = $('.droppable .item-id').map(function() {
                return $(this).val();
            }).get();
            $('.report-group-container').html('');
            $.each(data, (i, k) => {
                if (!selectedValues.includes(i.toString())) {
                    $('.report-group-container').append(k);
                }
            });
            reportGroupEvents();
        });
    });

    $('.active-report-disable').on('click', function() {
        $.post('/admin/reports/disable', { 'id': $(this).closest('tr').attr('data-key') });
    });

    // main code
    $(".sortable-grid tbody").sortable({
        helper: fixHelper,
        update: function(event, ui) {
            var order = $(this).sortable("toArray", {attribute: "data-key"});
            $.post('/admin/reports/change-order', { order: order });
        }
    }).disableSelection();

    $('.update-report-groups').click();
    reportGroupEvents();

    $(document).on('click', '.report-group-content', function (ev) {
        $(this).next().slideToggle();
        if ($(this).find('.fa-caret-down').length > 0) {
            $(this).find('.fa-caret-down').addClass('fa-caret-up').removeClass('fa-caret-down');
        } else {
            $(this).find('.fa-caret-up').removeClass('fa-caret-up').addClass('fa-caret-down');
        }
        ev.preventDefault()
    });
});