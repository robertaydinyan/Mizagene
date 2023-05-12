$(document).ready(function() {
    // functions
    function reportGroupEvents() {
        $(".report-group-container, .droppable").sortable({
            placeholder: "accordion-item",
            connectWith: ".report-group-container, .droppable",
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
            let template = $('.report-group-template');
            $('.report-group-container .report-group:not(.report-group-template)').remove();
            let clone;
            let selectedValues = $('.droppable .item-id').map(function() {
                return $(this).val();
            }).get();
            $.each(data, (i, k) => {
                if (!selectedValues.includes(k['id'].toString())) {
                    clone = template.clone().appendTo(template.parent());
                    clone.removeClass('report-group-template');
                    clone.find('.item-id').val(k['id']);
                    clone.find('.report-group-rule').toggle(k['adult'] == 1);
                    clone.find('.report-group-title').text(k['title_english'] + ' ' + k['name']);
                    clone.find('.report-group-items-count').html(
                        k['el_count'] +
                        '(<span style="color: green;">' + (k['active_items'] || 0) + '</span>, ' +
                        '<span style="color: red;">' + (k['disable_items'] || 0) + '</span>)');
                    clone.find('.report-group-versions').text('v. ' + k['variants_count']);

                    // $('.items-container').append('<div class="item"><span>' +  + ' </span><span> ' +  + ' </span><span> ' + item_types[k['i_type']] + '</span></div>');
                }
            });
            reportGroupEvents();
        });
    });

    $('.active-report-disable').on('click', function() {
        console.log($(this).closest('tr').attr('data-key'))
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
});