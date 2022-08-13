<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<style>
    .popup {
        width: 100%;
        height: 100%;
        background-color: #e1dfdfde;
        top: 0;
        left: 0;
        position: fixed;
    }

    .BtnClose {
        width: 50px;
        height: 50px;
        background-color: white;
        padding: 5px;
        border-radius: 5px;
        right: 15px;
        top: 1%;
        text-align: center;
        line-height: 50px;
        position: absolute;
        cursor: pointer;
    }
    .BtnClose:hover {
        background-color: red;
    }
</style>

<body>
    <input type="button" value="Edit" id="Btn1">
</body>
<script>
    $('#Btn1').click(function() {
        var popup = "<div class='popup'>" +
            "<div class='BtnClose'>X</div>" +
            "</div>";
        $('body').append(popup);
    })
    $('body').on('click','.BtnClose',function(){
        $('.popup').remove();
    })
</script>

</html>