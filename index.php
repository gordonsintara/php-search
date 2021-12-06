<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   
</head>
<body>

<div class="container" style="max-width:50%;">
    <div class="text-center mt-5 mb-4">
        <h2>Product seacrh</h2>
    </div>
    <input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search...">


</div>

<div id="search-result">

</div>
    



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#live_search").keyup(function(){
            var input = $(this).val();
            if(input != ""){
                $.ajax({
                url:"livesearch.php",
                method:"POST",
                data:{input:input},

                success:function(data){
                    $("#search-result").html(data);
                }
            });
        }else{
            $("#search-result").css("display","none");
            location.reload();
        }
        });
    });


</script>
</body>
</html>