@extends('Mails.Template.template2')
@section('contenu')
    <p style="margin: 0;">{{ $user->civilite . ' ' . $user->nom . ' ' . $user->nom . ',' }}</p>
    <p style="margin: 0;">{{ 'Bienvenue à SHALOMFINANCE' }}</p>
    <p style="margin: 0;">{{ 'Nous sommes contents de vous accueillir parmis nos clients' }}</p>
    <p style="margin: 0;">{{ "Pour nous, plus qu'un client, vous êtes un partenaire" }}</p>
    <p style="margin: 0;">
        {{ "Pour finaliser l'ouverture de votre compte en ligne, veuillez cliquer sur le bouton ci-dessous pour nous envoyer vos documents justificatifs" }}
    </p>
    <p style="margin: 0;">
        {{ "Pour justifier de votre identité, vous pouvez nous envoyer une photo des deux faces de votre carte nationale d'identité, une photo de votre passeport ( Page comportant vos noms et votre photo), une photo des deux faces de votre permis de conduire ou une photo des deux faces de votre carte de séjour" }}
    </p>
@endsection

@section('bouton')
    <table class="button_block block-4" width="100%" border="0" cellpadding="10" cellspacing="0" role="presentation"
        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
        <tr>
            <td class="pad">
                <div class="alignment" align="center">
                    <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://sico2" style="height:42px;width:86px;v-text-anchor:middle;" arcsize="10%" stroke="false" fillcolor="#036640"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:16px"><![endif]--><a
                        href="{{ $Params->url . '/justificatifs/' . $user->token }}" target="_blank"
                        style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#036640;border-radius:4px;width:auto;border-top:0px solid transparent;font-weight:400;border-right:0px solid transparent;border-bottom:0px solid transparent;border-left:0px solid transparent;padding-top:5px;padding-bottom:5px;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:16px;text-align:center;mso-border-alt:none;word-break:keep-all;"><span
                            style="padding-left:20px;padding-right:20px;font-size:16px;display:inline-block;letter-spacing:normal;"><span
                                style="word-break: break-word; line-height: 32px;">Envoyer mes
                                justificatifs</span></span></a>
                    <!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
                </div>
            </td>
        </tr>
        <tr>
            <td class="pad">
                <div
                    style="color:#036640;direction:ltr;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:18px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:left;mso-line-height-alt:21.599999999999998px;">
                    >
                    <p style="margin: 0;">
                        Si le bouton ne marche pas, vous pouvez copier le lien ci-dessous et coller dans la barre d'adresse
                        de votre navigateur
                    </p>
                    <p class="m0">
                        <a
                            href="{{ $Params->url . '/justificatifs/' . $user->token }}">{{ $Params->url . '/justificatifs/' . $user->token }}</a>
                    </p>
                </div>
            </td>
        </tr>
    </table>
@endsection
