<?php
if (isset($_GET['p'])) {
    $p = $_GET['p'];
    $pp = array('rating', 'oldctf', 'merch', 'partners', 'faq', 'roadmap', 'bugreport', 'orgreport', 'reporthistory', 'reportrequest', 'reportproposal', 'helprequest', 'dc78182', 'ibonline', 'iboffline', 'manuals', 'internet', 'masscult', 'telegramrate');
    if (! in_array($p, $pp)) {
        #echo "404";
        $p = "404";
    }
} else {
    $p = "dc78182";
}
?>

<?php include "header.php" ?>

<?php
include "pages/" . $p . ".php";
?>

<?php include "footer.php" ?>