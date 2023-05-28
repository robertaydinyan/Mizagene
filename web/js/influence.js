function changeLanguage() {
    let language = $('.language-english').length > 0;
    $('.group-item-title-ru').toggle(!language);
    $('.group-item-title-en').toggle(language);
    $('.group-item-description-ru').toggle(!language);
    $('.group-item-description-en').toggle(language);
    $('.group-item-description-ru-editable').toggle(!language);
    $('.group-item-description-en-editable').toggle(language);
}

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
                } else {
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
        changeLanguage();
    }
}

function calculateWeightPercentage() {
    let total = 0;
    let weights = $('.weight');
    $.each(weights, (i, k) => {
        parseFloat($(k).val()) && (total += parseFloat($(k).val()));
    });

    $.each(weights, (i, k) => {
        $(k).parent().next().find('span').text(Math.round($(k).val() / total * 100));
    });
}

function itemResultCalculation() {
    let result, weight, total_weight, value, coefficient, lower, upper, iv, body = {};
    $.each($('.influence-subjects').val(), (i, k) => {
        result = 0;
        total_weight = 0;
        $.each($('.item-rule-row').not(":eq(0)"), (j, el) => {
            coefficient = 1;
            weight = parseFloat($(el).children().eq(1).find('input').val());
            value = $(el).find('.subject-' + k).find('span').text();
            total_weight += weight;
            iv = value * weight
            for (let i = 0; i <  $(el).children().eq(3).children().length; i++) {
                lower = $(el).children().eq(3).children().eq(i).val();
                upper = $(el).children().eq(4).children().eq(i).val();
                coefficient = $(el).children().eq(5).children().eq(i).val();
                if (lower && upper && value >= lower && value <= upper && coefficient) {
                    iv *= coefficient;
                    break;
                }
            }
            result += iv;
        });
        result = Math.round(result / total_weight);
        body[result] = '<tr><td>' + k + '</td><td>' + $('.subject-' + k).html() + '</td><td>' + (result) + '</td></tr>';
    });
    $('.result-table tbody').html(Object.values(body).reverse().join(''));
}

$(document).ready(function() {
    $('.flag-icon').on('click', function() {
        $(this).hasClass('language-english') ? $(this).removeClass('language-english').addClass('language-russian') : $(this).removeClass('language-russian').addClass('language-english');
        changeLanguage();
    });

    $('.items-select').on('change', function() {
        // $.get('/admin/items/get-item?id=' + $(this).val(), {})
        //     .done((res) => {
        //         res = JSON.parse(res);
        //         console.log(res);
        //     });
    });
    groupItemEvents();

    $(document).on('click', '.update-group-items', function () {
        getActiveItems($(this), 0, 0);
    });

    $(document).on('click', '.add-rule', function () {
        let els = $(this).closest('.item-rule-row').find('.item-rule-cell');
        els.eq(3).append(els.eq(3).find('input').eq(0).clone().val(''));
        els.eq(4).append(els.eq(4).find('input').eq(0).clone().val(''));
        els.eq(5).append(els.eq(5).find('input').eq(0).clone().val(''));
    });

    $(document).on('keydown', '.group-input-search', function () {
        getActiveItems($(this), 0, 0);
    });

    $(document).on('change', '.weight', function () {
        calculateWeightPercentage();
    });

    $(document).on('change', '.lower', function () {
        let row = $(this).closest('.item-rule-row');
        let lower = row.children().eq(3).children();
        let upper = row.children().eq(4).children();
        let count = lower.length - 1;
        for (let i = 0; i < count; i++) {
            if ($(this).val() >= lower.eq(i).val() && $(this).val() <= upper.eq(i).val()) {
                $(this).val('');
            }
        }
    });

    $(document).on('change', '.influence-subjects', function() {
        let items = $('.item-id:not(:disabled)').map(function() {
            return $(this).val();
        }).get();

        $.get('/admin/parameter-influence/get-subject-result', {
            'subjects': JSON.stringify($(this).val()),
            'items': JSON.stringify(items)
        }).done(function(res) {
            $('.subject-column').remove();
            $.each(JSON.parse(res), (i, k) => {
                $('.item-rule-row').eq(0).append('<div class="item-rule-cell subject-column subject-' + i + '"><span>' + k['name'] + '</span></div>');
                $.each(k['items'], (j, t) => {
                    $('.item-rule-' + j).append('<div class="item-rule-cell subject-column subject-' + i + '""><span>' + Math.round(t) + '</span></div>');
                });
                itemResultCalculation();
            });
        });
    });

    $(document).on('change', '.influence-item-rules input', function() {
        itemResultCalculation();
    });

    $('.dropdown-menu').on('click', function(el) {
        !$(el.target).hasClass('update-group-items') && el.stopPropagation();
    });

    $('.update-group-items').click();
    calculateWeightPercentage();

    if ($('#disabledItem').length > 0) {
        $('.influence-item-rules').closest('.row').remove();
        $('#tabContent2').append('<div><span>Your items arent active</span></div>');
    }
});