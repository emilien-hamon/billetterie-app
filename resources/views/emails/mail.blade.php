<h3>Modification Effectuée</h3>

<p>Bonjour,</p>
<p>Nous vous informons qu'une modification a été effectuée sur notre plateforme.</p>
<p>Effectué par : {{ Auth::user()->name }}</p>

<p>Merci,</p>
<p>L'équipe de la billetterie</p>


{{-- <!-- resources/views/emails/modification.blade.php -->

Modification Effectuée

Bonjour,

Nous vous informons qu'une modification a été effectuée sur notre plateforme.

Détails de la modification :
- **élément :** {{ $model }}
- **Action effectuée :** {{ $action }}
- **Effectuée par :** {{ $user->name }}

Merci,
L'équipe de la billetterie
--> --}}
