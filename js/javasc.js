function perform() {
    var type = document.getElementById("productType").value;
    if (type == "dvd") {
        document.getElementById("size").style.display = "inline";
        document.getElementById("l_size").style.display = "inline";
        document.getElementById("weight").style.display = "none";
        document.getElementById("height").style.display = "none";
        document.getElementById("width").style.display = "none";
        document.getElementById("length").style.display = "none";

        document.getElementById("l_weight").style.display = "none";
        document.getElementById("l_height").style.display = "none";
        document.getElementById("l_width").style.display = "none";
        document.getElementById("l_length").style.display = "none";
          document.getElementById("l_dim").style.display="none";
     
    }
    if (type == "furniture") {
        
          document.getElementById("l_dim").style.display="inline";
        document.getElementById("height").style.display = "inline";
        document.getElementById("width").style.display = "inline";
        document.getElementById("length").style.display = "inline";
        document.getElementById("l_height").style.display = "inline";
        document.getElementById("l_width").style.display = "inline";
        document.getElementById("l_length").style.display = "inline";
       


        document.getElementById("weight").style.display = "none";
        document.getElementById("size").style.display = "none";

        document.getElementById("l_weight").style.display = "none";
        document.getElementById("l_size").style.display = "none";
    }
    if (type == "book") {
        document.getElementById("weight").style.display = "inline";
        document.getElementById("l_weight").style.display = "inline";
        document.getElementById("size").style.display="none";
        document.getElementById("height").style.display="none";
        document.getElementById("width").style.display="none";
        document.getElementById("length").style.display="none";

        document.getElementById("l_size").style.display="none";
        document.getElementById("l_height").style.display="none";
        document.getElementById("l_width").style.display="none";
        document.getElementById("l_length").style.display="none";
         document.getElementById("l_dim").style.display="none";
     
    }
}