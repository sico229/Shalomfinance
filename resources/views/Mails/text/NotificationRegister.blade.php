Un nouveau client a demandé l'ouverture de son compte en ligne:
Nom du client : {{ $user->nom . ' ' . $user->prenom }}
Adresse: {{ $user->adresse . ' - ' . $user->ville . ' - ' . $user->telephone . ' - ' . $user->email }}
Pays : {{ $user->pays }}
