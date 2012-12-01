function Username(){
    var username = document.getElementById('username');
    if(typeof(Storage)!=="undefined"){
        localStorage.theUsername=username;
        document.getElementById("result").innerHTML="Last name: " + localStorage.theUsername;
    }
    /*var userArray = new Array();
    userArray[username] = username;
    return userArray;*/
}
function Pass(valu, id){
    var userArray
}

function addToArray(valu){
    
}