let skor_user = 0
let skor_com = 0
function main (pilihan_user) {
    //alert("pilihan_user")

    const komputer = ["batu", "gunting", "kertas"]
    const random = Math.floor(Math.random() * komputer.length)
    let pilihan_komputer = komputer[random]

    document.getElementById("com").innerHTML = pilihan_komputer
    document.getElementById("img_user").src = "img/" + pilihan_user + ".png"
    document.getElementById("img_komputer").src = "img/" + pilihan_komputer + ".png"
    
     
    if (pilihan_user == pilihan_komputer) {
        document.getElementById("hasil").innerHTML = "SERI"
    } else if (
        (pilihan_user == "batu" && pilihan_komputer == "gunting") ||
        (pilihan_user == "gunting" && pilihan_komputer == "kertas") ||
        (pilihan_user == "kertas" && pilihan_komputer == "batu")) 
        {
            skor_user++
        document.getElementById("hasil").innerHTML = "MENANG"
    } else {
        skor_com++
        document.getElementById("hasil").innerHTML = "KALAH"
    }
    
    document.getElementById("skor").innerHTML =
    "User : " + skor_user + " | COM : " + skor_com
}

