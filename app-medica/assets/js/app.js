(() => {
    const sidebar = document.querySelector('#sidebar');
    const menuButton = document.querySelector('.menu-button');

    if (sidebar && menuButton) {
        menuButton.addEventListener('click', () => {
            const isOpen = sidebar.classList.toggle('is-open');
            menuButton.setAttribute('aria-expanded', String(isOpen));
        });

        document.addEventListener('click', (event) => {
            if (window.innerWidth <= 820 && sidebar.classList.contains('is-open')
                && !sidebar.contains(event.target) && !menuButton.contains(event.target)) {
                sidebar.classList.remove('is-open');
                menuButton.setAttribute('aria-expanded', 'false');
            }
        });
    }

    document.querySelectorAll('[data-table-search]').forEach((input) => {
        input.addEventListener('input', () => {
            const panel = input.closest('.content-panel');
            const query = input.value.trim().toLocaleLowerCase();
            const rows = panel ? [...panel.querySelectorAll('[data-search-row]')] : [];
            let visible = 0;

            rows.forEach((row) => {
                const match = row.textContent.toLocaleLowerCase().includes(query);
                row.hidden = !match;
                visible += match ? 1 : 0;
            });

            const emptyMessage = panel?.querySelector('.empty-search');
            if (emptyMessage) emptyMessage.hidden = visible > 0;
        });
    });

    const toast = document.querySelector('.toast');
    let toastTimer;
    const showMessage = (message) => {
        if (!toast) return;
        toast.textContent = message;
        toast.classList.add('is-visible');
        window.clearTimeout(toastTimer);
        toastTimer = window.setTimeout(() => toast.classList.remove('is-visible'), 3000);
    };

    document.querySelectorAll('.js-demo-action').forEach((button) => {
        button.addEventListener('click', () => showMessage(button.dataset.message || 'Acción de demostración.'));
    });

    document.querySelectorAll('[data-demo-form]').forEach((form) => {
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            if (!form.reportValidity()) return;
            showMessage('Cita preparada para demostración. No se guardaron datos.');
            form.reset();
        });
    });
})();
