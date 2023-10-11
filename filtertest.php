<html>
    <head>
        <title>Filter test</title>
        <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
        <script>
            $(document).ready(function(){
                $(".button").click(function(){
                    var name = $(this).attr("data-filter");
                    if(name == "all"){
                        $(".filter").show("2000");
                    }
                    else{
                        $(".filter").not("."+name).hide("2000");
                        $(".filter").not("."+name).show("2000");
                    }
                });
            });
        </script>

        <style>
            body{
                font-family: arial;
                background-color: #efefef;
            }

            
            </style>
    </head>
    <body>
            <div>
                <div class="nagivation">
                    <a href="#" data-filter="all" class="button">All</a>
                    <a href="#" data-filter="cheesecake" class="button">Cheesecake</a>
                    <a href="#" data-filter="creamroll" class="button">Cream roll</a>
                    <a href="#" data-filter="other" class="button">Other</a>
                </div>
            </div>
        </body>

</html>