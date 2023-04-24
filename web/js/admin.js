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
    function takeFormData($container) {
        let unindexed_array = $container.find('input, textarea, select').serializeArray();
        let indexed_object = {};

        $.map(unindexed_array, function(n, i) {
            let keyParts = n['name'].replace('[]', '').split('[');
            let currentObject = indexed_object;
            for (let j = 0; j < keyParts.length; j++) {
                let keyPart = keyParts[j].replace(']', ''); // remove the closing bracket
                if (j === keyParts.length - 1) {
                    if (currentObject[keyPart] === undefined) {
                        currentObject[keyPart] = n['value'];
                    } else {
                        if (!Array.isArray(currentObject[keyPart])) {
                            currentObject[keyPart] = [currentObject[keyPart]];
                        }
                        currentObject[keyPart].push(n['value']);
                    }
                } else {
                    if (currentObject[keyPart] === undefined) {
                        currentObject[keyPart] = {};
                    }
                    currentObject = currentObject[keyPart];
                }
            }
        });

        return indexed_object;
    }

    function rowValidation(row, type = 0) {
        if (type === 1) {
            if ($('.decline-result-description').length > 0) {
                if (row.find('.color-spector span:contains("R")').length === 10) {
                    $(row).find('.forward-gray').removeClass('forward-gray').addClass('forward-black').addClass('ajax-call');
                } else {
                    $(row).find('.forward-black').removeClass('forward-black').addClass('forward-gray').removeClass('ajax-call');
                }

                if (row.find('.color-spector span:contains("W")').length > 0 && row.find('.color-spector span:contains(" ")').length === 0) {
                    $(row).find('.backward-gray').removeClass('backward-gray').addClass('backward-black').addClass('ajax-call');
                } else {
                    $(row).find('.backward-black').removeClass('backward-black').addClass('backward-gray').removeClass('ajax-call');
                }
            }
        } else {
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
            let data = takeFormData($(this).closest('tr'));
            console.log(data);
            $.get('/admin/items/update?id=' + $(this).closest('tr').data('key'), {
                'Items': JSON.stringify(data)
            }).done((data) => {
                if (data) {
                    $(this).removeClass('save-green').addClass('save-green-filled');
                }
                rowValidation($(this).closest('tr'));
            });
        }
    });

    $.each($('.grid-view tbody tr'), (i, v) => {
        rowValidation($(v));
        rowValidation($(v), 1);
    });

    $('.color-spector-change').on('click', function() {
        let current = $(this).find('input').val();
        let next = color_spector[color_spector.findIndex((value) => {
            return value === current;
        }) + 1];
        next = next ? next : 'critical';
        $(this).attr('class', 'color-spector color-for-' + next);
        $(this).find('input').val(next).change();
    });

    $('.color-spector-description').on('click', function() {
        let old_val = $(this).closest('tr').find('.cp-detailed-container').children().eq($('.fa-circle').parent().index()).find('textarea').val();
        let circle = $(this).closest('tr').find('.fa-circle');
        circle.removeClass('fa-circle')
        if (circle.data('change')) {
            if (old_val) {
                circle.addClass('fa-plus');
            } else {
                circle.addClass('fa-minus');
            }
        }
        $(this).find('i').removeClass('fa-plus').removeClass('fa-minus').addClass('fa-circle');
        $(this).closest('tr').find('.color-spector-detailed').addClass('d-none');
        $(this).parent().next().children().eq($(this).index()).removeClass('d-none');
        $(this).parent().find('.mid-container').find('span').addClass('d-none');
        $(this).parent().find('.mid-container').children().eq($(this).index()).removeClass('d-none');
    });

    $('.save-result-description').on('click', function () {
        let index = $(this).closest('.color-spector-detailed').index();
        let data = takeFormData($(this).parent().parent().next());
        rowValidation($(this).closest('tr'));
        $.get('/admin/items/update?id=' + $(this).closest('tr').data('key'), {
            'Items': JSON.stringify(data)
        });
    });

    let el = null;
    $('.accept-result-description').on('click', function() {
        $.post('/admin/items/change-desc-status?id=' + $(this).parent().data('id'), {
            status: 1
        }).done((response) => {
            if (response) {
                $(this).closest('td').find('.cp-container').children().eq($(this).closest('.color-spector-detailed').index()).find('span').text('R');
                rowValidation($(this).closest('tr'), 1);
            }
        });
    });

    $('.confirm-description-comment').on('click', function(event) {
        let comment = $('.description-comment').val();
        if (!comment) {
            event.preventDefault();
        }
        $.post('/admin/items/change-desc-status?id=' + $(el).parent().data('id'), {
            status: 2,
            comment: comment
        }).done((response) => {
            if (response) {
                $(el).closest('td').find('.cp-container').children().eq($(el).closest('.color-spector-detailed').index()).find('span').text('W');
                rowValidation($(el).closest('tr'), 1);
                $(this).prev().click();
                $('.description-comment').val('');
            }
        });
    });
    $('.decline-result-description').on('click', (el_) => {
        el = $(el_.target);
    });
});