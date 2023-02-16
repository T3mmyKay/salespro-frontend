const spinner = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...`


function isSubmitting(status = false, innerHTML) {
    return status ? `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>&nbsp;Loading...` : innerHTML
}

function round_success_notification(message) {
    Lobibox.notify('success', {
        pauseDelayOnHover: true,
        sound: false,
        size: 'normal',
        height: 'auto',
        rounded: true,
        delay: 5000,
        icon: 'bx bx-check-circle',
        delayIndicator: false,
        continueDelayOnInactiveTab: false,
        position: 'top right',
        msg: `${message}`
    });
}

function round_error_notification(message) {
    Lobibox.alert('error', {
        pauseDelayOnHover: true,
        sound: false,
        size: 'normal',
        height: 'auto',
        rounded: true,
        delay: 5000,
        icon: 'bx bx-x-circle',
        delayIndicator: false,
        continueDelayOnInactiveTab: false,
        position: 'top right',
        msg: `${message}`
    });
}


function concatError(error) {
    let error_text = '';
    if (!error) {
        error_text = 'Error processing request, Pls try again';
    } else if (error.message) {
        error_text = error.message;
    } else if (error.errors) {
        let errs = error.errors;
        errs.forEach(err => {
            error_text += err + '<br>'
        });
    } else {
        error_text = 'Error, Processing Request';
    }

    round_error_notification(error_text);
    return error_text;
}

function dropPaginatedPages(links) {
    let link_txt = '';
    links.forEach(link => {
        link_txt += ` <li class = "page-item goToList ${(link.active == true) ? 'active' : ''}"data - data = "${JSON.stringify(link)}" >
        <a href = "?page=${link.label}"class = "page-link" > ${link.label} </a></li > `;
    });

    let body = ` <div class = "d-flex justify-content-center mt-3 mb-3" >
        <div class="card-tools" >
            <ul class="pagination" >${link_txt}</ul> </div>
        </div>
    `;
    return (links.length > 3) ? body : '';
}

function clearForm(form) {
    Object.keys(form).forEach(key => {
        form[key] = ''
    })
}

function renameKey(object,from,to){
    Object.defineProperty(
        object,
        to,
        Object.getOwnPropertyDescriptor(object, from)
    );
    delete object[from];
}
