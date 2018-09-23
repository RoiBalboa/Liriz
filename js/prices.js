function getPrice(imgId){
    var thirties = ['6', '7', '8', '9', '12', '13', '14', '17'];
    var thrirtyFives = ['4', '10', '11', '16', '19'];
    var fourtees = ['3', '5', '15', '18'];
    var fourtyFives = ['1', '2'];

    if (thirties.indexOf(imgId) != -1)
        return '30';
    if (thrirtyFives.indexOf(imgId) != -1)
    return '35';
    if (fourtees.indexOf(imgId) != -1)
    return '40';
    if (fourtyFives.indexOf(imgId) != -1)
    return '45';

}
