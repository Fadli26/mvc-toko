const barang = document.querySelectorAll('#barang');
const harga = document.querySelector('.harga');


barang.forEach(function (el) {


    el.addEventListener('click', function (e) {



        if (e.target.className == "jumlah") {
            let harga = e.target.parentElement.nextElementSibling.innerText;
            let jumlah = e.target.value;

            e.target.parentElement.nextElementSibling.nextElementSibling.innerHTML = harga * jumlah;
        }
    })
})