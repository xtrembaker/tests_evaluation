<?php

/**
 * mb_strlen return the number of char which are in the string passed in parameter, according to the encoding
 * In this case, we haven't specified the string is UTF8 encoded. How many char would be returned then ?
 */
echo mb_strlen('tête');