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
use ZendService\Twitter\Twitter;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function gitAction()
    {
        // Set the configuration parameters
        $config = $this->getServiceLocator()->get('config')['http_client_config'];
        $gitAccountName = $this->getServiceLocator()->get('config')['git_account_name'];
        $client = new Client('https://api.github.com/users/' . $gitAccountName, $config);
        $response = $client->send();
        
        $git = json_decode($response->getBody());
        echo $git->login . '<br>';
        echo '<img height="64" src="' . $git->avatar_url . '">';
        die;
    }
    
    public function eventsAction()
    {
        // Set the configuration parameters
        $config = $this->getServiceLocator()->get('config')['http_client_config'];
        $githubAccountName = $this->getServiceLocator()->get('config')['github_account_name'];
        $githubFullName = $this->getServiceLocator()->get('config')['github_full_name'];
        
        $client = new Client('https://api.github.com/users/' . $githubAccountName . '/events/public', $config);
        $response = $client->send();
        
        $git = json_decode($response->getBody());
        foreach($git as $event) {
            if ($event->type == 'PushEvent') {
                $url = "https://github.com/" . $event->repo->name;
                $tweet = $githubFullName . ' pushed code to ' . $url;
                //$this->tweet($tweet);
            }
        }
        $this->tweet($tweet);
        echo $tweet . '<br>';
        die;
    }
    
    public function tweetAction()
    {
        $tweet = 'Working on my Uranium application.';
        $this->tweet($tweet);
        echo $tweet . '<br>';
        die;
    }
    
    private function tweet($tweet)
    {
        $config = $this->getServiceLocator()->get('config')['twitter'];
        $twitter = new Twitter($config);
        $twitter->statuses->update($tweet);
    }
}
