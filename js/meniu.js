$(document).ready(function(){
    function openFile(locationHash) {
        let file = fileFromHash(locationHash);
        $.get(file, function (data, status) {
            $('main').html(data);
        });
    }

    function fileFromHash(hash) {
        return hash.replace('#', '') + ".html";
    }

    $('.meniu_item').click(function(e){
        e.preventDefault();
        let locationHash = $(this).attr('href');
        openFile(locationHash);
    });

    let locationHash = $(location).attr('hash');
    openFile(locationHash);

});