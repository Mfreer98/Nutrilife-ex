function filterFunction() {
    let input;
    input = $("#input-group-search").val();
    $.ajax({
        url: "/food/search?str=" + input,
        success: function (data) {
            $('body').html('');
            $('body').html(data);


        }
    })
}