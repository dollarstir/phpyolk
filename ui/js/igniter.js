$(document).ready(function () {
    $(document).on("click", "a", function (e) {
        e.preventDefault();

        var link = $(this).attr("href");
        $.ajax({
            url: link,
            method: "get",
            error: () => {},
            beforeSend: () => {},
            success: (response) => {
                console.log(response);

                $("html").html(response);

                // const title_pattern = new RegExp("<[(title)\s]+>(.*)<\\\/title>");
                // const body_pattern = new RegExp("<[(body)\s]+>(.*)<\/body>");

                // var title = `${response}`.match(title_pattern);
                // var body = response.replaceAll("/", "\/").match(body_pattern);

                // console.log();
                // console.log("Results: ",title);
                // console.log();
                // console.log(body);
            }
        });
    })
});