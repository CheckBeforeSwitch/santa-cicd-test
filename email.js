function getEmail() {
    const d = "sakaki-santaclaus.jp";
    const n = "info";
    return n + String.fromCharCode(64) + d;
}

function showEmail() {
    // 出力エリアを取得
    const elems = document.querySelectorAll(".email_area");
    // a要素生成
    const a = document.createElement("a");
    a.href = "mailto" + String.fromCharCode(58) + getEmail();
    const text = document.createTextNode(getEmail());
    a.appendChild(text);
    // a要素挿入
    for (let i = 0; i < elems.length; i++) {
        elems[i].appendChild(a);
    }
}

window.addEventListener("load", showEmail);