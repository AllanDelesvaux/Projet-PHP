<?php

final class ControleurPageDeConnexion
{
    public function defautAction()
    {
        $O_helloworld =  new Helloworld();
        Vue::montrer('helloworld/voir', array('helloworld' =>  $O_helloworld->donneMessage()));

    }
}