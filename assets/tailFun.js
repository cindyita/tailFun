$(document).ready(function () {
    $(".page-overlay").fadeOut();
});
// Close Dropdown and Modal
$(document).on("click", function (event) {
    
    if (!$(event.target).closest(".dropdown").length) {
        $(".dropdown-menu").addClass("hidden");
    }

    if (!$(event.target).closest(".modal-content").length && !$(event.target).closest(".openModal").length && !$(event.target).closest(".unitFilePreview").length) {
        $(".modal").animate({ opacity: 0 }, "fast", function () {
            $(".modal").hide();
        });
    }

});
// Open Modal
/**
 * The openModal function is used to display and animate a modal element, and optionally send an AJAX
 * request and transpose the received data.
 * @param element - The `element` parameter is the element that triggers the opening of the modal. It
 * is usually a button or a link that the user clicks on to open the modal.
 * @param [id=0] - The `id` parameter is used to specify the ID of the element that needs to be
 * processed. It is an optional parameter and its default value is 0.
 * @param [action=0] - The "action" parameter is used to specify the type of action to be performed. It
 * is typically used in conjunction with the "id" parameter to determine the specific action to be
 * taken.
 */
function openModal(element, id = 0, action = 0) {
    const modal = $(element).data("modal");
    $("#" + modal).show();
    $("#" + modal).animate({ opacity: 1 }, "fast");
}

/**
 * The function `openModalJS` is used to display a modal by showing it and animating its opacity to 1.
 * 
 * @param modal The `modal` parameter in the `openModalJS` function is a string that represents the id
 * of the modal element that you want to open.
 */
function openModalJS(modal) {
    $("#" + modal).show();
    $("#" + modal).animate({ opacity: 1 }, "fast");
}

// Close Modal
/**
 * The function closeModal is used to hide and animate a modal element in JavaScript.
 * @param element - The `element` parameter is the HTML element that triggered the close modal action.
 */
function closeModal(element) {
    const modal = $(element).data("modal");
    $("#" + modal).animate({ opacity: 0 }, "fast", function () {
        $("#" + modal).hide();
    });
}

// Close Modal
/**
 * The function closeModalJS is used to close a modal by animating its opacity to 0 and then hiding it.
 * @param modal - The parameter "modal" is a string that represents the id of the modal element that
 * you want to close.
 */
function closeModalJS(modal) {
    $("#" + modal).animate({ opacity: 0 }, "fast", function () {
        $("#" + modal).hide();
    });
}
// Dropdown
/**
 * The function toggles the visibility of a dropdown menu when a specific element is clicked.
 * @param element - The `element` parameter is the HTML element that triggers the dropdown menu when
 * clicked.
 */
function dropdown(element) {
    var dropdownMenu = $(element).find(".dropdown-menu");
    $(".dropdown-menu").not(dropdownMenu).addClass("hidden");
    dropdownMenu.toggleClass("hidden");
}

// Collapse
/**
 * The openCollapse function toggles the visibility of an element using a sliding animation.
 * @param element - The "element" parameter is a string that represents the ID of the HTML element that
 * you want to toggle.
 */
function openCollapse(element, idicon = null, iconopen = null, iconclosed = null) {
    if (idicon && iconopen && iconclosed) {
        $("#" + element).slideToggle(function() {
        if ($(this).is(':visible')) {
                $("#" + idicon).removeClass(iconclosed).addClass(iconopen);
            } else {
                $("#" + idicon).removeClass(iconopen).addClass(iconclosed);
            }
        });
    } else {
        $("#" + element).slideToggle();
    }
}

/**
 * Displays a message with the specified type and text.
 * Automatically fades out the message after 4 seconds.
 *
 * @param {string} type - The type of the message ('success', 'error' or 'info').
 * @param {string} text - The text of the message to be displayed.
 */
function message(type, text) {
    var alertClass = (type === 'success') ? 'green' : (type === 'error' ? 'red' : 'yellow');
    var typeText = (type === 'success') ? 'Éxito' : (type === 'error' ? 'Error' : 'Info');

    var toastId = (type === 'success') ? 'toast-success' : 'toast-error';
    
    var html = '<div id="' + toastId + '" class="fixed z-20 top-3 right-[37%] flex items-center w-full max-w-xs p-4 mb-4 text-gray-800 bg-' + alertClass + '-100 rounded-lg shadow" role="alert">';
    html += '<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-' + alertClass + '-500 rounded-lg">';
    html += (type === 'success') ? '<i class="fa-solid fa-circle-check text-xl"></i>' : (type=== 'error' ? '<i class="fa-solid fa-circle-xmark text-xl"></i>' : '<i class="fa-solid fa-circle-info"></i>');
    html += '</div>';
    html += '<div class="ml-3 text-sm font-normal">' + text + '</div>';
    html += '<button type="button" class="ml-auto -mx-1.5 -my-1.5 text-gray-700 hover:text-red-800 rounded-lg p-1.5 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#' + toastId + '" aria-label="Close">';
    html += '<i class="fa-solid fa-xmark"></i>';
    html += '</button>';
    html += '</div>';

    var $message = $(html);
    $message.hide().appendTo('body').fadeIn();

    setTimeout(function() {
        $message.fadeOut(function() {
            $(this).remove();
        });
    }, 4000);
    
}

/**
 * Copies the specified text to the clipboard.
 * @param {string} text - The text to be copied.
 */
