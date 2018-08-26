function getProvince(acceptNull){
    acceptNull = typeof acceptNull === 'undefined' ? 0 : 1;
    var country_id = $('select[name=country_id]').val();
    ajaxTransfer('/backend/master/province/load-data', {country_id: country_id, accept_null: acceptNull}, function (result) {
        result = JSON.parse(result);
        $('select[name=province_id] option').remove();

        var option = '';
        for (var key in result) {
            if (result.hasOwnProperty(key)) {
                option += "<option value='"+key+"'>"+result[key]+"</option>";
            }
        }

        $('select[name=province_id]').html(option).trigger("chosen:updated");
        getCity(acceptNull);
    });
}

function getCity(acceptNull){
    acceptNull = typeof acceptNull === 'undefined' ? 0 : 1;
    var province_id = $('select[name=province_id]').val();
    ajaxTransfer('/backend/master/city/load-data', {province_id: province_id, accept_null: acceptNull}, function (result) {
        result = JSON.parse(result);
        $('select[name=city_id] option').remove();

        var option = '';
        for (var key in result) {
            if (result.hasOwnProperty(key)) {
                option += "<option value='"+key+"'>"+result[key]+"</option>";
            }
        }

        $('select[name=city_id]').html(option).trigger("chosen:updated");
    });
}
function reloadCountry(){
    ajaxTransfer('/backend/master/country/load-data', {}, function (result) {
        result = JSON.parse(result);
        $('select[name=country_id] option').remove();

        for (var key in result) {
            if (result.hasOwnProperty(key)) {
                $('select[name=country_id]').append("<option value='"+key+"'>"+result[key]+"</option>")
            }
        }

        $('select[name=country_id]').trigger("chosen:updated")
    })
}

function reloadProvince(country_id){
    ajaxTransfer('/backend/master/province/load-data', {country_id: country_id}, function (result) {
        result = JSON.parse(result);
        $('select[name=province_id] option').remove();

        for (var key in result) {
            if (result.hasOwnProperty(key)) {
                $('select[name=province_id]').append("<option value='"+key+"'>"+result[key]+"</option>")
            }
        }

        $('select[name=province_id]').trigger("chosen:updated")
    })
}

function reloadCity(province_id){
    ajaxTransfer('/backend/master/city/load-data', {province_id: province_id}, function (result) {
        result = JSON.parse(result);
        $('select[name=city_id] option').remove();

        for (var key in result) {
            if (result.hasOwnProperty(key)) {
                $('select[name=city_id]').append("<option value='"+key+"'>"+result[key]+"</option>")
            }
        }

        $('select[name=city_id]').trigger("chosen:updated")
    })
}


//untuk dokument dan sub document
function getDocument() {

    var document_id = $('select[name=document_id]').val();
    ajaxTransfer('/backend/master/document/load-data', {document_id: document_id}, function (result) {
        result = JSON.parse(result);
        $('select[name=sub_document_id] option').remove();

        var option = '';
        for (var key in result) {
            if (result.hasOwnProperty(key)) {
                option += "<option value='"+key+"'>"+result[key]+"</option>";
            }
        }

        $('select[name=sub_document_id]').html(option).trigger("chosen:updated");
        getSubDocument();
    });

}

function getSubDocument(){
    var document_id = $('select[name=document_id]').val();
    ajaxTransfer('/backend/master/sub-document/load-data', {document_id: document_id}, function (result) {
        result = JSON.parse(result);
        $('select[name=sub_document_id] option').remove();

        var option = '';
        for (var key in result) {
            if (result.hasOwnProperty(key)) {
                option += "<option value='"+key+"'>"+result[key]+"</option>";
            }
        }

        $('select[name=sub_document_id]').html(option).trigger("chosen:updated");
    });
}

function reloadSubDocument(document_id){
    ajaxTransfer('/backend/master/sub-document/load-data', {document_id: document_id}, function (result) {
        result = JSON.parse(result);
        $('select[name=sub_document_id] option').remove();

        for (var key in result) {
            if (result.hasOwnProperty(key)) {
                $('select[name=sub_document_id]').append("<option value='"+key+"'>"+result[key]+"</option>")
            }
        }

        $('select[name=sub_document_id]').trigger("chosen:updated")
    })
}