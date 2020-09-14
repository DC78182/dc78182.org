<?php
if (isset($_GET['p'])) {
    $p = $_GET['p'];
    $pp = array('rating', 'oldctf', 'merch', 'partners', 'faq', 'roadmap', 'bugreport', 'orgreport', 'reporthistory', 'reportrequest', 'reportproposal', 'helprequest', 'dc78182', 'ibonline', 'iboffline', 'manuals', 'internet', 'masscult', 'telegramrate');
    if (! in_array($p, $pp)) {
        $p = "404";
    }
} else {
    $p = "dc78182";
}
include "header.php";
include "pages/" . $p . ".php";
include "footer.php";
?>
