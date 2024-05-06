<?php
// date(format)

//    Day         -         Moth        -      Year         -    Week 
//    d-(01 to 31)          F-(January)        Y-(2019)          D-(Mon)
//    j-(1 to 31)           M-(Jan)            y-(19)            l-(Monday)
//    S-(st,nd,rd,or th)    m-(01)                               N-(1)
//                          n-(1)                                W-(1)


echo "Today is: " . date("d-F-Y-D") . "<br>";
//Today is: 06-May-2024-Mon

echo "Today is: " . date("dS-F-Y-D");
// Today is: 06th-May-2024-Mon