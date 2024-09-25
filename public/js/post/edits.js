

//funcion para el filtrado de categoria por etiquetas
   $(function (){
       $('#categoria').on('change', onSelectProjectChange);
   });
   function onSelectProjectChange(){
       var category_id= $(this).val();
      // alert(category_id);
    // ajax
    $.get('/api/tags/'+category_id+'/t', function (data){
      var html_select= '<option value="">seleccione etiquetas</option>';
         for(var i=0; i<data.length; ++i)
         html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
         console.log(html_select);
         $('#tags').html(html_select);
    });
  }
 
