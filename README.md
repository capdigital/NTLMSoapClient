# NTLMSoapClient

<h2>Installation par composer :</h2>

composer require capdigital/ntlmsoapclient


<h2>Configuration si symfony-receip ne fonctionne pas :</h2>

1) Activer l'analyse du fichier de configuration en allant dans /config/bundles.php et intégrer la ligne :
<br>Capdigital\NtlmSoapClient\CapdigitalNTLMSoapClient::class => ['all' => true]

2) Créer le fichier de configuration dans /config/packages/capdigital_ntlm_soap_client.yaml contenant :
<br>capdigital_ntlm_soap_client:
<br>    url: "http://xxx.xxx.xxx.xxx"
<br>    port: "xxxx"
<br>    server: "SERVER_NAME"
<br>    society: "SOCIETY_NAME"
<br>    user: "DOMAINE\\USER"
<br>    password: "PASSWORD"
    
3) Utilisation du service dans un controller :
    use Capdigital\NtlmSoapClient\Service\CapdigitalNtlmSoapClient as serviceNtlmSoapClient;
    class maClass
    {
    
    mafonction(serviceNtlmSoapClient $serviceNtlmSoapClient)
        {
        $service = $serviceNtlmSoapClient->connect($wsName, $deleteSociety = true);
        ou
        $service = $serviceNtlmSoapClient->connect($wsName);
        }
    
    }
    
4) Exemple :
    mafonction(serviceNtlmSoapClient $serviceNtlmSoapClient)
        {
        $service = $serviceNtlmSoapClient->connect('SystemService', $deleteSociety = true);
        $result = $client->Companies();
        $companies = $result->return_value;
        echo "Companies:<br>";
        if (is_array($companies)) {
            foreach($companies as $company) {
                echo "$company<br>";
            }
            $cur = $companies[0];
            }
            else {
                echo "$companies<br>";
                $cur = $companies;
                }
        }
