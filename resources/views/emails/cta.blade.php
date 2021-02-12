@component('mail::message')
# {{ env('APP_NAME') }} Website

Messaggio dal sito {{ env('APP_URL') }}

@component('mail::panel')
<ul>
    <li>Nome: <b>{{ $nome }}</b></li>
    <li>Email: <a href="mailto:{{ $email }}">{{ $email }}</a><br></li>
    <li>Messaggio: <p>{{ $messaggio }}</p></li>
</ul>
@endcomponent

Rispondendo a questo messaggio si potrà contattare l'utente.
@endcomponent
