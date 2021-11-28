const APP_URL = "http://127.0.0.1:8000/";

$("#search_value").on('keyup',function () {
    var search_value = $("#search_value").val();
    $.ajax({
        type: "get",
        url: APP_URL + "get/animals-for-type",
        data: {
            search: search_value,
        },

        success(response) {
            console.log(response);
            $("#animals_value").html(response);
            return response;
        },
    });
});
