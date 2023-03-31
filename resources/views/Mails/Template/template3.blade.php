<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre de l'e-mail</title>
    <style>
        /* Styles pour le bouton */
        p {
            font-size: 20px;
            color: #036640;
            padding: 5px;
        }

        .btn {
            background-color: #036640;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
        }

        /* Styles pour l'image */
        .img {
            max-width: 70%;
            height: auto;
        }
    </style>
</head>

<body style="margin: 0; padding: 5px;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td>
                <img src="{{ asset('public/img/logos/logoComplet.svg') }}" alt="logo" class="img"
                    style="display: block;">
            </td>
        </tr>
        <tr style="padding:5px">
            <td>
                @yield('contenu')
            </td>
        </tr>
        <tr style="margin:2px 0">
            <td style="padding: 20px;">
                @yield('bouton')
            </td>
        </tr>
        <tr style="margin:2px 0">
            <td style="padding: 20px;">
                @yield('afterBouton')
            </td>
        </tr>
    </table>
</body>

</html>
