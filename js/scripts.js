
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

var count = 1;
if (count < 2) {
    count++;
    runOnce();
}
function runOnce() {
    var url = 'https://randomuser.me/api/';
    var randName = "";
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


//$(document).one('load', function () {
//    var url = 'https://randomuser.me/api/';
//    var randName = "";
//    var count = 1;
//    if (count < 2) {
//        var count;
//        count++;
//        $.ajax({
//            url: url,
//            dataType: 'json',
//            success: function (data) {
//                console.log(data.results[0].name);
//                randName =
//                        capitalizeFirstLetter(data.results[0].name.title) + ' ' +
//                        capitalizeFirstLetter(data.results[0].name.first) + ' ' +
//                        capitalizeFirstLetter(data.results[0].name.last);
//                console.log(randName);
//                $('[name="userName"]').val(randName);
//                $('[name="DaForm"]').submit();
//            }
//        });
//    }
//});