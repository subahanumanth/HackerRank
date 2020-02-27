<?php

function timeConversion($s) {
    return DATE("H:i:s", STRTOTIME($s));
}
