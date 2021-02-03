<?php

function getImg ($pathToDir) {
    return array_diff(scandir(DOCROOT . 'public' . DIRECTORY_SEPARATOR . $pathToDir), array('..', '.'));
}