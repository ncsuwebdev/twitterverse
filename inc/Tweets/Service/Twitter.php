<?php
class Tweets_Service_Twitter extends Zend_Service_Twitter
{
    public function friends($options = array())
    {
        $this->init();
        $path = 'friends/list';
        $params = array();
        
        foreach ($options as $key => $value) {
            switch (strtolower($key)) {
                case 'cursor':
                    $params['cursor'] = $this->validInteger($value);                
                default:
                    break;
            }
        }

        $response = $this->get($path, $params);
        return new Zend_Service_Twitter_Response($response);  
    }
}