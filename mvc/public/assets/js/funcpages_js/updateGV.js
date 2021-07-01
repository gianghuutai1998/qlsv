window.onload= function(){

    let giaovien = Array.prototype.slice.call(document.getElementsByClassName("MaGV"));
    let info = {};
    let update_btn = document.getElementById("updateGVBtn");
    giaovien.map(function(element){
    element.addEventListener("click",function(){
        Array.prototype.slice.call(document.getElementsByClassName(element.id)).forEach(element => {
            info[element.getAttribute("data-id")] = element;
        }); 
        // console.log(info);
        document.getElementById("updateTenGV").value = info["TenGV"].innerHTML.trim();
        document.getElementById("updateMaGV").value  = info["MaGV"].innerHTML.trim();
        document.getElementById("updateQuequan").value = info["QueQuan"].innerHTML.trim();
        document.getElementById("updateNam").setAttribute("checked", "unchecked");
        document.getElementById("updateNu").setAttribute("checked", "unchecked");
        document.getElementById("updateNam").setAttribute("checked", "checked");
        if(info["GioiTinh"].innerHTML.trim() === "Nu") document.getElementById("updateNu").setAttribute("checked", "checked"); 

    })
    }, this)

    update_btn.addEventListener("click", function(){
       
        new_name = document.getElementById("updateTenGV").value;
        new_home = document.getElementById("updateQuequan").value;
        
        let xmlhttp = new XMLHttpRequest();
        recieve_data  = "";
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
            
                recieve_data = this.responseText;
                const newdata = JSON.parse(recieve_data);
   
                info["TenGV"].innerHTML = newdata.TenGV;
                info["QueQuan"].innerHTML = newdata.QueQuan;

            }
          };
          let magv = info["MaGV"].innerHTML.trim();
        xmlhttp.open("POST", `/GiaoVien/Update/${magv}/${new_name}/${new_home}`, true);
        xmlhttp.send();
       
    
        
    })
  
}
