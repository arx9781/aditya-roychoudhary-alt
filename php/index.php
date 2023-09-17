<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <form id="form">
            <div class="input-box">
                <label for="name">Name:</label>
                <br>
                <input type="text" id="name" placeholder="Enter Name" required>
            </div>
            <div class="input-box">
                <label for="msg">Message:</label>
                <br>
                <input type="text" id="msg" placeholder="Enter Message" required>
            </div>
            <button id="btn">Submit</button>
        </form>
        <div class="content" id="content">
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function(){
            function loadData() {
                $.ajax({
                    url: 'select-data.php',
                    type: 'POST',
                    success: function(data) {
                        $("#content").html(data);
                    } 
                });
            }

            loadData();

            $("#btn").on("click", function(e){
                e.preventDefault();
                let name = $("#name").val();
                let msg = $("#msg").val();

                $.ajax({
                    url: 'insert-data.php',
                    type: 'POST',
                    data: {name: name, msg: msg},
                    success: function(data){
                        if (data == 1) {
                            loadData();
                            alert("Comment Successful!");
                            $("#form").trigger("reset");
                        } else {
                            alert("Comment Unsuccessul");
                        }
                    }
                });
            });
        }) ;
    </script>
</body>
</html>