function dontPress() {
    const title = document.getElementById("title");
    title.innerHTML = "Hell-o Hellboy";

    const div = document.createElement('p');
    const text = document.createTextNode("See you around ~");

    div.appendChild(text);

    const print = document.getElementById('body');
    print.appendChild(div);


}