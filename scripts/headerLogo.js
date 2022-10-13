export function header() {
    let $header = document.createElement("header");
    $header.classList.add("header");

    $header.innerHTML = `<div class="header-logo"><a href="index.php"><img src="../../assets/logo.svg" alt=""></a></div>`;

return $header;

}