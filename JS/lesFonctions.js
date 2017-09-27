function AfficherJeux()
            {
                $.ajax
                (
                        {
                           type:'get',
                           url:"index.php/Ctrl_Demo/AfficherJeux",
                           data:"toto= "+$('#lstCategories').val(),
                           success:function(data)
                           {
                               $('#divJeux').empty();
                               $('#divJeux').append(data);
                           },
                           error:function()
                           {
                              alert("impossible de récupérer les jeux de la catégorie"); 
                           }
                        }
                );
            }
//function ClickBouton1()
   // {
      //  alert("Vous avez saisi : "+$('#txtValeur').val());
   // }
//function ClickBouton2()
   // {
      //  alert("Vous avez cliqué sur le bouton 2");
   // }

