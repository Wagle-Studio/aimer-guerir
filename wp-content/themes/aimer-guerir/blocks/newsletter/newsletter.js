(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.newsletter__form').forEach(function (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                var btn = form.querySelector('[type="submit"]');
                var msg = form.querySelector('.newsletter__message');

                var data = new FormData();
                data.append('action', 'newsletter_subscribe');
                data.append('nonce', newsletterData.nonce);
                data.append('firstname', (form.querySelector('[name="firstname"]').value || '').trim());
                data.append('name', (form.querySelector('[name="name"]').value || '').trim());
                data.append('email', (form.querySelector('[name="email"]').value || '').trim());

                btn.disabled = true;
                msg.textContent = '';
                msg.className = 'newsletter__message';

                fetch(newsletterData.ajaxUrl, {
                    method: 'POST',
                    body: data,
                    credentials: 'same-origin',
                })
                    .then(function (res) { return res.json(); })
                    .then(function (res) {
                        msg.textContent = res.data && res.data.message ? res.data.message : (res.success ? 'Inscription réussie !' : 'Une erreur est survenue.');
                        msg.className = 'newsletter__message ' + (res.success ? 'newsletter__message--success' : 'newsletter__message--error');
                        if (res.success) {
                            form.reset();
                        }
                    })
                    .catch(function () {
                        msg.textContent = 'Une erreur est survenue. Veuillez réessayer.';
                        msg.className = 'newsletter__message newsletter__message--error';
                    })
                    .finally(function () {
                        btn.disabled = false;
                    });
            });
        });
    });
})();
