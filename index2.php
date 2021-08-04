<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title>Site 2 - teste em PHP</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        
        <style type="text/css">
            
            .linha {
                font-family: 'Times New Roman', Times, serif;
                font-weight: 600;
                text-align: center;
                color: blue;
                padding: 10px;
                line-height: 50px;
            }

        </style>
    </head>

    <body>
        <?php
        for ( $i = 0 ; $i <= 100 ; $i++ ) {
            print( "<span class=\"linha\">Linha número " . $i . "</span><br />");
        }
        ?>
    </body>


</html>