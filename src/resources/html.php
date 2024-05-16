<?php 
// tailFun Resources HTML

// Modal
/**
 * The `modal` function in PHP generates HTML code for a modal window with customizable content and
 * styling.
 * 
 * @param $id The id parameter is used to set the id attribute of the modal element. This is used to
 * uniquely identify the modal and can be used for styling or JavaScript manipulation.
 * @param $icon The icon parameter is used to specify the icon that will be displayed in the modal. It
 * can be any valid HTML code or an SVG icon.
 * @param $title The title of the modal window.
 * @param $content The "content" parameter is the HTML content that will be displayed inside the modal.
 * It can include any text, images, or other HTML elements that you want to show to the user.
 * @param $classColor The classColor parameter is used to specify the background color of the modal. It
 * is set to 'bg-primary' by default, but you can pass any valid CSS class for background color.
 * @param $textBtn The "textBtn" parameter is used to specify the text that will be displayed on the
 * button inside the modal. By default, it is set to "Aceptar".
 * @param $maxSize The `` parameter determines the maximum width of the modal. It accepts the
 * following values:
 * @param $btnOnClick The `btnOnClick` parameter is used to specify the JavaScript function that should
 * be executed when the button inside the modal is clicked. This function can be defined separately and
 * passed as a string to the `btnOnClick` parameter.
 */
function modal($id, $icon, $title, $content, $classColor = 'bg-primary', $textBtn = 'Aceptar', $maxSize = '2xl', $btnOnClick = ""){
    $html = '
        <div class="hidden opacity-0 relative z-20 modal" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="'.$id.'">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity modal-overlay"></div>

                <div class="fixed inset-0 z-20 overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                        <div class="modal-content relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 w-full sm:max-w-'.$maxSize.'">
                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full '.$classColor.' text-white sm:mx-0 sm:h-10 sm:w-10">
                                        '.$icon.'
                                    </div>
                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left w-full">

                                        <h3 class="text-base font-semibold leading-6 text-gray-900 " id="modal-title">'.$title.' <span id="'.$id.'-idupdate"></span></h3>

                                        <div class="mt-2 w-full border-t border-gray-900/10 pt-8">

                                        '.$content.'

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 flex justify-between">
                                <button class="inline-flex w-full justify-center rounded-md '.$classColor.' px-3 py-2 text-sm font-semibold shadow-sm hover:opacity-80 sm:ml-3 sm:w-auto" onclick="'.$btnOnClick.'">
                                <span id="'.$id.'-loading" class="hidden"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_aj0A{transform-origin:center;animation:spinner_KYSC .75s infinite linear}@keyframes spinner_KYSC{100%{transform:rotate(360deg)}}</style><path d="M12,4a8,8,0,0,1,7.89,6.7A1.53,1.53,0,0,0,21.38,12h0a1.5,1.5,0,0,0,1.48-1.75,11,11,0,0,0-21.72,0A1.5,1.5,0,0,0,2.62,12h0a1.53,1.53,0,0,0,1.49-1.3A8,8,0,0,1,12,4Z" class="spinner_aj0A"/></svg></span>'.$textBtn.'</button>
                                <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-100 sm:mt-0 sm:w-auto" data-modal="'.$id.'" onclick="closeModal(this)">Cancelar</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    ';
    echo $html;
}

/**
 * The `modalView` function generates HTML code for a modal view with customizable parameters such as
 * ID, icon, title, content, color, button text, and maximum size.
 * 
 * @param $id The unique identifier for the modal view.
 * @param $icon The icon parameter is used to specify the icon that will be displayed in the modal. It
 * can be any valid HTML code for an icon, such as an SVG or a font icon.
 * @param $title The title of the modal window.
 * @param $content The `` parameter is the main content of the modal. It can be any HTML or text
 * that you want to display inside the modal.
 * @param $classColor The classColor parameter is used to specify the background color of the modal
 * header. It is optional and has a default value of 'bg-primary'. You can pass any valid CSS class
 * name to change the background color.
 * @param $textBtn The `textBtn` parameter is used to specify the text that will be displayed on the
 * close button of the modal. By default, it is set to "Cerrar", which means "Close" in Spanish.
 * However, you can pass any desired text as a string to customize the close button text.
 * @param $maxSize The `` parameter determines the maximum width of the modal. It accepts the
 * following values:
 */
