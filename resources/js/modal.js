/**
 * Configuração utilizada para criar um elemento HTML.
 *
 * @typedef {Object} ElementConfig
 *
 * @property {string} element
 * Tag HTML do elemento.
 * Ex.: "div", "span", "form", "input", "button", "img", etc.
 *
 * @property {string} [id]
 * ID do elemento.
 *
 * @property {string[]} [classes]
 * Lista de classes CSS.
 *
 * @property {string} [text]
 * Texto do elemento (utiliza textContent).
 *
 * @property {string} [value]
 * Valor do elemento (inputs, selects, textareas...).
 *
 * @property {string} [placeholder]
 * Placeholder do elemento.
 *
 * @property {string} [type]
 * Tipo do elemento (input, button...).
 *
 * @property {string} [name]
 * Nome do elemento.
 *
 * @property {Object.<string, any>} [attributes]
 * Atributos HTML adicionais.
 *
 * Exemplo:
 * {
 *     required: true,
 *     maxlength: 30,
 *     autocomplete: "off",
 *     src: "imagem.png",
 *     alt: "Minha imagem"
 * }
 *
 * @property {Object.<string, any>} [dataset]
 * Atributos data-* do elemento.
 *
 * Exemplo:
 * {
 *     id: 15,
 *     produto: "camiseta"
 * }
 *
 * Gera:
 * data-id="15"
 * data-produto="camiseta"
 *
 * @property {Object.<string, Function>} [events]
 * Eventos do elemento.
 *
 * Exemplo:
 * {
 *     click: abrirModal,
 *     input: validarInput,
 *     submit: salvarFormulario
 * }
 *
 * @property {Object.<string, string>} [style]
 * Estilos CSS em formato de objeto.
 *
 * Exemplo:
 * {
 *     display: "flex",
 *     gap: "10px",
 *     backgroundColor: "#fff"
 * }
 *
 * @property {ElementConfig[]} [children]
 * Elementos filhos.
 *
 * @property {boolean} [disabled]
 * Define se o elemento ficará desabilitado.
 *
 * @property {boolean} [checked]
 * Define se um checkbox/radio ficará marcado.
 *
 * @property {boolean} [selected]
 * Define se uma option ficará selecionada.
 *
 * @property {boolean} [hidden]
 * Define se o elemento ficará oculto.
 */

/**
 * Cria um elemento HTML a partir de uma configuração.
 *
 * @param {ElementConfig} config
 * @returns {HTMLElement}
 */
export function createElement(config) {
    const element = document.createElement(config.element);

    if(config.id){ element.id = config.id }

    if(config.classes){ element.classList.add(...config.classes) }

    if(config.text){ element.textContent = config.text }

    if(config.html){ element.innerHTML = config.html }

    if(config.placeholder){ element.placeholder = config.placeholder }

    if(config.type){ element.type = config.type }

    if(config.name){ element.name = config.name }

    if(config.value){ element.value = config.value }

    if (config.required) element.required = true;

    if (config.disabled) element.disabled = true;

    if (config.checked) element.checked = true;

    if (config.selected) element.selected = true;

    if (config.hidden) element.hidden = true;

    if(config.attributes) {
        Object.entries(config.attributes).forEach(([key, att]) => {
            element.setAttribute(key, att)
        });
    }

    if(config.events) {
        Object.entries(config.events).forEach(([event, callBack]) => {
            element.addEventListener(event, callBack)
        });
    }

    if(config.children) {
        config.children.forEach(child => {
            element.appendChild(createElement(child))
        });
    }

    return element;
}

export function createInput({id, name, value, placeholder, type = 'text', required}) {
    return({
        id: id,
        element: 'input',
        name: name,
        value: value,
        type: type,
        placeholder: placeholder,
        required: required,
    })
}

function submitForm(id){
    document.getElementById(id).submit();
}

export function createButton({text, type = 'button', events, classes}) {
    return{
        element: 'button',
        text: text,
        type: type,
        events: events,
        classes: classes,
    }
}

/**
 * Cria um modal genérico.
 *
 * @param {{
 *   title?: string,
 *   description?: string,
 *   classes?: string[],
 *   content?: ElementConfig[],
 *   buttons?: ElementConfig[]
 * }} config
 */
function callModal({title = '', description = '', classes = [], content = [], buttons = []}) {
    removeModal();

    const modal = createElement({
        element: 'div',
        id: 'fog',
        events: {
            click: removeModal
        },
        children: [
            {
                element: 'div',
                classes: ['modal-container', ...classes],
                events: {
                    click: (e) => e.stopPropagation()
                },
                children: [

                    // Header
                    {
                        element: 'div',
                        classes: ['modal-header'],
                        children: [
                            {
                                element: 'h2',
                                classes: ['modal-title'],
                                text: title
                            },
                            {
                                element: 'button',
                                classes: ['sair'],
                                events: {
                                    click: removeModal
                                }
                            }
                        ]
                    },

                    // Body
                    {
                        element: 'div',
                        classes: ['modal-main'],
                        children: [
                            ...(description
                                ? [{
                                    element: 'p',
                                    text: description
                                }]
                                : []),

                            ...content
                        ]
                    },

                    // Footer
                    {
                        element: 'div',
                        classes: ['modal-footer'],
                        children: buttons
                    },
                ]
            }
        ]
    });

    document.body.appendChild(modal);
}

/**
 * Cria um modal genérico.
 *
 * @param {{
 *   title?: string,
 *   action?: string,
 *   method?: string,
 *   form?: ElementConfig[],
 *   formId?: string,
 *   classes?: string,
 * }} config
 */
export function formModal({title, attributes = {}, form, formId, classes = []}){
    callModal({
        title: title,
        classes: classes,
        content: [
            {
                element: 'form',
                id: formId,
                children: form,
                attributes: attributes,
            }
        ],

        buttons: [
            {
                element: "button",
                classes: ["btn"],
                text: "Cancelar",
                events: {
                    click: removeModal
                }
            },
            {
                element: "button",
                classes: ["btn", "btn-primary"],
                type: 'submit',
                text: "Salvar",
                attributes:{
                    form: formId,
                },
            }
        ]
    })
}

/**
 * Cria um modal genérico.
 *
 * @param {{
 *   title?: string,
 *   description?: string,
 *   classes?: ElementConfig[],
 *   buttons?: ElementConfig[],
 * }} config
 */
export function confirmModal(config){
    callModal({
        title: config.title,
        description: config.description,
        classes: config.classes,
        buttons: config.buttons,
    })
}

export function removeModal(){
    const fog = document.getElementById('fog') || null;

    if(fog !== null){
        fog.remove()
    }
}