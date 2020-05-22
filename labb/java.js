function validateForm(){

    var n = document.getElementById("Email").value;
    
    if(n.indexOf("@")== -1 || n.lastIndexOf(".") < n.indexOf("@")){
    
        alert("Ogiltig Email, försök igen.");
        return false;
    
    }
    
    }