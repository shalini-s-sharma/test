//////////////////////////////////////////////////////////////////
// These are functions in global scope hence not defined in .ready
//////////////////////////////////////////////////////////////////
/* wrapper function to make the ajax call
 * if output contains redirect parameter then it will be redirected to the page
 * url : contains the redirect url
 * data : contains the post parameters
 * actionFunction contains the response function
 */
var requestNewUrl;

function customAjaxCall(url, data, actionFunction, loadIcon) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    requestNewUrl = url;
    $.ajax({
        url: url,
        data: data,
        type: 'post',
        dataType: "json",
        beforeSend: function () {
            if (loadIcon === 1) {
                //to do loading

                $('.loading').show();
            }
        },
        complete: function () {

            $('.loading').hide();
        },
        success: function (output) {

            if (output.redirect) {
                // data.redirect contains the string URL to redirect to
                window.location.href = output.redirect;
            }
            else {

                //this is the function defined for the action 
                actionFunction(output);
            }
        }
    });
}

function imageUploadAjax(url, data, actionFunction, loadIcon) {
    $.ajax({
        url: url, // Url to which the request is send
        type: "POST",
        dataType: "json", // Type of request to be send, called as method
        data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false, // The content type used when sending data to the server.
        cache: false, // To unable request pages to be cached
        processData: false, // To send DOMDocument or non processed data file it is set to false
        beforeSend: function () {
            if (loadIcon === 1) {
                //to do loading
                $('.loading').show();
            }
        },
        complete: function () {
            $('.loading').hide();
        },
        success: function (output) {
            if (output.redirect) {
                window.location.href = output.redirect;
            }
            else {
                actionFunction(output);
            }
        }
    });
}

function changeMainBodyContent(output, changeUrl, selector) {
    if (changeUrl == 1) {
        var oldLocation = window.location.href;
        console.log(oldLocation);
        window.location.href = oldLocation;
       // history.pushState(oldLocation, "page", requestNewUrl);
    }
    $(selector || "#main").html(output.html);
}

//sweetalerts on response
function sweet_alert(code, message) {
    if (code == "200") {

        swal({
            title: '',
            text: message,
            timer: 1000,
            type: 'success',
            showConfirmButton: false,
        });
    } else {
        swal({
            title: '',
            text: message,
            type: 'error',
            showConfirmButton: true,
        });
    }
}

//////////////////////////////////////////////////////////////////
// ///////////////////// VALIDATION //////////////////////////////
//////////////////////////////////////////////////////////////////

function nvValidateInput(pattern, value, el, msg, required) {
    if (required || value && typeof value === 'string' && value.length) {
        var regex = new RegExp(pattern);
        if (!regex.test(value)) {
            var errorEl = el.parentNode.querySelector('.error');
            if (errorEl) {
                nvShowMsg(el.parentNode, '.error');
            } else {
                var spanEl = document.createElement('label');
                spanEl.innerText = msg;
                spanEl.setAttribute('class', 'error');
                $(el).after(spanEl);
            }
            return false;
        }
    }

    var errorEl = el.parentNode.querySelector('.error');
    if (errorEl) {
        nvHideMsg(el.parentNode, '.error');
    }
    return true;
}

function nvCheckInput() {
    var isValid = [];
    $('input[nvpattern]').each(function () {
        var elItem = $(this)[0];
        var _pattern = elItem.attributes.nvpattern.value;
        var _msg = elItem.attributes.nvErrorMsg.value;
        var _required = (elItem.attributes.nvRequired ? true : false);
        var _el = elItem;
        var _value = elItem.value;
        if (_required || _value && typeof _value === 'string' && _value.length) {
            var output = nvValidateInput(_pattern, _value, _el, _msg, _required);
            isValid.push(output);
        } else {
            isValid.push(true);
        }
    });

    for (var i = 0; i < isValid.length; i++) {
        if (isValid[i] === false) {
            return false;
        }
    }
    return true;
}

function nvChangeHandler(evt) {
    var _pattern = evt.currentTarget.attributes.nvpattern.value;
    var _msg = evt.currentTarget.attributes.nvErrorMsg.value;
    var _value = evt.currentTarget.value;
    var _el = evt.currentTarget;
    var _required = (evt.currentTarget.attributes.nvRequired ? true : false);
    nvValidateInput(_pattern, _value, _el, _msg, _required);
}

function nvHideMsg(parentEl, selector) {
    $(parentEl).find(selector).css('display', 'none');
}
function nvShowMsg(parentEl, selector) {
    $(parentEl).find(selector).css('display', 'inline');
}

function sweet_warning(callback, data) {
    swal({
        title: (data && data.title) ? data.title : "Are you sure?",
        text: (data && data.text) ? data.text : "You will not be able to recover it.",
        type: (data && data.type) ? data.type : "warning",
        showCancelButton: (data && (data.showCancelButton || data.showCancelButton === false)) ? data.showCancelButton : true,
        confirmButtonColor: (data && data.confirmButtonColor) ? data.confirmButtonColor : "#DD6B55",
        confirmButtonText: (data && data.confirmButtonText) ? data.confirmButtonText : "Yes, delete it!",
        cancelButtonText: (data && data.cancelButtonText) ? data.cancelButtonText : "No, cancel pls!"
    }, function (isConfirm) {
        if (isConfirm) {
            callback();
        }
    });
}