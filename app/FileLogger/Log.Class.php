<?php

/**
 * Log short summary.
 *
 * @desc Write to a file
 * @param string $FileName The name of the file
 * @param string $Message  The text to be appended to the file.
 * 
 * @version 1.0
 * @author Fares Younis
 */
class Log
{
    private $File;
    public function __Log($FileName)
    {
        if (!is_writeable($FileName)){
        die ('Chnage your CHMOD permissions of '. $FileName);
        echo "Error";
        }
        $File = $FileName;
    }
    public  function Write($Message)
    {
    $Handle =  fopen($File,'a+');
    fwrite($Handle,$Message);
    fclose($Handle);
    echo "Done!";
    }
}