// var custom_history = [];

// window.onload = () => {
//     win
// }

window.addEventListener("popstate", function (event) {
    console.log(event);
    $.ajax({
        url: event.target.location,
        method: "get",
        error: (xhr) => {
            if (xhr.status == 404) {
                $('body').load('error/404.php')
            }
        },
        beforeSend: () => { },
        success: (response) => {
            $("body").html(response);
        }
    });

    return true;
})

$(document).ready(function () {
    console.log("Load History: ", history.length);

    $(document).on("click", "a", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");

        if (link.match(new RegExp("^(http|www)"))) {
            window.open(link, '_blank');
            return;
        }

        $.ajax({
            url: link,
            method: "get",
            error: (xhr) => {
                if (xhr.status == 404) {
                    $('body').load('error/404.php')
                }
            },
            beforeSend: () => { },
            success: (response) => {
                if (window.location.pathname != link) {
                    history.pushState(null, null, link);
                    $("body").html(response);
                }
            }
        });
    })
});