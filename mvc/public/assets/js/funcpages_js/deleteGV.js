let del_btn = Array.prototype.slice.call(document.getElementsByClassName("deleteGVBtn"));
    del_btn.map(function(element){
        element.addEventListener("click", function(){
            // console.log(this.getAttribute("data-id"));
            id = this.getAttribute("data-id");
            let xmlhttp = new XMLHttpRequest();
            recieve_data  = "";
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    recieve_data = this.responseText;
                    const newdata = JSON.parse(recieve_data);
                    if(newdata === 1) location.reload();
                }
            };
            
            xmlhttp.open("GET", `/GiaoVien/Delete/${id}`, true);
            xmlhttp.send();
        })
    }, this)