const sendit = () => {
    alert('hi');
    const userid = document.regiform.userid;
	  const userpw = document.regiform.userpw;
    const userpw_ch = document.regiform.userpw_ch;
    const username = document.regiform.username;
    const useremail = document.regiform.useremail;
    
    // userid empty
    if(userid.value == '') {
        alert('Id is empty');
        userid.focus();
        return false;
    }
    if(userid.value.length < 4 || userid.value.length > 12){
        alert("len(id) must be >= 4 and <= 12");
        userid.focus();
        return false;
    }
    // userpw empty
    if(userpw.value == '') {
        alert('Pw is empty');
        userpw.focus();
        return false;
    }

    // userpw_ch empty
    if(userpw_ch.value == '') {
        alert('Pw check is empty');
        userpw_ch.focus();
        return false;
    }
    if(userpw.value.length < 6 || userpw.value.length > 20){
        alert("len(pw) must be >= 6 and <= 20");
        userpw.focus();
        return false;
    }

	// userpw != userpw_ch
    if(userpw.value != userpw_ch.value) {
        alert('userpw, userpw check is diff');
        userpw_ch.focus();
        return false;
    }

    // username empty
    if(username.value == '') {
        alert('Username is empty');
        username.focus();
        return false;
    }

    // useremail empty
    if(useremail.value == '') {
        alert('Email is empty');
        useremail.focus();
        return false;
    }

	// email reg
    const expEmailText = /^[A-Za-z0-9\.\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z0-9\.\-]+$/;
    if(!expEmailText.test(useremail.value)) {
        alert('Please check the format your E-mail.');  
        useremail.focus();
        return false;
    }

    // id unique test
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
        if(xhr.readyState == XMLHttpRequest.DONE) {
            if(xhr.status == 200) {
                let txt = xhr.responseText.trim();
                if(txt == "O") alert('good');
                else {
                    alert('Id is already exist');
                    userid.focus();
                    return false;
                }
            }
        }
    }
    xhr.open("GET", "checkId_ok.php?userid="+userid.value, true);
    xhr.send();

    return true;
}
