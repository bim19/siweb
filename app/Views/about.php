<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <!-- <link rel="stylesheet" href="style.css"/> -->
    <style>
        body {
    background-color: bisque;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    width: 300px;
    height: max-content;
    border-radius: 10px;
    background-color: white;
    /* overflow: hidden; */
    margin-top : 30px;
    position: relative;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.card-action {
    position: absolute;
    top: -10px;
    right: -10px;
    padding: 10px;
    background-color: white;
    border-radius: 50%;
    height: 30px;
    width: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.card-header {
    background-color: brown;
    /* background-image: url(wallhaven-y89zqk.png); */
    background-size: cover;
    object-fit: cover;
    width: 100%;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: flex-end;
}

.card-img {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    border: 5px solid #fff;
    transform: translateY(50%);
}

.card-content {
    padding: 30px;
    margin-top: 30px;
}

.card-title {
    font-size: 20px;
    text-align: center;
    color: brown;
    font-weight: bold;
}

.card-text {
    text-align: center;
    color: black;
}

.card-social {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin-top: 30px;
}

.social-icon {
    width: 20px;
    height: 20px;
    color: #000000;
}

.button:hover {
    background-color : brown;
    display : flex;
    align-items: center;
    justify-content: center;
    color : white;
    border-radius: 10px;
    border : 3px solid black;
    transition : .5s ease-in-out;
    transition-delay : .1s;
}

    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <img src="https://th.bing.com/th/id/OIP.uZQdLXEgBEvR2OkcVVbBMQHaFj?pid=ImgDet&rs=1" alt="" class="card-img">
            <div class="card-action">+</div>
        </div>
        <div class="card-content">
            <h1 class="card-title">Biodata Gusti Abimanyu</h1>
            <p class="card-text">NPM : 211711532<br>Program Studi : Sistem Informasi<br>Alamat : Maguwoharjo<br>Nomor Telpon : 081234567890<br>Jenis Kelamin : Man</p>
            <div class="card-social">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6" class="social-icon">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                  </svg>
                
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6" class="social-icon">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  
                  
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6" class="social-icon">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M9 13.5l3 3m0 0l3-3m-3 3v-6m1.06-4.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                  </svg>

                  <a href="https://www.instagram.com/bims.19/" target=”_blank”><button class="button">Instagram</button></a>
            </div>

            <p class="card-text">Terima kasih telah membaca</p>
            
        </div>
    </div>
</body>
</html>