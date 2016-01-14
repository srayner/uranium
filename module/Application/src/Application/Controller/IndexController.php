<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Zend\Http\Client;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function gitAction()
    {
        // Set the configuration parameters
        $config = array(
            'adapter'    => 'Zend\Http\Client\Adapter\Curl',
            'proxy_host' => '172.16.20.2',
            'proxy_port' => 8080,
            'curloptions' => array(
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
            ),
        );
        $client = new Client('https://api.github.com/users/srayner', $config);
        $response = $client->send();
        
        echo $response->getStatusCode();
        echo '<br>';
        echo $response->getBody();
        die;
    }
}
