<?php
namespace Capdigital\CapdigitalNTLMSoapClient;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CapdigitalPlateformeBundle extends Bundle
{
  public function say($toSay = "Nothing given")
    {
        return $toSay;
    }
}
