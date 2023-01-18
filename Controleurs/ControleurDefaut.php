<?php

final class ControleurDefaut
{
    public function defautAction()
    {
        Vue::montrer('helloworld/voir', array('rec' => 'yo'));

    }

}