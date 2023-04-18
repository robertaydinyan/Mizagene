$(document).ready(function() {
    // general
    function takeFormData(el) {
        let formValues = {};
        let name
        $(el).find('input, select, textarea').each(function() {
            name = $(this).attr('name').split('[');
            (!formValues[name[0]]) && (formValues[name[0]] = {});
            formValues[name[0]][name[1].replace(']', '')] = $(this).val();
        });

        return formValues;
    }

    let page = window.location.href.split('/').slice(3).join('/').split('&')[0];
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
    $('.ajax-call').on('click', function () {
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
        $(this).closest('tr').find('.save-filled').removeClass('save-filled').addClass('save-green');
    });

    $('.save-item').on('click', function() {
        if ($(this).hasClass('save-green')) {
            let data = takeFormData($(this).closest('tr'));
            $.post('/admin/items/update?id=' + $(this).closest('tr').data('key'), {
                'Items': JSON.stringify(data)
            }).done((data) => {
                if (data) {
                    $(this).removeClass('save-green').addClass('save-green-filled');
                }
            });
        }
    });
    $('.steps-container').toggle();

    $('.nav-pill.active').on('click', function(event) {
        event.preventDefault();
        $('.steps-container').toggle();
    })
});