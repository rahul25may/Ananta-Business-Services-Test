function validateForm(){
    var name = document.getElementById("name").value;
    var address = document.getElementById("address").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;

    if( name ==="" || address ==="" || email ==="" || phone ==="" ){
        alert("Required options must be filled");
        return false;
    }

    
    return true;
}

