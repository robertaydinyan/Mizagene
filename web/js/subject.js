$(document).ready(function() {
    $('.subject-search input, select').on('change', function() {
        $.get('/admin/subject/get-subjects-list' + window.location.search, takeFormData($('.subject-search'))).done((data) => {
            $('#w0').html(data);
            colResizable($('.grid-view table'));
        });
    });
});