function modalView($id, $icon, $title, $content, $classColor = 'bg-primary', $textBtn = 'Cerrar', $maxSize = '2xl'){
    $html = '
        <div class="hidden opacity-0 relative z-20 modal" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="'.$id.'">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity modal-overlay"></div>

                <div class="fixed inset-0 z-20 overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                        <div class="modal-content relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 w-full sm:max-w-'.$maxSize.'">
                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full '.$classColor.' text-white sm:mx-0 sm:h-10 sm:w-10">
                                        '.$icon.'
                                    </div>
                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left w-full">

                                        <h3 class="text-base font-semibold leading-6 text-gray-900 " id="modal-title">'.$title.' <span id="'.$id.'-idupdate"></span></h3>

                                        <div class="mt-2 w-full border-t border-gray-900/10 pt-8">

                                        '.$content.'

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-100 sm:mt-0 sm:w-auto" data-modal="'.$id.'" onclick="closeModal(this)">'.$textBtn.'</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    ';
    echo $html;
}

/**
 * The `modalForm` function generates HTML code for a modal form with customizable parameters such as
 * ID, icon, title, content, color, button text, and maximum size.
 * 
 * @param $id The id parameter is used to set the id attribute of the modal element. This is used to
 * uniquely identify the modal and can be used for styling or JavaScript manipulation.
 * @param $icon The icon parameter is used to specify the icon that will be displayed in the modal. It
 * can be any valid HTML code for an icon, such as an SVG or a font icon.
 * @param $title The title parameter is a string that represents the title of the modal form.
 * @param $content The `` parameter is the HTML content that will be displayed inside the modal.
 * It can include any HTML elements such as text, images, forms, etc. This content will be displayed in
 * the body of the modal.
 * @param $classColor The classColor parameter is used to specify the background color of the modal. It
 * is optional and has a default value of 'bg-primary'.
 * @param $textBtn The "textBtn" parameter is used to specify the text that will be displayed on the
 * button inside the modal form. By default, it is set to "Aceptar".
 * @param $maxSize The `` parameter determines the maximum width of the modal. It accepts the
 * following values:
 */
function modalForm($id, $icon, $title, $content, $classColor = 'bg-primary', $textBtn = 'Aceptar', $maxSize = '2xl'){
    $html = '
        <div class="hidden opacity-0 relative z-20 modal" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="'.$id.'">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity modal-overlay"></div>

                <div class="fixed inset-0 z-20 overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                        <div class="modal-content relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 w-full sm:max-w-'.$maxSize.'">
                            <form method="post" id="'.$id.'Form" class="w-full">
                                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full '.$classColor.' text-white sm:mx-0 sm:h-10 sm:w-10">
                                            '.$icon.'
                                        </div>
                                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left w-full">

                                            <h3 class="text-base font-semibold leading-6 text-gray-900 " id="modal-title">'.$title.' <span id="'.$id.'-idupdate"></span></h3>

                                            <div class="mt-2 w-full border-t border-gray-900/10 pt-8">
                                            '.$content.'

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 flex justify-between">
                                    <button type="submit" class="inline-flex w-full justify-center rounded-md '.$classColor.' px-3 py-2 text-sm font-semibold shadow-sm hover:opacity-80 sm:ml-3 sm:w-auto">
                                    <span id="'.$id.'-loading" class="hidden"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_aj0A{transform-origin:center;animation:spinner_KYSC .75s infinite linear}@keyframes spinner_KYSC{100%{transform:rotate(360deg)}}</style><path d="M12,4a8,8,0,0,1,7.89,6.7A1.53,1.53,0,0,0,21.38,12h0a1.5,1.5,0,0,0,1.48-1.75,11,11,0,0,0-21.72,0A1.5,1.5,0,0,0,2.62,12h0a1.53,1.53,0,0,0,1.49-1.3A8,8,0,0,1,12,4Z" class="spinner_aj0A"/></svg></span>'.$textBtn.'</button>
                                    <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-100 sm:mt-0 sm:w-auto" data-modal="'.$id.'" onclick="closeModal(this)">Cancelar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    ';
    echo $html;
}


