$(document).ready(function() {
    $('#paste').click(function() {
        navigator.clipboard.readText().then(function(clipboardText) {
            $('#link').val(clipboardText);
        });
    });
});