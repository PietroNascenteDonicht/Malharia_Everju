import { removeModal, formModal, confirmModal, createInput, createButton } from "/resources/js/modal.js";
import { callToast } from "/resources/js/toast.js";

document.getElementById('adicionar-categoria').addEventListener('click', () => {
    const csrf = document
    .querySelector('meta[name="csrf-token"]')
    .content;

    formModal({
        title:'Adicionar Categoria', 
        attributes: {
            action: '/admin/categorias',
            method: 'POST',
        },
        formId:'formCategoria',
        form: [
            createInput({
                type: 'text',
                id: 'nome',
                name: 'nome',
                placeholder: 'Digite o nome da categoria',
                required: true,
            }),

            createInput({
                type: 'hidden',
                name: '_token',
                value: csrf,
            }),
        ]
    })

    const form = document.getElementById('formCategoria');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const resposta = await fetch(form.action, {
            method: form.method,
            headers: {
                'Accept': 'application/json',
            },
            body: new FormData(form),
        });

        const resultado = await resposta.json();
        removeModal();

        callToast({type: resultado.status, mensagem: resultado.mensagem})
    });
})

document.querySelectorAll('#excluir').forEach(btn => {
    btn.addEventListener('click', () => {
        const slug = btn.parentElement.parentElement.children[1].textContent;
        confirmModal({
            title: 'DELETAR',
            description: [
                `tem ceteza que quer deletar a categoria: ${slug} essa ação não poderá ser desfeita`,
            ],
            classes: ['deletar'],
            buttons:[
                createButton({
                    text: 'cancelar',
                    classes: ['btn'],
                    events: {
                        click: removeModal,
                    },
                }),

                createButton({
                    text: 'deletar',
                    classes: ['btn'],
                    events: {
                        click: () => deletarCategoria(slug),
                    },
                }),
            ]
        })
    });
});

async function deletarCategoria(slug) {
    try{
        const resposta = await fetch('/admin/categorias', {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                slug: slug,
            }),
        });

        const resultado = await resposta.json();
        removeModal();
        callToast({type: resultado.status, message: resultado.message})
    } catch (erro) {
        //chamar algo pra mostrar o erro
    }
}