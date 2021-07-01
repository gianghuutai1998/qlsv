window.addEventListener('load', function(){
    let add_btn = document.getElementById("addGVBtn");
    // console.log(add_btn);
    add_btn.addEventListener("click", function(){
        MaGV = document.getElementById("addMaGV").value;
        TenGV = document.getElementById("addTenGV").value;
        GioiTinh =  document.querySelector('input[name="addGioiTinh"]:checked').value;
        if(GioiTinh==="Nam") GioiTinh=1; else GioiTinh=0;
        QueQuan =  document.getElementById("addQuequan").value;
        
        let xmlhttp = new XMLHttpRequest();
            recieve_data  = "";
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    recieve_data = this.responseText;
                    const newdata = JSON.parse(recieve_data);
                    if(newdata == 1) {
                        alert("them thanh cong");
                        location.reload();
                    }
                    else alert("that bai");
                   
                }
            };
            
        xmlhttp.open("POST", `/GiaoVien/Add/${MaGV}/${TenGV}/${GioiTinh}/${QueQuan}`, true);
        xmlhttp.send();
    })
});