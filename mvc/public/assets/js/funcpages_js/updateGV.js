window.onload= function(){

    let giaovien = Array.prototype.slice.call(document.getElementsByClassName("MaGV"));
    let data;
    let info;
    let update_btn = document.getElementById("updateGVBtn");
    giaovien.map(function(element){
    element.addEventListener("click",function(){
        
        info = Array.prototype.slice.call(document.getElementsByClassName(element.id));
        data = info.map(function(ele){
            return ele.innerHTML.trim();
        })
        document.getElementById("updateTenGV").value = data[1];
        document.getElementById("updateMaGV").value  = data[0];
        document.getElementById("updateQuequan").value = data[3];
        document.getElementById("updateNam").setAttribute("checked", "unchecked");
        document.getElementById("updateNu").setAttribute("checked", "unchecked");
        document.getElementById("updateNam").setAttribute("checked", "checked");

        if(data[2] === "Nu") document.getElementById("updateNu").setAttribute("checked", "checked");
        

    })
    }, this)

    update_btn.addEventListener("click", function(){
       
        new_name = document.getElementById("updateTenGV").value;
        new_home = document.getElementById("updateQuequan").value;
        
        let xmlhttp = new XMLHttpRequest();
         recieve_data  = "";
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
                console.log(this.responseText);
                recieve_data = this.responseText;
                const newdata = JSON.parse(recieve_data);
                console.log(newdata);
                console.log(newdata["TenGV"]);
                info[1].innerHTML = newdata.TenGV;
                info[3].innerHTML = newdata.QueQuan;

            }
          };
        xmlhttp.open("POST", `/GiaoVien/Update/${data[0]}/${new_name}/${new_home}`, true);
        xmlhttp.send();
       
       
        
    })
    function IsJsonString(str) {
        try {
            JSON.parse(str);
        } catch (e) {
            return false;
        }
        return true;
    }
    
    
}
