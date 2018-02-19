var div_box = "<div id='load_screen'><div id='loading'></div></div>";
$('body').prepend(div_box);

$('#load_screen').delay(1000).fadeOut(600, function () {
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