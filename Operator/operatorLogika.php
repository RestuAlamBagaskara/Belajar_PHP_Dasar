<?php
    //untuk membandingkan nilai boolean

    // menghasilkan true jika keduanya true
    var_dump(true && false);
    var_dump(true and true);

    // menghasilkan true jika ada salah satu atau keduanya true 
    var_dump(true || false);
    var_dump(false or false);

    // menghasilkan true nilai a false
    var_dump(!true);
    var_dump(!false);

    // menghasilkan true nilai a true jika hanya salah satu true
    var_dump(true xor false);
    var_dump(true xor true)
?>