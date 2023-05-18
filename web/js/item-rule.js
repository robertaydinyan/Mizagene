$(document).ready(function() {
    $(document).on('change', '.rule-type', function () {
        $('.field-itemrule-obj_min_age').toggle($(this).val() == 2);
        $('.field-itemrule-obj_max_age').toggle($(this).val() == 2);
    });
    $('.rule-type').change();
});