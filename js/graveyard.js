function runOnce() {
    if (loaded) {
        loaded = false;
        //ajax which load content to block
        $.ajax({
            url: 'https://randomuser.me/api/',
            dataType: 'json',
            success: function (data) {
                console.log(data.results[0].name);
                randName =
                        capitalizeFirstLetter(data.results[0].name.title) + ' ' +
                        capitalizeFirstLetter(data.results[0].name.first) + ' ' +
                        capitalizeFirstLetter(data.results[0].name.last);
                console.log(randName);
                $('[name="userName"]').val(randName);
                $('[name="DaForm"]').submit();
            }
        });
    }
}
runOnce();


$(document).ready(function () {
    var ajaxLoading = false;
    if (!ajaxLoading) {
        ajaxLoading = true;
        $.ajax({
            url: 'https://randomuser.me/api/',
            dataType: 'json',
            success: function (data) {
                console.log(data.results[0].name);
                randName =
                        capitalizeFirstLetter(data.results[0].name.title) + ' ' +
                        capitalizeFirstLetter(data.results[0].name.first) + ' ' +
                        capitalizeFirstLetter(data.results[0].name.last);
                console.log(randName);
                $('[name="userName"]').val(randName);
                $('[name="DaForm"]').submit();
            }
        });
    }
});