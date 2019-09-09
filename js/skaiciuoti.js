function sudeti(a, b) {
    return a + b;
}

function atimti(a, b) {
    return a - b;
}

function dauginti(a, b){
    return a * b;
}

function dalinti(a, b) {
    return a / b;
}

$('[value=Dauginti]').click(function(){
    let a = $('#vardas').val();
    let b = $('#zinute').val();

    let ats =  dauginti(a,b);
    keistiAtsakyma(ats);

});

function sukurkJeiNera(rez) {
    if (rez.find('span').length === 0) {
        span = document.createElement("span");
        rez.append(span);
    }
}

function keistiAtsakyma(atsakymas){
    let rez = $('#rez');
    sukurkJeiNera(rez);
    rez.find('span').html(atsakymas);
}