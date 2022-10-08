<!-- JS -->
@if(!empty(config('app.recaptcha_secret')))
<script src="https://www.google.com/recaptcha/api.js?onload=recaptchaCallback&render=explicit" async defer></script>
<script type="text/javascript">
const recaptchaCallback = () => {
    // todo: integrare inizializzazione recaptcha, example:
    // if (document.getElementById("contactFormRecaptcha")) grecaptcha.render('contactFormRecaptcha', {'sitekey' : 'sitekey_public'});
    // dove "contactFormRecaptcha" è l'id di un div di un form (class facoltativa): <div id="contactFormRecaptcha" class="recaptcha"></div>
}
</script>
@endif
