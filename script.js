function populateHint(input){
    if(input.length == 0){
        document.getElementById("txtResults").innerHTML = "";
        return;
    }else{
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200)
                document.getElementById("txtResults").innerHTML = this.responseText;
        //document.write("meow");
    };

    xmlhttp.open("GET", "hints.php?q=" + input, true);
    xmlhttp.send();
    }
}