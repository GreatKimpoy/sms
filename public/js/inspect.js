


function popForm(type_id,typeName,item_id,itemName,form){
    if(!$('#panel'+type_id+'').length){
        $('#form-box').append(
            '<div id="panel'+type_id+'" class="panel panel-default">' +
            '<div class="panel-heading" role="tab" id="heading'+type_id+'" data-toggle="collapse" data-parent="#form-box" href="#collapse'+type_id+'" aria-expanded="true" aria-controls="collapse'+type_id+'">' +
            '<h2 class="panel-title" style="font-weight:bold!important;color:black!important">' +
            '<a role="button">'+typeName+'</a></h2>' +
            '</div>' +
            '<div id="collapse'+type_id+'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'+type_id+'">' +
            '<div id="body'+type_id+'" class="panel-body"></div>' +
            '</div>' +
            '</div>'
        );
    }
    $('#body'+type_id+'').append(
        '<div id="item'+item_id+'" style="padding-left: 30px" class="row formed"></div>'
    );
    var formContainer = $('#item'+item_id+'');
    var formData = form;
    var formRenderOpts = {
        dataType: 'json',
        formData: formData
    };
    formContainer.formRender(formRenderOpts);
    formContainer.prepend('<label>'+itemName+':</label><br>');
    formContainer.append('<input type="text"  class="hidden" name="type_id[]" id="type_id" value="'+type_id+'" required>');
    formContainer.append('<input type="text" class="hidden" name="typeName[]" id="typeName" value="'+typeName+'" required>');
    formContainer.append('<input type="text" class="hidden" name="item_id[]" id="item_id" value="'+item_id+'" required>');
    formContainer.append('<input type="text" class="hidden" name="itemName[]" id="itemName" value="'+itemName+'" required>');
    formContainer.append('<textarea class="hidden" name="form[]" id="form" required>'+formData+'</textarea>');
    formContainer.append('<hr>');
    formContainer.children('.form-group').addClass('col-md-3')
}

$(document).on('change', '.formed input', function(){
    valued = $(this).val();
    name = this.name;
    parent = $(this).parents('.formed');
    textarea = parent.find('#form');
    form = JSON.parse(textarea.text());
    $.each(form,function(key,value){
        if(name==value.name){
            if(value.type=="radio-group"){
                $.each(value.values,function(subkey,subvalue){
                    if(subvalue.value==valued){
                        form[key].values[subkey].selected = true;
                    }else{
                        delete form[key].values[subkey].selected;
                    }
                });
            }//autocomplete
            else if(value.type=="autocomplete"){
                $.each(value.values,function(subkey,subvalue){
                    if(subvalue.value==valued){
                        form[key].values[subkey].selected = true;
                    }else{
                        delete form[key].values[subkey].selected;
                    }
                });
            }//checkbox
            else if(value.type=="checkbox-group"){
                $.each(value.values,function(subkey,subvalue){
                    if(subvalue.value==valued){
                        form[key].values[subkey].selected = true;
                    }else{
                        delete form[key].values[subkey].selected;
                    }
                });
            }
            else if(value.type=="paragraph"){
                form[key].label = valued;
            }
            else{
                form[key].value = valued;
            }
        }
    });
    textarea.text(JSON.stringify(form));
});

function pdfForm(type_id,typeName,item_id,itemName,form){
    if(!$('#panel'+type_id+'').length){
        $('#form-box').append(
            '<div id="panel'+type_id+'" class="panel panel-primary">' +
            '<div class="panel-heading" role="tab" id="heading'+type_id+'" data-parent="#form-box" href="#collapse'+type_id+'" aria-expanded="true" aria-controls="collapse'+type_id+'">' +
            '<h2 class="panel-title" style="font-weight:bold!important;color:white!important">' +
            '<a role="button">'+typeName+'</a></h2>' +
            '</div>' +
            '<div id="collapse'+type_id+'" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading'+type_id+'">' +
            '<div id="body'+type_id+'" class="panel-body"></div>' +
            '</div>' +
            '</div>'
        );
    }
    $('#body'+type_id+'').append(
        '<div id="item'+item_id+'" style="padding-left: 30px" class="row formed"></div>'
    );
    var formContainer = $('#item'+item_id+'');
    var formData = form;
    var formRenderOpts = {
        dataType: 'json',
        formData: formData
    };
    formContainer.formRender(formRenderOpts);
    formContainer.prepend('<label>'+itemName+':</label><br>');
    formContainer.children('.form-group').addClass()
}


