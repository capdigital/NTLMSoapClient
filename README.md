# NTLMSoapClient

<h2>Installation par composer :</h2>

composer require capdigital/ntlmsoapclient


<h2>Configuration si symfony-receip ne fonctionne pas :</h2>

1) Activer l'analyse du fichier de configuration en allant dans /config/bundles.php et intégrer la ligne :
Capdigital\NtlmSoapClient\CapdigitalNTLMSoapClient::class => ['all' => true]

2) Créer le fichier de configuration dans /config/packages/capdigital_ntlm_soap_client.yaml contenant :
capdigital_ntlm_soap_client:
    url: "http://xxx.xxx.xxx.xxx"
    port: "xxxx"
    server: "SERVER_NAME"
    society: "SOCIETY_NAME"
    user: "DOMAINE\\USER"
    password: "PASSWORD"