function copyToClipboard(text) {
  navigator.clipboard.writeText(text)
    .then(function() {
      message('success', 'Enlace copiado al portapapeles');
    })
    .catch(function() {
      message('error', 'No se pudo copiar el enlace');
    });
}

/**
 * The function `transposeData` takes in a modal ID and data object, and updates the corresponding
 * elements in the modal with the values from the data object.
 * @param modalid - The `modalid` parameter is a string that represents the ID of a modal element in
 * the HTML document. This ID is used to select and manipulate elements within the modal.
 * @param data - The `data` parameter is an object that contains key-value pairs. Each key represents
 * the ID of an element in the HTML document, and the corresponding value represents the data that
 * should be assigned to that element.
 */
function transposeData(modalid, data) {
    for (const key in data) {
        if (data.hasOwnProperty(key)) {
            var value = data[key];
            const element = $("#" + modalid + "-" + key);
            

            if (element.length > 0) {
                
                if (element.is("input") || element.is("select") || element.is("textarea") ) {
                    element.val(value);
                } else {
                    element.html(value);
                }
            }
            if (key == 'id' && $("#" + modalid + "-" + key + "Text").length > 0) {
                $("#"+modalid+"-"+key+"Text").html(value);
            }
        }
    }
}

/**
 * Realiza una búsqueda inteligente y muestra resultados de sugerencias.
 *
 * @param {string} idInputText - El ID del elemento de entrada de texto.
 * @param {string} idInputHidden - El ID del elemento de entrada oculta.
 * @param {string} idSugData - (Opcional) Default: 'sug-data'. El ID del elemento de datos de sugerencias.
 * @param {string} idSugDataResults - (Opcional) Default: 'sug-data-results'. El ID del elemento de resultados de sugerencias.
 */
function intelligentSearch(idInputHidden, idInputText, idSugData = 'sug-data', idSugDataResults = 'sug-data-results', numMinWords = 3) {
    
    $("#"+idInputText).removeClass('text-red-500');
    $("#"+idInputHidden).val("");

    const searchText = $("#"+idInputText).val().toLowerCase();
    $("#" + idSugDataResults).empty();

    $("#"+idSugDataResults).addClass('hidden');

    if (searchText != "" && searchText.length >= numMinWords) {

        $("#"+idSugData+" option").each(function () {
            
            const optionText = $(this).data('text');
            const optionIcon = $(this).data('icon') ? '<i class="'+$(this).data('icon')+'"></i> ' : "";
            const suggestion = optionText.toLowerCase();
            const optionId = $(this).attr('value');
            
            if (suggestion.includes(searchText)) {
                $("#"+idSugDataResults).removeClass('hidden');
                $("#" + idSugDataResults).append($("<div onclick='searchDataResultsOption(" + optionId + ",\"" + optionText + "\",\"" + idInputText + "\", \"" + idInputHidden + "\", \"" + idSugDataResults + "\")'>").html('<div class="cursor-pointer py-2 px-3 hover:bg-slate-100">' + optionIcon + optionText + '</div>'));
            }
        });
    }
    $("#" + idInputHidden).val($("#" + idInputText).val());
}

/**
 * Maneja la selección de una opción de resultados de búsqueda y actualiza los elementos relacionados.
 *
 * @param {string} optionId - El ID de la opción seleccionada.
 * @param {string} optionText - El texto de la opción seleccionada.
 * @param {string} idInputText - El ID del elemento de entrada de texto.
 * @param {string} idInputHidden - El ID del elemento de entrada oculta.
 * @param {string} idSugDataResults - El ID del elemento de resultados de sugerencias.
 */
function searchDataResultsOption(optionId,optionText,idInputText, idInputHidden, idSugDataResults) {
    $("#"+idSugDataResults).empty();
    $("#"+idSugDataResults).addClass('hidden');
    $("#"+idInputText).val(optionText);
    $("#"+idInputHidden).val(optionId);
    $("#" + idInputText).addClass('text-red-500');
}

/**
 * The function "toNumber" takes an input and an optional amount, and either updates the input value to
 * only contain numbers and decimal points, or returns the amount as a floating point number with
 * non-numeric characters removed.
 * 
 * @param input The input parameter is the HTML input element that you want to convert to a number.
 * @param amount The `amount` parameter is an optional parameter that specifies the value to be
 * converted to a number. If no value is provided for `amount`, it defaults to 0.
 * 
 * @return a parsed float value of the input amount after removing any non-numeric characters.
 */
function toNumber(input, amount = 0) {
    if (input && amount == 0) {
        input.value = input.value.replace(/[^0-9.]/g, '');
    } else {
        return  parseFloat(amount.replace(/[^0-9.]/g, ''));
    }
}

/**
 * The function `toMoney` converts a numeric value to a formatted money string with two decimal places.
 * 
 * @param input The input parameter is the HTML input element that you want to format as a money value.
 * @param amount The amount parameter is the numeric value that you want to convert to a money format.
 */
function toMoney(input,amount = 0) {
    if (input && input.value && amount == 0) {
        const numericValue = parseFloat(input.value.replace(/,/g, ''));
        if (!isNaN(numericValue)) {
            input.value = numericValue.toLocaleString(undefined, {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
        }
    }
    if (amount != 0) {
        
        const numericValue = parseFloat(amount);
        input.val(numericValue.toLocaleString(undefined, {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        }));
    }
}

