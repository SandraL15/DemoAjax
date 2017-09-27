<html>
    <head>
        <title>Les catégories</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        
        <script type="text/javascript">
           $
           (
                function()
                    {
                       $('#lstCategories').change
                                (
                                    function()
                                    {
                                        AfficherJeux();
                                    }
                                );
                        $('#btn1').click(function(){
                            ClickBouton1();
                        });
                        $('#btn2').click(function(){
                            ClickBouton2();
                        });
                        $('#txtValeur').val("17");
                    }
           );
           
        </script>
        
    </head>
    <body>
        <h1>Les catégories</h1>
        <select id="lstCategories">
            <?php
            foreach($lesCategories as $categ)
            {
                echo"<option value='".$categ->idCateg."'>".$categ->nomCateg."</option>";
            }
            
            ?>
            
        </select>
        
        <div id="divJeux"></div>
        
         
    </body>
</html>


