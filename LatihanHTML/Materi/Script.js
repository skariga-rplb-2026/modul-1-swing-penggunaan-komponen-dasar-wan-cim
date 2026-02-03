console.log("Hello Word")
let nama;
function masukanNama() {
    nama = prompt("Masukan nama anda : ")
    document.getElementById("timpa").innerHTML = "Halo " + nama
}
        
document.getElementById("Pertanyaan").onclick = function() {
    let jawab = confirm("Halo " + nama + ", Apakah kamu sudah makan?")
    if (jawab == true) {
        console.log("Yaudah")
        document.getElementById("timpa").innerHTML = "Yaudah"
    }else {
        console.log("Makan dulu gih, nanti sakit, atau mau ku suapin")
        document.getElementById("timpa").innerHTML = "Makan dulu gih, nanti sakit, atau mau ku suapin"
    }
}

document.getElementById("tema").onclick = function() {
    if (tema) {
        document.body.style.backgroundColor = "white"
        document.body.style.color = "black"
    }else {
        document.body.style.backgroundColor = "black"
        document.body.stylr.color = "white"
    }
}