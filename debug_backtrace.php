<?php
function a($txt) {
    b("Glenn");
}
function b($txt) {
    c("Cleveland");
}
function c($txt) {
    var_dump(debug_backtrace());
}
a("Peter");
"<br>";
?>

<?php
function m($txt) {
    e("Glenn");
}
function e($txt) {
    f("Cleveland");
}
function f($txt) {
    debug_print_backtrace();
}
m("Peter");
?>