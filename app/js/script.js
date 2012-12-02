function Username(username){
    username = username.value;
    if(typeof(Storage)!=="undefined"){
    	localStorage.clear();
        localStorage.Username=username;
    }
    show('divUsername', 'hide');
    show('divPass1','show');
}

function Pass1(valu, num){   
	divPass='divPass';
    num2= parseInt(num) + 1;
    password = valu.value
    localStorage.Pass1=password;
    show(divPass + num, 'hide');
    show(divPass + num2,'show');
}
function Pass2(valu, num){   
	divPass='divPass';
    num2= parseInt(num) + 1;
    password = valu.value
    localStorage.Pass2=password;
    show(divPass + num, 'hide');
    show(divPass + num2,'show');
}

function show(id, visable){
	document.getElementById(id).className = document.getElementById(id).className.replace( 'hide' , '' );
	document.getElementById(id).className = document.getElementById(id).className.replace( 'show' , '' );
	if(visable == "show"){
		document.getElementById(id).className += "show";
	}else{
		document.getElementById(id).className += "hide";
	}
}