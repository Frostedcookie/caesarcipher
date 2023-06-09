
<?php
   function caesarcipher($input, $shift){
        $output = "";
        for ($i = 0 ; $i < strlen($input); $i++) {
            $ch = $input[$i];
            if (ctype_alpha($ch)) {
                $base = ctype_upper($ch) ? 'A' : 'a';
                $ch = chr(((ord($ch) - ord($base) + $shift) % 26 + 26) % 26 + ord($base));
                if ($ch == 'a') {
                    $ch = 'z';
                } else if ($ch == 'z') {
                    $ch = 'a';
                }
            }
            $output .= $ch;
        }
        return $output;
    }

    function encrypt($input, $shift){
        return caesarcipher($input, 26 - $shift);
    }

   $plaintext="helloworld";
   $key=3;
   $ciphertext=encrypt($plaintext,$key);
   echo 'Ciphertext is: ' . $ciphertext;
?>