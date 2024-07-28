document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('commentForm');
    const commentsList = document.getElementById('commentsList');

    const loadComments = () => {
        const comments = JSON.parse(localStorage.getItem('comments')) || [];
        commentsList.innerHTML = comments.map(comment => `
        <div class="comment">
            <div class="comment__header">
                <strong class="comment__author">${comment.nombre}</strong>
                <span class="comment__email">(${comment.email})</span>
            </div>
            <div class="comment__body">
                <p class="comment__message">🥰 ${comment.mensaje}</p>
            </div>
        </div>
    `).join('');
    };

    loadComments();

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const nombre = document.getElementById('nombre').value;
        const email = document.getElementById('email').value;
        const mensaje = document.getElementById('mensaje').value;

        const comments = JSON.parse(localStorage.getItem('comments')) || [];
        comments.push({
            nombre,
            email,
            mensaje
        });
        localStorage.setItem('comments', JSON.stringify(comments));
        form.reset();
        loadComments();
    });
});