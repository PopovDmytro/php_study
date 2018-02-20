var div_box = "<div id='load_screen'><div id='loading'></div></div>";
$('body').prepend(div_box);

$('#load_screen').delay(300).fadeOut(600, function () {
    $(this).remove();
});

var checkAll = document.getElementById('select_all_posts');

if(checkAll) {
    checkAll.addEventListener('click', function () {

        if(!this.checked) {
            document.querySelectorAll('[id*=post_id]').forEach(function (item) {
                item.checked = false;
            });
        } else {
            document.querySelectorAll('[id*=post_id]').forEach(function (item) {
                item.checked = true;
            });
        }

    });
}

if(document.querySelector('.pagination')){
    var wimLocation = window.location.search;
    var urlParams = new URLSearchParams(wimLocation);

    if(urlParams.get('page')) {
        var activeLi = document.getElementById('page_' + urlParams.get('page'));
        activeLi.className = 'active';
    } else {
        document.getElementById('page_1').className = 'active';
    }
}

//ajax get online users

if(document.getElementById('users-online')) {
    loadUsersOnline();

    setInterval(function () {
        loadUsersOnline();
    }, 500);
}
function loadUsersOnline() {
    $.get(
        "functions.php?onlineusers=result",
        function (data) {
            $('#users-online').text(data);
        }
    )
}
