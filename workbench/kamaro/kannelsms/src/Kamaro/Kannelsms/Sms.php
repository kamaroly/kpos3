<?php namespace Kamaro\Kannelsms;
	
/**
 * KANNEL SMS
 * 
 * A free and open source php Composer package to sent SMS using Kannel 
 *
 * @package		kannelSMS
 * @author		Kamaro Lambert
 * @copyright	Copyright (c) 2014  Kamaro Lambert
 * @license		MIT
 * @link		github.com/kamaroly
 * 
 */
	class Sms {
		
		# GLOBAL VARS
		var $host     = CONFIG_KANNEL_HOST;
		var $port     = CONFIG_KANNEL_PORT;
		var $path     = CONFIG_KANNEL_PATH;
		var $username = CONFIG_KANNEL_USER_NAME;
		var $password = CONFIG_KANNEL_PASSWORD;
		var $dlr_url  = CONFIG_KANNEL_DLR_URL;
		var $dlr_mask = CONFIG_KANNEL_DLR_MASK;
		
		# SMS VARS 
		var $id;
		var $from;
		var $to;
		var $text;		
		
		# OTHER VARS
		var $urlHeaders;
		var $response;
		var $codeno;
		var $codemsg;
    

    /**
     * build SMS
     *
     * @param $from    :Sender MSISDN (sender phone number)
     * @param $to      :Receiver MSISDN (receiver phone number)
     * @param $id      :Unique ID for the SMS
     */
	public function build( $from, $to, $text, $id = false){

			$this->from = $from;
			$this->to = $to;
			$this->text = $text;
			$this->id = $id;
			
		}

    /**
     * parseResponse
     *
     * @param $string    :response string
     * @param $parseChar :Parse Character
     * @param $id        :Unique ID for the SMS
     * @return string  in form of to=250726022032&from=7410&text=I+nomero+yawe+ni+0726022032.+Ton+numero+est+0726022032.+Your+number
     *                               +is+0726022032
     */
		function parseResponse( $string){ 
			$array = array( );
			$array = split( ":", $string);			
			return $array;
			
		}
   /**
     * parseResponse
     *
     * @param $url    :response string
     * @param $parseChar :Parse Character
     * @param $id        :Unique ID for the SMS
     */
		function openUrl( $url) {
			$curl = curl_init( );
				
			curl_setopt( $curl, CURLOPT_URL, $url);
			curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1);
			
			$headers = curl_getinfo( $curl);
			$headers['errno'] = curl_errno( $curl);
			$headers['errmsg'] = curl_error( $curl);

			$this->urlHeaders = $headers;
			$result = curl_exec( $curl);
			
			curl_close( $curl);

			return $result;
			
		}

		function send( ) {
			$a = array( );
		
			$path = $this->path . '?username=' . $this->username
				. '&password=' . $this->password
				. '&to=' . urlencode($this->to)
				. '&from=' . urlencode($this->from)
				. '&text=' . urlencode( $this->text)
				. '&dlr-url=' . urlencode( $this->dlr_url) . $this->id
				. '&dlr-mask=' . $this->dlr_mask;

			$serverurl = 'http://' . $this->host . ':' . $this->port . $path;
			error_log("URL: " . $serverurl . "\n", 3, "/home/LOGS_DMS/receiver.log"); //Log path modified by kamaro (it used to be /opt/dms/kannel/web/receiver.log)to avoid the disk space issue
			$this->response = $this->openUrl( $serverurl);
			
			$a = $this->parseResponse( $this->response);
			
			$this->codeno = trim( $a[0]);
			$this->codemsg = @trim( $a[1]);
			
			if( $this->codeno == "0"){
				return true;
			} else {
				return false;
				
			}
		}

		public function test($value='')
		{
			return 'Ino ni test nyine !';
		}
	}

