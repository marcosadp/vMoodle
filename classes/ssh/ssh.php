<?php

include('Net/SSH2.php');

$ssh = new Net_SSH2('localhost');
if (!$ssh->login('teamfuos', 'winteriscoming')) {
    exit('Login Failed');
}


echo nl2br($ssh->exec('VBoxManage list vms'));
