// トップボタン押下
$(function () {
    var home = $(".header__link");
    home.click(function () {
        var bool = window.confirm(
            "このサイトを離れますか？\n行った変更が保存されない可能性があります。"
        );
        if (bool) {
            window.location.href = "/";
        }
    });
});

//送信ボタン押下
$(function () {
    var send = $("#send");
    var sending = $("#sending");
    var back = $("#back");
    sending.css({ display: "none" });
    send.click(function () {
        back.attr("disabled", "");
        back.css({ cursor: "wait" });
        send.css({ display: "none" });
        send.css({ display: "none" });
        sending.css({ display: "block" });
    });
});
