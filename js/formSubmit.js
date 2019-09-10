let vardas;
let elpastas;
let zinute;
let json;

function paimtiDuomenis(){
    vardas = $('#vardas').val();
    elpastas = $('#elpastas').val();
    zinute = $('#zinute').val();
}

function suformuotJson(){
    json = {
        "name": vardas,
        "email": elpastas,
        "message": zinute,
    };
}

function issiustiDuomenis(){
    $.post('kurSiustiDuomenis.php', json, function(data, status){
        $('#rez').html(data);
    })
}

$('[value=SEND]').click(function(){
    paimtiDuomenis();
    suformuotJson();
    issiustiDuomenis();
});