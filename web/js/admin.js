$(document).ready(function() {
    let single_usg_types = {
        1: 'Cհaracter (general)',
        2: 'Character (positive)',
        3: 'Character (negative)',
        4: 'Psyche (general)',
        5: 'Psyche (endurance)',
        6: 'Psyche (dependence)',
        7: 'Psyche (emotion)',
        8: 'Psyche (behavior)',
        9: 'Psyche (wp&control)',
        10: 'Preferences',
        11: 'Intellect',
        12: 'Communication',
        13: 'Food&Diet',
        14: 'Health',
        15: 'Job & Career',
        16: 'Talents',
        17: 'Sports',
        18: 'Science',
        19: 'Profession',
        20: 'Study',
        21: 'Industrial',
        22: 'HR',
    }

    let multiple_usg_types = {
        23: 'Friendship',
        24: 'Love',
        25: 'Relationships in Family',
        26: 'Relationships at Work',
        27: 'Relationships in Business',
        28: 'Intimate',
        29: 'Child',
    }

    let item_types = {
        0: '',
        1: 'single',
        2: 'multiple'
    }

    // general
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
                if (row.find('.color-spector i[data-status="R"]').length === 10) {
                    $(row).find('.forward-gray').removeClass('forward-gray').addClass('forward-black').addClass('ajax-call');
                } else {
                    $(row).find('.forward-black').removeClass('forward-black').addClass('forward-gray').removeClass('ajax-call');
                }
                if (row.find('.color-spector i[data-status="W"]').length > 0 && row.find('.color-spector i[data-status=" "]').length === 0) {
                    $(row).find('.backward-gray').removeClass('backward-gray').addClass('backward-black').addClass('ajax-call');
                } else {
                    $(row).find('.backward-black').removeClass('backward-black').addClass('backward-gray').removeClass('ajax-call');
                }
            }
        } else {
            let missed_value = false;
            $.each($(row).find('.required'), (j, t) => {
                if (!$(t).val() || $(t).val() === '0' || $(t).val() === []) missed_value = true;
                if (typeof $(t).val() == "object" && Object.keys($(t).val()).length === 0) missed_value = true;
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

    function createOptions(arr) {
        let result = "";
        $.each(arr, (i, k) => {
           result += "<option value='" + i + "'>" + k + "</option>";
        });

        return result
    }

    colResizable($('.grid-view table'));

    // groups events
    // $('.items-list').change(function() {
    //     let option = $(this).find('option[value=' + $(this).val() + ']');
    //     let item_template = $('.item-template');
    //     let new_item = item_template.clone().appendTo(item_template.parent()).removeClass('item-template').addClass('item-disabled');
    //     new_item.find('input').val(option.val());
    //     new_item.find('span').text(option.text());
    //     option.remove();
    // });
    groupItemEvents();
    function groupItemEvents() {
        // $('.group-item').off().draggable({
        //     handle: '.drag-event',
        // })
        $('.group-item-container').sortable({
            connectWith: ".group-item",
            handle: '.drag-event'
        });
        //     ;.droppable({
        //     drop: function(event, ui) {
        //         if (ui.draggable.hasClass('item-disabled')) {
        //             ui.draggable.draggable('disable').appendTo($(this));
        //             ui.draggable.removeClass('item-disabled').find('input').removeAttr('disabled');
        //             ui.draggable.css({'left': 0, 'top': 0});
        //         }
        //     }
        // });
    }
    $('.select2').select2();
    // items events
    $(document).on('click', '.ajax-call', function () {
        if (!$(this).data('confirm_') || ($(this).data('confirm_') && confirm($(this).data('confirm_')))) {
            $.post($(this).data("path"), {
                'itemID': $(this).closest('tr').attr('data-key'),
            }).done(() => {
                $(this).closest('tr').remove();
            });
        }
    });
    $(document).on('change', '.item-search-bar', (el) => {
        $.get('/admin/items/getitemslist' + window.location.search, {
             "search": $(el.target).val()
        }).done((data) => {
             $('#w1').html(data);
             colResizable($('.grid-view table'));
            $('.grid-view input, select, textarea').removeAttr('id');
            $('.select2').select2();
        });
    });
    $(document).on('change', '.item-usage-type', function () {
        let type = $(this).closest('tr').find('.item-type');
        if (type.val() == 0) {
            let isSingle = false;
            $.each($(this).val(), (v) => {
                if (single_usg_types[v]) {
                    isSingle = true;
                }
            });

            isSingle && type.val(1);
        }
    }).change();
    $(document).on('change', '.grid-view input, textarea, select', function() {
        $(this).closest('tr').find('.save-filled, .save-green-filled').removeClass('save-filled').removeClass('save-green-filled').addClass('save-green');
    });

    function saveRowData(el, id) {
        let data = takeFormData(el);
        console.log(data)
        $.get('/admin/items/update?id=' + id, {
            'Items': JSON.stringify(data)
        }).done((data) => {
            if (data) {
                $(el).find('.save-green').removeClass('save-green').addClass('save-green-filled');
            }
            rowValidation(el);
        });
    }

    $(document).on('click', '.save-item', function() {
        if ($(this).hasClass('save-green')) {
            saveRowData($(this).closest('tr'), $(this).closest('tr').data('key'));
        }
    });

    $.each($('.grid-view tbody tr'), (i, v) => {
        rowValidation($(v));
        rowValidation($(v), 1);
        itemTypeChange($(v).find('.item-type'));
    });

    $.each($('.select2[multiple]'), function(i, k) {
        $(k).prev().remove();
    });

    $('.color-spector-change').on('click', function() {
        let next = parseInt($(this).find('input').val()) + 1;
        next = next === 7 ? 1 : next
        $(this).attr('class', 'color-spector color-for-' + next);
        $(this).find('input').val(next).change();
    });

    $('.color-spector-description').on('click', function() {
        let old_val = $(this).closest('tr').find('.cp-detailed-container').children().eq($('.fa-circle').parent().index()).find('.save-result-description').attr('data-text');
        let circle = $(this).closest('tr').find('.fa-circle');
        circle.removeClass('fa-circle');
        if (circle.data('change')) {
            if (old_val) {
                circle.removeClass('fa-minus').addClass('fa-plus');
            } else {
                circle.removeClass('fa-plus').addClass('fa-minus');
            }
        }
        circle.text(circle.data('status'));
        $(this).find('i').text('').addClass('fa-circle');
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
        }).done((result) => {
            if (result) {
                $(this).text('saved');
                $(this).closest('.color-spector-detailed').find('.save-result-description').attr('data-text', $(this).closest('.color-spector-detailed').find('textarea').val());
            }
        });
    });

    $(document).on('change', '.result-description', function() {
         $(this).closest('.color-spector-detailed').find('.save-result-description').text('save');
    });

    let declineActive = null;
    $('.accept-result-description').on('click', function() {
        $.post('/admin/items/change-desc-status?id=' + $(this).parent().data('id'), {
            status: 1
        }).done((response) => {
            if (response) {
                $(this).closest('td').find('.cp-container').children().eq($(this).closest('.color-spector-detailed').index()).find('i').attr('data-status', 'R');
                rowValidation($(this).closest('tr'), 1);
            }
        });
    });
    $('.decline-result-description').on('click', (el_) => {
        declineActive = $(el_.target);
    });

    $('.confirm-description-comment').on('click', function(event) {
        let comment = $('.description-comment').val();
        if (!comment) {
            event.preventDefault();
        }
        $.post('/admin/items/change-desc-status?id=' + $(declineActive).parent().data('id'), {
            status: 2,
            comment: comment
        }).done((response) => {
            if (response) {
                $(declineActive).closest('td').find('.cp-container').children().eq($(declineActive).closest('.color-spector-detailed').index()).find('i').attr('data-status', 'W');
                rowValidation($(declineActive).closest('tr'), 1);
                $(this).prev().click();
                $('.description-comment').val('');
            }
        });
    });

    $('.forward-black').on('click', function() {
        saveRowData($(this).closest('tr'), $(this).closest('tr').data('key'));
    });


    function itemTypeChange(el) {
        let ict = el.closest('tr').find('.item-comb-type');
        let ust = el.closest('tr').find('.item-usage-type');
        let usg_type = el.closest('tr').find('.item-usage-type').val();
        if ($(el).val() == 1) {
            $(ict).next().hasClass('select2') && $(ict).select2('destroy');
            $(ict).hide().removeClass('required');
            ust.select2('destroy').html(createOptions(single_usg_types)).val(usg_type).select2();
        } else if ($(el).val() == 2) {
            !$(ict).next().hasClass('select2') && $(ict).select2();
            $(ict).show().addClass('required');
            let single_usg_types_ = {...single_usg_types};
            ust.select2('destroy').html(createOptions($.extend(single_usg_types_, multiple_usg_types))).val(usg_type).select2();
        }
    }

    $(document).on('change', '.item-type', function() {
        itemTypeChange($(this));
    });

    // groups
    $('.flag-changeable').on('click', function() {
        if ($(this).attr('src').includes('flag1')) {
            $(this).attr('src', '/images/icons/flag2.png');
            $(this).next().val(2);
        } else {
            $(this).attr('src', '/images/icons/flag1.jpg')
            $(this).next().val(1);
        }
    });

    $(document).on('click', '.update-group-items', function () {
        let data = takeFormData($(this).closest($(this).closest('.group-config')));
        $.get('/admin/items/get-active-items', {
            'search': JSON.stringify(data),
        }).done((res) => {
            let data = JSON.parse(res);
            let template = $('.group-item-template');
            $('.group-item:not(.group-item-template)').remove();
            let clone;
            $.each(data, (i, k) => {
                clone = template.clone().appendTo(template.parent());
                clone.find('.fa-circle').addClass(k['check1'] ? 'active' : 'disabled');
                clone.find('.group-item-id').text(k['id'])
                clone.find('.group-item-title').text(k['itemTitles'][0]['title'])
                clone.find('.group-item-description').text(k['itemTitles'][0]['description'])
                clone.find('.group-item-description').attr('title', k['itemTitles'][0]['description'])
                clone.find('.group-item-source-' + k['source']).removeClass('d-none');
                clone.removeClass('group-item-template');
                // $('.items-container').append('<div class="item"><span>' +  + ' </span><span> ' +  + ' </span><span> ' + item_types[k['i_type']] + '</span></div>');
            });
            groupItemEvents();
        });
    });

    $('.dropdown-menu').on('click', function(el) {
        !$(el.target).hasClass('update-group-items') && el.stopPropagation();
    });

    $('.btn-reset').on('click', function() {
        debugger
        $(this).closest('.dropdown').find('select').val([]).change();
    })
});