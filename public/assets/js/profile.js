var ctx = document.getElementById("singelBarChart").getContext("2d");
var myChart = new Chart(ctx, {
    type: "bar",
    data: {
        labels: [
            "Buruh Harian",
            "Petani",
            "Tidak Bekerja",
            "Pelajar",
            "Wiraswasta",
            "Karyawan Swasta",
            "Lainnya",
        ],
        datasets: [
            {
                label: "Pekerjaan Warga",
                data: [54, 197, 87, 56, 50, 52, 34],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.7)", // Merah
                    "rgba(54, 162, 235, 0.7)", // Biru
                    "rgba(255, 206, 86, 0.7)", // Kuning
                    "rgba(75, 192, 192, 0.7)", // Hijau
                    "rgba(153, 102, 255, 0.7)", // Ungu
                    "rgba(255, 159, 64, 0.7)", // Oranye
                    "rgba(201, 203, 207, 0.7)", // Abu-abu
                ],
                borderColor: [
                    "rgba(255, 99, 132, 1)",
                    "rgba(54, 162, 235, 1)",
                    "rgba(255, 206, 86, 1)",
                    "rgba(75, 192, 192, 1)",
                    "rgba(153, 102, 255, 1)",
                    "rgba(255, 159, 64, 1)",
                    "rgba(201, 203, 207, 1)",
                ],
                borderWidth: 1,
            },
        ],
    },
    options: {
        legend: {
            display: false,
        },
        scales: {
            yAxes: [
                {
                    ticks: {
                        beginAtZero: true,
                    },
                },
            ],
        },
    },
});

var dgc = document.getElementById("doughnutChart").getContext("2d");
dgc.height = 150;
var myChart = new Chart(dgc, {
    type: "doughnut",
    data: {
        datasets: [
            {
                data: [83, 372, 75],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.7)", // Merah
                    "rgba(255, 206, 86, 0.7)", // Kuning
                    "rgba(75, 192, 192, 0.7)", // Hijau
                ],
                hoverBackgroundColor: [
                    "rgba(255, 99, 132, 0.3)", // Merah
                    "rgba(255, 206, 86, 0.3)", // Kuning
                    "rgba(75, 192, 192, 0.3)", // Hijau
                ],
            },
        ],
        labels: ["Usia Anak - Anak", "Usia Produktif", "Usia Lansia"],
    },
    options: {
        responsive: true,
    },
});

var pc = document.getElementById("pieChart");
pc.height = 150;
var myChart = new Chart(pc, {
    type: "pie",
    data: {
        datasets: [
            {
                data: [128, 195, 93, 114],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.5)", // Merah
                    "rgba(54, 162, 235, 0.5)", // Biru
                    "rgba(255, 206, 86, 0.5)", // Kuning
                    "rgba(75, 192, 192, 0.5)", // Hijau
                ],
                hoverBackgroundColor: [
                    "rgba(255, 99, 132, 0.7)",
                    "rgba(54, 162, 235, 0.7)",
                    "rgba(255, 206, 86, 0.7)",
                    "rgba(75, 192, 192, 0.7)",
                ],
            },
        ],
        labels: ["RT 23", "RT 24", "RT 25", "RT 26"],
    },
    options: {
        responsive: true,
    },
});

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides((slideIndex += n));
}

function currentSlide(n) {
    showSlides((slideIndex = n));
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

let slideIndexDua = 1;
showSlidesDua(slideIndexDua);

function plusSlidesDua(n) {
    showSlidesDua((slideIndexDua += n));
}

function currentSlideDua(n) {
    showSlidesDua((slideIndexDua = n));
}

function showSlidesDua(n) {
    let i;
    let slides = document.getElementsByClassName("mySlidesDua");
    let dots = document.getElementsByClassName("dotDua");
    if (n > slides.length) {
        slideIndexDua = 1;
    }
    if (n < 1) {
        slideIndexDua = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndexDua - 1].style.display = "block";
    dots[slideIndexDua - 1].className += " active";
}

let slideIndexTiga = 1;
showSlidesTiga(slideIndexTiga);

function plusSlidesTiga(n) {
    showSlidesTiga((slideIndexTiga += n));
}

function currentSlideTiga(n) {
    showSlidesTiga((slideIndexTiga = n));
}

function showSlidesTiga(n) {
    let i;
    let slides = document.getElementsByClassName("mySlidesTiga");
    let dots = document.getElementsByClassName("dotTiga");
    if (n > slides.length) {
        slideIndexTiga = 1;
    }
    if (n < 1) {
        slideIndexTiga = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndexTiga - 1].style.display = "block";
    dots[slideIndexTiga - 1].className += " active";
}

let slideIndexEmpat = 1;
showSlidesEmpat(slideIndexEmpat);

function plusSlidesEmpat(n) {
    showSlidesEmpat((slideIndexEmpat += n));
}

function currentSlideEmpat(n) {
    showSlidesEmpat((slideIndexEmpat = n));
}

function showSlidesEmpat(n) {
    let i;
    let slides = document.getElementsByClassName("mySlidesEmpat");
    let dots = document.getElementsByClassName("dotEmpat");
    if (n > slides.length) {
        slideIndexEmpat = 1;
    }
    if (n < 1) {
        slideIndexEmpat = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndexEmpat - 1].style.display = "block";
    dots[slideIndexEmpat - 1].className += " active";
}
