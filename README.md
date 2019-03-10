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
<br>    use Capdigital\NtlmSoapClient\Service\CapdigitalNtlmSoapClient as serviceNtlmSoapClient;
<br>    class maClass
<br>    {
<br>    
<br>    mafonction(serviceNtlmSoapClient $serviceNtlmSoapClient)
<br>        {
<br>        $service = $serviceNtlmSoapClient->connect($wsName, $deleteSociety = true);
<br>        ou
<br>        $service = $serviceNtlmSoapClient->connect($wsName);
<br>        }
<br>    
<br>    }
    
4) Exemple :
<br>    mafonction(serviceNtlmSoapClient $serviceNtlmSoapClient)
<br>        {
<br>        $service = $serviceNtlmSoapClient->connect('SystemService', $deleteSociety = true);
<br>        $result = $client->Companies();
<br>        $companies = $result->return_value;
<br>        echo "Companies:<br>";
<br>        if (is_array($companies)) {
<br>            foreach($companies as $company) {
<br>                echo "$company<br>";
<br>            }
<br>            $cur = $companies[0];
<br>            }
<br>            else {
<br>                echo "$companies<br>";
<br>                $cur = $companies;
<br>                }
<br>        }
