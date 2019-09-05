let studentas = {
    vardas: 'Vardenis',
    pavarde: 'Pavardenis',
    kursas: 'IT-4',
    pazymiai: [7,8,9,7,8,9,9,7,8,9,5,8,9,7,9,7,9,9,8,9]
};

$('p').click(function(){
    $('#demo').html(studentasStringuose(studentas));
});

function studentasStringuose(stud) {
    let txt = '';
    for (let i = 0; i < Object.keys(stud).length; i++){
        let key = Object.keys(stud)[i];
        txt += stud[key] + ' ';
    }

    return txt;
}

