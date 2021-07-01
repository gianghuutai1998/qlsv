
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <?php 
    include "mvc/core/css.php";
    include "mvc/core/material.php";
    ?>
    <title>Document</title>
</head>
<body>
<div class="wrapper ">
    <?php 
    include "mvc/views/blocks/sidebar.php";
    
    ?>
    <div class="main-panel">
        <?php 
        include "mvc/views/blocks/narbar.php";  
        
        if(isset($data["page"])) include sprintf("mvc/views/pages/%s.php", $data["page"]);

        ?>
    </div>
</div>
    <?php 
    if(isset($data["func_page"])) {
        foreach($data["func_page"] as $value){
            include sprintf("mvc/views/pages/%s.php", $value);
        }
    }
    ?>
    <?php 
    include "mvc/core/JS.php";
    
    ?>
        

</body>
</html>