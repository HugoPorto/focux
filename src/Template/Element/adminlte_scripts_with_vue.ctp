<?php
if(isset($page)){
    if($page == "profile"){
        echo $this->Html->script(
        [
            '/js/vue2.min.js',
        ]);
    }
}
else
{
    echo $this->Html->script(
    [
        '/js/vue.min.js',
    ]);
}