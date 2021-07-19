@component('mail::message')
# Richiesta informazioni - Form contatto
Di seguito le informazioni:
@component('mail::panel')
<ul markdown="2">
<li>Nome: <i>{{ $nome }}</i></li>
<li>Telefono: <i><a href="tel:{{ $telefono }}">{{ $telefono }}</a></i></li>
<li>Email: <i><a href="mailto:{{ $email }}">{{ $email }}</a></i></li>
<li>Messaggio: <i>{{ $messaggio ?? 'N/D' }}</i></li>
</ul>
@endcomponent
Grazie, messaggio generato dal sito {{ env('APP_URL') }}
@endcomponent
