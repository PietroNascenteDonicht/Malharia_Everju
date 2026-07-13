import { createElement } from "/resources/js/modal.js";

/**
 * Exibe um toast na tela.
 *
 * @param {Object} options
 * @param {"success"|"error"|"warning"|"info"} [options.type="info"]
 * @param {string} options.message
 * @param {number} [options.duration=3000]
 */
export function callToast({type = 'info', mensagem, duration = 1500}) {
    let container = document.getElementById("toast-container");

    if (container === null) {
        container = createElement({element: 'div', id: 'toast-container'});
        document.body.appendChild(container);
    }

    const toast = createElement({
        element: 'div', 
        classes:['toast', `toast-${type}`], 
        children:[
            {
                element: 'h1',
                text: type,
            },
            {
                element: 'p',
                text: mensagem,
            }
        ]
    });

    container.appendChild(toast);

    requestAnimationFrame(() => {
        toast.classList.add("show");
    });

    setTimeout(() => {
        toast.classList.remove("show");

        toast.addEventListener(
            "transitionend",
            () => toast.remove(),
            { once: true }
        );

        location.reload();
    }, duration);
}