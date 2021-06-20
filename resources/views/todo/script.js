$(document).ready(myClick);


function myClick() {
    $('#button').click(myAdd);
    $(document).on('click', '.item', myRemove);
}

function myAdd() {
    var listItem = $('input[name=textbox]').val();
    $('.toList').append('<div class="item"><span class="del">X</span>' + listItem + '</div>');
}


function myRemove() {
    $(this).remove();
}