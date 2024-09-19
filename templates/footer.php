<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    footer{
        margin-top: 20px;
    }

    .page-footer .footer-copyright {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<body>
<<<<<<< HEAD
    <footer class="page-footer black">
        <div class="container footer-copyright">
            <h6 class="center-align white-text">&copy; 2024 recipes.com</h6>
=======
    <footer class="page-footer blue darken-4">
        <div class="section center-align">
            <h4 class="center-align white-text">&copy; 2024 <em>Recipes.com</em></h4>
>>>>>>> 8c98c727023f74b3ee43cb4022bd2ca6deb1fb17
        </div>
    </footer>
        
    <!-- JS Scripts Below -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="./assets/js/jqueryv3.4.1.js"></script>
    <script src="./assets/js/materialize.js"></script>
    <script>
<<<<<<< HEAD
        $(document).ready(function () {
            $(".slider").slider({
                indicators:false
            });
=======
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.slider').slider({
                height : 400,
                indicators: false,
                interval:2000
            });
            $('.dropdown-trigger').dropdown();
            $('select').formSelect();
            $('.fixed-action-btn').floatingActionButton();
>>>>>>> 8c98c727023f74b3ee43cb4022bd2ca6deb1fb17
        })
        // document.addEventListener('DOMContentLoaded', function() {
        //     var elems = document.querySelectorAll('.fixed-action-btn');
        //     var instances = M.FloatingActionButton.init(elems, {
        //     direction: 'left',
        //     hoverEnabled: false
        //     });
        // });
    </script>
</body>
</html>