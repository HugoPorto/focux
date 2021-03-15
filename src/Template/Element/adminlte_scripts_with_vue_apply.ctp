<?php
if(isset($page)){
    if($page == "profile"){
        echo $this->Html->script(
        [
            '/js/profile.js',
        ]);
    }
}
else
{
    echo $this->Html->script(
    [
        '/js/videos.js',
    ]);
    
}