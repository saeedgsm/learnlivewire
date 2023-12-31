function getCustomFields() {
    axios.get(site_url +'api/student/fields/'+user_id).then(response=>{
        // console.log(response);
        const fields = response.data;
        const parent_tag = document.getElementById("custom_field");
        let tt=null;
        for (let field of fields){
            let elDivCol4 = createHtmlTags('div','col-lg-4');
            let elDivFormGroup = createHtmlTags('div','form-group');
            elDivCol4.appendChild(elDivFormGroup);
            const input_types = ["radio", "checkbox","text",  "number"];
            let check_type = input_types.includes(field.field_type);
            if (check_type === true){
                if (field.field_type === 'text' || field.field_type === 'number' ){
                    tt = createInputs(field.field_type,'form-control');
                    tt.name = "acf_" + field.field_name_latin;
                    tt.value = field.field_default_value;
                    tt.required = field.field_required === 1;
                    tt.placeholder = field.field_name;
                    tt.id = field.field_name_latin;
                    let field_label = labelFields(field.field_name);
                    if (field.field_required === 1){
                        field_label.innerHTML = "<span>" + field.field_name + "</span> <span class='text-danger'>*</span>";
                    }
                    elDivFormGroup.appendChild(field_label);
                    elDivFormGroup.appendChild(tt);
                }else {
                    let ii = 0;
                    let field_label = labelFields(field.field_name);
                    if (field.field_required === 1){
                        field_label.innerHTML = "<span>" + field.field_name + "</span> <span class='text-danger'>*</span>";
                    }
                    elDivFormGroup.appendChild(field_label);
                    for (const f_v of field.values) {
                        ii++;
                        tt = createInputs(field.field_type,'custom-field-check');
                        tt.name = "acf_" + field.field_name_latin;
                        tt.value = field.field_default_value;
                        tt.id = field.field_name_latin + ii;
                        tt.required = field.field_required === 1;
                        tt.value = f_v.option;
                        elDivFormGroup.appendChild(tt);
                        const label = document.createElement("Label");
                        label.innerText = f_v.option;
                        label.htmlFor= field.field_name_latin + ii;
                        elDivFormGroup.appendChild(label);
                    }
                }
                parent_tag.appendChild(elDivCol4);
            }else {
                let tt = createHtmlTags(field.field_type,'form-control',null);
                tt.name = "acf_" + field.field_name_latin;
                tt.id = field.field_name_latin;
                tt.required = field.field_required === 1;
                if (field.field_type === 'textarea'){
                    tt.placeholder = field.field_name;
                }else {
                    for (let val of field.values){
                        let ops = createHtmlTags('option');
                        ops.value = val.option;
                        ops.innerText = val.option;
                        tt.appendChild(ops);
                    }
                }
                let elDivCol4 = createHtmlTags('div','col-lg-4');
                let elDivFormGroup = createHtmlTags('div','form-group');
                elDivCol4.appendChild(elDivFormGroup);
                let field_label = labelFields(field.field_name);
                if (field.field_required === 1){
                    field_label.innerHTML = "<span>" + field.field_name + "</span> <span class='text-danger'>*</span>";
                }
                elDivFormGroup.appendChild(field_label);
                elDivFormGroup.appendChild(tt);
                parent_tag.appendChild(elDivCol4);
            }
        }
    }).catch(rr=>{
        console.log(rr);
    });
}