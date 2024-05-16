<div class="main p-5">

    <div class="p-2">
        <h3>Botón:</h3>
        <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-100 sm:mt-0 sm:w-auto" data-modal="deleteClient" onclick="closeModal(this)">Botón</button>

        <button type="submit" class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold shadow-sm hover:opacity-80 sm:ml-3 sm:w-auto">
        <span><svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_aj0A{transform-origin:center;animation:spinner_KYSC .75s infinite linear}@keyframes spinner_KYSC{100%{transform:rotate(360deg)}}</style><path d="M12,4a8,8,0,0,1,7.89,6.7A1.53,1.53,0,0,0,21.38,12h0a1.5,1.5,0,0,0,1.48-1.75,11,11,0,0,0-21.72,0A1.5,1.5,0,0,0,2.62,12h0a1.53,1.53,0,0,0,1.49-1.3A8,8,0,0,1,12,4Z" class="spinner_aj0A"></path></svg></span>Botón con spinner</button>
    </div>
    

    <!--------------------------------------------->
    <div class="p-2 flex">
        <!--------------EJEMPLO USO MODAL-------------->
        <div>
            <h3>Modal:</h3>
            <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-100 sm:mt-0 sm:w-auto openModal" data-modal="modal" onclick="openModal(this)">Abrir modal</button>
            <?php
                modal('modal', '#', 'Modal de ejemplo', "Modal de ejemplo", 'bg-red-500'); 
            ?>
        </div>
        <!--------------EJEMPLO USO DROPDOWN-------------->
        <div class="pl-3">
            <h3>Dropdown:</h3>
            <div class="dropdown relative inline-block text-left" onclick="dropdown(this)">
                <div>
                    <a class="dropdown-btn cursor-pointer inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white p-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-100">
                        Dropdown
                    </a>
                </div>
                <div class="dropdown-menu hidden absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" aria-orientation="vertical" tabindex="-1">
                    <div class="py-1 px-2" role="none">
                            <a>Elemento 1</a>
                    </div>
                    <div class="py-1 px-2" role="none">
                            <a>Elemento 2</a>
                    </div>
                    <div class="py-1 px-2" role="none">
                            <a>Elemento 3</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-------------------------------------------------->
    </div>


    <!--------Código del modal (Para que veas su estructura, no es necesario incluir este código para utilizar el modal)--------->
    <div class="hidden opacity-0 relative z-20 modal" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="example">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity modal-overlay"></div>

            <div class="fixed inset-0 z-20 overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                    <div class="modal-content relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 w-full sm:max-w-'.$maxSize.'">
                        <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full '.$classColor.' text-white sm:mx-0 sm:h-10 sm:w-10">
                                    #
                                </div>
                                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left w-full">

                                    <h3 class="text-base font-semibold leading-6 text-gray-900 " id="modal-title">Modal ejemplo <span id="'.$id.'-idupdate"></span></h3>

                                    <div class="mt-2 w-full border-t border-gray-900/10 pt-8">

                                        Este es el contenido

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 flex justify-between">
                            <button class="inline-flex w-full justify-center rounded-md px-3 py-2 text-sm font-semibold shadow-sm hover:opacity-80 sm:ml-3 sm:w-auto">Aceptar</button>
                            <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-100 sm:mt-0 sm:w-auto" data-modal="example" onclick="closeModal(this)">Cancelar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <!------------------------------------------>
    
    <div class="pt-3">
        <h3>Collapse:</h3>
        <a onclick="openCollapse('collapse')" class="cursor-pointer text-red-500">Ejemplo collapse da click</a>
        <div class="px-2 bg-yellow-100 collapseElement" id="collapse">Contenido del collapse</div>
    </div>

    <div class="pt-3">
        <h3>Alerta:</h3>
        <a onclick="alerta()" class="text-red-500">Da click para desplegar la alerta</a>
        <script>
            function alerta(){
                message('success', 'Ejemplo de alerta');
            }
        </script>
    </div>
    
    <!----------Estructura de la alerta (No es necesario que incluyas esto)----------->
    <div id="alerta" class="fixed z-20 top-3 right-[37%] flex items-center w-full max-w-xs p-4 mb-4 text-gray-800 bg-red-500 rounded-lg shadow" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-black rounded-lg">
            <span>!</span>
        </div>
        <div class="ml-3 text-sm font-normal">Ejemplo</div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 text-gray-700 hover:text-red-800 rounded-lg p-1.5 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alerta" aria-label="Close">x</button>
    </div>
    <!---------------------------------------------------->

    <div class="pt-3">
        <a onclick="copyToClipboard('Ejemplo de copiado')" class="text-blue-500">Da click para copiar algo</a>
    </div>

    <div class="pt-3">
        <h3>Búsqueda inteligente:</h3>
        <div class="relative">
            <div>
                <input type="text" id="busqueda" class="w-full border-2 border-red-500 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-red-500" autocomplete="off" placeholder="Busca una fruta (Escribe dos letras o más)" oninput="intelligentSearch('busqueda-id', 'busqueda','sug-data','sug-data-results',2);">
                <input type="hidden" id="busqueda-id">

                <div id="sug-data-results" class="hidden absolute z-10 bg-white mt-2 ring-1 ring-gray-300 w-full overflow-hidden rounded-md shadow-lg">
                </div>
            </div>

            <datalist id="sug-data">
                <option value="1" data-text="fresa">Fresa</option>
                <option value="2" data-text="manzana">Manzana</option>
                <option value="3" data-text="mango">Mango</option>
                <option value="4" data-text="pera">Pera</option>
                <option value="5" data-text="frambuesa">Frambuesa</option>
                <option value="6" data-text="platano">Platano</option>
                <option value="7" data-text="cereza">Cereza</option>
            </datalist>
        </div>
    </div>

    <div class="pt-3">
        <h3>Autoajuste de dinero en input:</h3>
        <input type='money' inputMode='decimal' class="input-currency w-full border-2 border-red-500 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-red-500" onfocus="toNumber(this)" onblur="toMoney(this)" placeholder="Escribe un monto">
    </div>

    <div class="pt-5">
        <h3>¿Cómo usar?</h3>
        <p>Agrega los archivos tailFun.css y tailFun.js a tu proyecto. Adapta estos recursos para que los puedas utilizar. También puedes agregar html.php si quieres utilizar los recursos html. Recuerda que necesitarás jQuery y tailwindCSS.</p>
    </div>
    

</div>