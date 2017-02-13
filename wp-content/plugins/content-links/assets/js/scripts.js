var helper = {
    langs : [],
    values : [],
    command : {},
    setLang : function (key, value) {
        this.langs[key] = value;
    },
    getLang: function (key) {
        if (this.values[key] != 'undefined') {
            return this.langs[key];
        }
        return '';
    },
    setValue : function (key, value) {
        this.values[key] = value;
    },
    getValue : function (key) {
        if (this.values[key] != 'undefined') {
            return this.values[key];
        }
        return null;
    }, 
    
    setCommand : function(value, is_work) {
        if (is_work == 'undefined') {
            is_work = 1;
        }
        this.command[value] = is_work;
    },
    
    getCommand : function(value, is_work) {
        
        if (is_work == 'undefined') {
            is_work = 1;
        }
        
        if (this.command[value] != 'undefined') {
            if (this.command[value] == is_work) {
                return this.command[value];
            }
        }
        return null;
    }
    
}
var show = '';
function shows_form(id, icon)
{
    disp = jQuery(id).css('display');
    if (disp == 'block') {
        jQuery(id).hide('slow');
        if (icon != 'undefined' && jQuery(icon).length > 0) {
            jQuery(icon).removeClass( "dashicons-arrow-up" ).addClass( "dashicons-arrow-down" );
        }
    } else {
        jQuery(id).show('slow');
        if (icon != 'undefined' && jQuery(icon).length > 0) {
            jQuery(icon).removeClass( "dashicons-arrow-down" ).addClass( "dashicons-arrow-up" );
        }
    }                
}

function showModal(id, from_params, to_params)
{
    jQuery('#' + id).arcticmodal({
        beforeOpen: function(data, el) {
			if (from_params != undefined) {
				if ( typeof(from_params) == "string") {
					jQuery(from_params).html(to_params);
				} else {
					for( i = 0; i < from_params.length; i++) {
						jQuery(from_params[i]).html(to_params[i]);
					}
				}
			}
            jQuery('#' + id).css('display','block');
		},
        afterClose: function(data, el) {
            jQuery('#' + id).css('display','none');
        }
    });
}
function sendMessageSupport(button)
{

    if(jQuery('#message').val().trim() == '') {
        alert('Please, describe your suggestion or issue and then click "Send" button.');
        jQuery('#message').focus();
        return;
    }

    var data = {};
    data['action'] = 'cl_support';
    data['message'] = jQuery('#message').val();
    jQuery('#loading-field').css('display', 'table-row');
    jQuery('#message-result').css('display', 'none');
    jQuery('#button-ok').css('display', 'none');
    jQuery('#button-sent').css('display', 'none');
    jQuery('#message-field').css('display', 'none');
    jQuery.ajax({
        url: ajaxurl,
        data: data,
        type: 'POST',
        dataType: 'json',
        success: function(data_res) {
            jQuery('#message-result').css('display', 'table-row');
            jQuery('#button-ok').css('display', 'table-row');
            jQuery('#button-sent').css('display', 'none');
            jQuery('#loading-field').css('display', 'none');
            jQuery('#message-field').css('display', 'none');
            td = jQuery('#message-result').find('td');
            jQuery(td).css('color', '#624444');
            jQuery(td).html(data_res.msg);
            if (data_res.error) {
                jQuery(td).css('color', 'red');
            } else {
                jQuery(td).css('color', 'green');
            }
        }, 
    }); 
}
function closeSupport()
{
    jQuery.arcticmodal('close');
    jQuery('#message-result').css('display', 'none');
    jQuery('#button-ok').css('display', 'none');
    jQuery('#message-field').css('display', 'table-row');
    jQuery('#button-sent').css('display', 'table-row');
}
function submitFilter(cat_id)
{
    document.form_field.cat_id.value = cat_id;
    document.form_field.submit();
}
function setRule()
{
    if ( jQuery('#rule_on').prop( 'checked' ) ) {
        document.form_field.rules.value = 1;
        document.form_field.submit(); 
    }
    jQuery('#info-rules').arcticmodal('close');
}

