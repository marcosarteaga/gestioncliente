<script>
        
        var clientes = {!! json_encode($clientes,JSON_HEX_TAG) !!};

        //console.log(clientes)

        CreateTable("#ClientsTable",clientes.data,undefined);

        createFilter('#ClientsTable table thead',"/","clientes","table");
        
       $('.clickable').each(function(){
            $(this).attr("data-href","/clients/"+$(this).attr("id"));
       })

       $('.clickable').click(function(){
            window.location=$(this).data('href');
       });

        $('input[name="filtro"]').val('');
        ajaxClientes();
        $(document).ready(function(){
            $(".pagination a").on('click',function(e){
                e.preventDefault();
                ajaxClientes($(this).attr('href'));//falta pasar el numero de pagina i token 
            });
        });
        
   </script>