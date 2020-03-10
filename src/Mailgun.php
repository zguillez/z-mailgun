<?php

namespace Z;
class Mailgun
{
  private $date;
  private $ip;
  private $client;
  private $domain;

  //----------------------------------------------------------
  public function __construct($domain, $apikey)
  {
    $this->date = date("Y-m-d H:i:s");
    $this->ip = ($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 0;
    $this->client = new Mailgun\Mailgun($apikey);
    $this->domain = $domain;
  }

  //----------------------------------------------------------
  public function test($data)
  {
    var_dump([$this->date, $this->ip, $data]);
  }

  //----------------------------------------------------------
  public function send($from, $to, $subject, $text)
  {
    return $this->client->sendMessage($this->domain, [
        'from' => $from,
        'to' => $to,
        'subject' => $subject,
        'text' => $text
    ]);
  }
}