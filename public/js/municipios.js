$(function(){
   $('#idest').on('change', onSelectMunicipios);
});

function onSelectMunicipios(){
    var idest = $(this).val();
    //AJAX
    $.get('/api/estados/'+idest+'/municipios', function(data){
        var html_select = '<option value="">--Seleccione--</option>';
        for (var i=0; i<data.length; ++i)
            html_select +='<option value='+data[i].idmun+'>'+data[i].NombreMunicipio+'</option>'
            $('#idmuni').html(html_select);        

        });
}