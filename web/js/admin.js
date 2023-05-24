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
    $('.select2').each(function() {
        $(this).select2({
            placeholder: $(this).data('placeholder')
        });
    });
    // items events
    $(document).on('change', '.item-search-bar', (el) => {
        $.get('/admin/items/get-items-list' + window.location.search, {
            "search": JSON.stringify({
                "message": $('.item-search-bar').eq(0).val(),
                "usg_type": $('.item-search-bar').eq(1).val(),
                "pill": $('#itemPill').val()
            })
        }).done((data) => {
            $('#w1').html(data);
            colResizable($('.grid-view table'));
            $('.grid-view input, select, textarea').removeAttr('id');
            $('.select2').select2();

            $.each($('.grid-view tbody tr'), (i, v) => {
                rowValidation($(v));
                rowValidation($(v), 1);
                // itemTypeChange($(v).find('.item-type'));
            });

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
        $(el).find('.forward-black').removeClass('forward-black').addClass('forward-gray');
        $.post('/admin/items/update?id=' + id, {
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
        // itemTypeChange($(v).find('.item-type'));
    });

    $.each($('.select2[multiple]'), function(i, k) {
        $(k).prev().remove();
    });

    $(document).on('click', '.color-spector-change', function() {
        let next = parseInt($(this).find('input').val()) + 1;
        next = next === 7 ? 1 : next
        $(this).attr('class', 'color-spector color-spector-change color-for-' + next);
        $(this).find('input').val(next).change();
    });

    $(document).on('click', '.color-spector-description', function() {
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

    $(document).on('click', '.save-result-description', function () {
        let index = $(this).closest('.color-spector-detailed').index();
        let data = takeFormData($(this).parent().parent().next());
        rowValidation($(this).closest('tr'));
        $.post('/admin/items/update?id=' + $(this).closest('tr').data('key'), {
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
        var usg_types;
        let ict = el.closest('tr').find('.item-comb-type');
        let ust = el.closest('tr').find('.item-usage-type');
        let usg_type = el.closest('tr').find('.item-usage-type').val();
        if ($(el).val()) {
            $.get('/admin/usg-type/get-types', { 'type': JSON.stringify($(el).val()) }).done((res) => {
                usg_types = JSON.parse(res);
                !$(ict).next().hasClass('select2') && $(ict).select2();

                if ($(el).val().includes('1')) {
                    $(ict).hide().removeClass('required');
                }
                if ($(el).val().includes('2')) {
                    $(ict).show().addClass('required');
                }
                $(ust).select2('destroy').empty().html(createOptions(usg_types)).val(usg_type).select2();
            });
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

    function getActiveItems(el) {
        let data = takeFormData($(el).closest('.group-config'));
        $.get('/admin/items/get-active-items', {
            'search': JSON.stringify(data),
        }).done((res) => {
            let data = JSON.parse(res);
            let template = $('.group-item-template');
            $('.group-item-container .group-item:not(.group-item-template)').remove();
            let clone;
            let language = $('.item-group-language').val()
            let selectedValues = $('.droppable .item-id').map(function() {
                return $(this).val();
            }).get();
            $.each(data, (i, k) => {
                if (!selectedValues.includes(k['id'].toString())) {
                    clone = template.clone().appendTo(template.parent());
                    clone.removeClass('group-item-template');
                    clone.find('.fa-circle').removeClass('disabled').addClass(k['check1'] ? (k['disabled'] ? 'passive' : 'active') : 'disabled');
                    clone.find('.group-item-id').text(k['item_id']);
                    clone.find('.item-id').val(k['id']);
                    clone.find('.group-item-title-ru').text(k['russian'] ? k['russian']['title'] : '').toggle(language == 1);
                    clone.find('.group-item-title-en').text(k['english'] ? k['english']['title'] : '').toggle(language == 2);
                    clone.find('.group-item-description-ru-editable').val(k['russian'] ? k['russian']['title'] : '').toggle(language == 1);
                    clone.find('.group-item-description-en-editable').val(k['english'] ? k['english']['title'] : '').toggle(language == 2);
                    clone.find('.group-item-description-ru').text(k['russian'] ? k['russian']['description'] : '').toggle(language == 1);
                    clone.find('.group-item-description-en').text(k['english'] ? k['english']['description'] : '').toggle(language == 2);
                    clone.find('.group-item-description-ru').attr('title', k['russian'] ? k['russian']['description'] : '');
                    clone.find('.group-item-description-en').attr('title', k['english'] ? k['english']['description'] : '');
                    clone.find('.group-item-source-' + k['source']).removeClass('d-none');
                    clone.find('.group-item-source-' + (1 - k['source'])).addClass('d-none');
                    // $('.items-container').append('<div class="item"><span>' +  + ' </span><span> ' +  + ' </span><span> ' + item_types[k['i_type']] + '</span></div>');
                }
            });
            groupItemEvents();
        });
    }

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

    $('.btn-reset').on('click', function() {
        $(this).closest('.dropdown').find('select').val([]).change();
    });

    $('.active-item-disable').on('click', function() {
        $.post('/admin/items/disable', { 'id': $(this).closest('tr').attr('data-key') });
    });

    $('.group-config').on('keydown', function (event) {
        if (event.key === "Enter") {
            event.preventDefault();
        }
    });

    $('.change-group-item-language').on('click', function() {
        let language = $(this).hasClass('language-english');
        $('.droppable .group-item-title-ru').toggle(!language);
        $('.droppable .group-item-title-en').toggle(language);
        $('.droppable .group-item-description-ru').toggle(!language);
        $('.droppable .group-item-description-en').toggle(language);
        $('.droppable .group-item-description-ru-editable').toggle(!language);
        $('.droppable .group-item-description-en-editable').toggle(language);

    })

    $('.accordion').on('hide.bs.collapse', function(e) {
        // Get the number of items that are currently open
        var openItems = $(this).find('.collapse.show');
        // If there's only one open item, prevent it from being closed
        if (openItems.length === 1) {
            e.preventDefault();
        }
    });

    $(document).on('click', '.custom-accordion-header', function (ev) {
        $(this).next().slideToggle();
        if ($(this).find('.fa-caret-down').length > 0) {
            $(this).find('.fa-caret-down').addClass('fa-caret-up').removeClass('fa-caret-down');
        } else {
            $(this).find('.fa-caret-up').removeClass('fa-caret-up').addClass('fa-caret-down');
        }
        ev.preventDefault()
    });
    // function unsecuredCopyToClipboard(text) {
    //     const textArea = document.createElement("textarea");
    //     textArea.value = text;
    //     document.body.appendChild(textArea);
    //     textArea.focus();
    //     textArea.select();
    //     try {
    //         document.execCommand('copy');
    //     } catch (err) {
    //         console.error('Unable to copy to clipboard', err);
    //     }
    //     document.body.removeChild(textArea);
    // }

    $('td span').on('dblclick', function() {
        var textToCopy = $(this).text();
        unsecuredCopyToClipboard(textToCopy)
        navigator.clipboard.writeText(textToCopy)
            .then(function() {
            $('#copyNotification').fadeIn().delay(1500).fadeOut();
        });
    }).disableSelection();
});