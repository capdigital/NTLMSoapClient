# NTLMSoapClient

Installation si symfony-receip ne fonctionne pas :

1) Activer l'analyse du fichier de configuration en allant dans /config/bundles.php et intégrer la ligne :
Capdigital\NTLMSoapClient\CapdigitalNTLMSoapClient::class => ['all' => true]

2) Créer le fichier de configuration dans /config/packages/capdigital_ntlm_soap_client.yaml contenant :
capdigital_ntlm_soap_client:
    url: "test"
    user: ""
    password: ""

