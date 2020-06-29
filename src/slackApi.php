<?php

namespace GustavoSantarosa\slackApi;

	/**
    * 
    * Api para se comunicar com o Slack
    * Website: 
    * 
	* @package GustavoSantarosa/Slack
	* @author Luis Gustavo Santarosa Pinto
    * @version 1.0.0
    * 
	* 
	*/

class slackApi {

    private $apiUrl;
    private $apiKey;
    private $endPoint;
    private $build;
    private $callback;

    /**
     * Key do slack
     *
     * @param [type] $apiKey
     */
    public function __construct($apiKey){

        /**
         * Url da Api
         */
        $this->apiUrl = "https://slack.com/api";

        /**
         * Chave da Api
         */
        $this->apiKey = $apiKey;
    }

/**
 * Enviar mensagem, basta digitar o canal e a mensagem em seguida.
 * lembrando que precisa ter a key no construtor como parametro
 *
 * @param string $canal
 * @param string $mensagem
 * @return void
 */
    public function enviarMsg(string $canal, string $mensagem=null){

        if($mensagem == ""){
            $this->build = [
                "Erro"  => "Mensagem não enviada! Ela esta vazia."
            ];
            return $this;
        }

        $this->endPoint = "/chat.postMessage";
        
        $this->build = [
            "token" => $this->apiKey,
            "channel" => "#".$canal,
            "text"  => $mensagem
        ];
        var_dump( $this->build);
        $this->post();
        return $this->build;
    }

     /**
      * Função para apresentar o retorno da Api caso tenha
      *
      * @return void
      */
    public function callback(){
        return $this->callback;
    }

    /**
     * Função utilizada para efetuar a requisição via Post com a api
     *
     * @return void
     */
    private function post(){

        $header[] = "Content-type: application/json";
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->build);
       
        $server_output = curl_exec($ch);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
         
        $this->callback = json_decode(substr($server_output, $header_size));
        curl_close($ch);
    }

}