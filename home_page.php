<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/icon.png">
    <title>DOPE</title>
    <meta charset-"UTF-8">
</head>
<body>
    <?php include "headerPHP.php"; ?>
    <?php include "themeChange.php"; ?>
    <div class="reload"></div>
    <!-- javaScript untuk pembuatan auto refresh ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.reload').load('home_page2.php');
            refresh();
        });
        function refresh(){
            setTimeout(function(){
                $('.reload').load('home_page2.php');
                refresh();
            }, 1000);
        }
    </script>
    <?php include "footer.php"; ?>
</body>
</html>