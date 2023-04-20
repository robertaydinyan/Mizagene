$(document).ready(function() {
    // general
    let color_spector = [
        'critical',
        'bad',
        'notenough',
        'good',
        'verygood'
    ];
    $('.grid-view input, select, textarea').removeAttr('id');

    function takeFormData(el) {
        let formValues = {};
        let name;
        $(el).find('input, select, textarea').each(function() {
            name = $(this).attr('name').split('[');
            name = name.map((v, k) => {
                return v.replace(']', '');
            })
            if (name.length === 2) {
                (!formValues[name[0]]) && (formValues[name[0]] = {});
                formValues[name[0]][name[1]] = $(this).val();
            } else {
                (!formValues[name[0]]) && (formValues[name[0]] = {});
                (!formValues[name[0]][name[1]]) && (formValues[name[0]][name[1]] = {});
                formValues[name[0]][name[1]][name[2]] = $(this).val();
            }
        });

        return formValues;
    }

    function rowValidation(row) {
        let missed_value = false;
        $.each($(row).find('.required'), (j, t) => {
            if (!$(t).val() || $(t).val() === '0') missed_value = true;
        });

        if (missed_value) {
            $(row).find('.forward-black').removeClass('forward-black').addClass('forward-gray').removeClass('ajax-call');
        } else {
            $(row).find('.forward-gray').removeClass('forward-gray').addClass('forward-black').addClass('ajax-call');
        }
    }

    let page = window.location.href.split('/').slice(3).join('/');
    function tableRowsWidth(table) {
        if (localStorage[page]) {
            let widths = JSON.parse(localStorage[page]);
            $.each(widths, (i, v) => {
                $(table).eq(0).find('tr').children().eq(i).css('width', v);
            });
        }
    }
    function colResizable(table) {
        tableRowsWidth(table);
        $(table).colResizable({
            resizeMode: 'fit',
            liveDrag: true,
            minWidth: 50,
            onResize: () => {
                let widths = [];
                $.each($(table).find('th'), (i, k) => {
                    widths[i] = $(k).css('width');
                });
                localStorage[page] = JSON.stringify(widths)
            }
        }).removeClass('JPadding');
    }
    colResizable($('.grid-view table'));

    // groups events
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

    // items events
    $(document).on('click', '.ajax-call', function () {
        $.post($(this).data("path"), {
            'itemID': $(this).closest('tr').attr('data-key'),
        }).done(() => {
            $(this).closest('tr').remove();
        });
    });

    $('.item-search-bar').on('change', (el) => {
        $.get('/admin/items/getitemslist' + window.location.search, {
             "search": $(el.target).val()
        }).done((data) => {
             $('#w1').html(data);
             colResizable($('.grid-view table'));
        });
    });

    $('.grid-view input, textarea, select').change(function() {
        $(this).closest('tr').find('.save-filled, .save-green-filled').removeClass('save-filled').removeClass('save-green-filled').addClass('save-green');
    });

    $('.save-item').on('click', function() {
        if ($(this).hasClass('save-green')) {
            rowValidation($(this).closest('tr'));

            let data = takeFormData($(this).closest('tr'));
            $.get('/admin/items/update?id=' + $(this).closest('tr').data('key'), {
                'Items': JSON.stringify(data)
            }).done((data) => {
                if (data) {
                    $(this).removeClass('save-green').addClass('save-green-filled');
                }
            });
        }
    });

    $.each($('.grid-view tbody tr'), (i, v) => {
        rowValidation($(v));
    });

    $('.color-spector').on('click', function() {
        let current = $(this).find('input').val();
        let next = color_spector[color_spector.findIndex((value) => {
            return value === current;
        }) + 1];
        next = next ? next : 'critical';
        $(this).attr('class', 'color-spector color-for-' + next);
        $(this).find('input').val(next).change();
    });
});