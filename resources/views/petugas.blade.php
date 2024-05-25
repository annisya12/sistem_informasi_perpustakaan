<html>

<head>
    <meta charset="utf-8" />
    <title>Login Petugas</title>
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend Deca:wght@400&display=swap" />

    <style>
        body {
            margin: 0;
            line-height: normal;
        }

        :root {
            /* fonts */
            --font-lexend-deca: "Lexend Deca";

            /* font sizes */
            --font-size-6xl: 25px;
            --font-size-xl: 20px;

            /* Colors */
            --color-plum: #ae95d0;
            --color-white: #fff;
            --color-darkgray-100: #b2b2b2;
            --color-black: #000;

            /* Paddings */
            --padding-8xl: 27px;
            --padding-3xl: 22px;

            /* Border radiuses */
            --br-11xl: 30px;
            --br-xl: 20px;
        }

        .petugas-container-child {
            align-self: stretch;
            width: 1315px;
            position: relative;
            border-radius: var(--br-11xl);
            background-color: var(--color-plum);
            display: none;
            max-width: 100%;
        }

        .frame-child {
            width: 100%;
            height: 100%;
            position: absolute;
            margin: 0 !important;
            top: 889px;
            right: -566px;
            bottom: -889px;
            left: 566px;
            border-radius: var(--br-11xl);
            background-color: var(--color-white);
            transform: rotate(180deg);
            transform-origin: 0 0;
            z-index: 1;
        }

        .meteor-icon-child {
            width: 505px;
            height: 152px;
            position: relative;
            border-radius: var(--br-xl);
            background-color: var(--color-plum);
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
            display: none;
            max-width: 100%;
            z-index: 0;
        }

        .pngtreemeteor-5647150-2-icon {
            width: 100%;
            height: 150px;
            position: absolute;
            margin: 0 !important;
            top: 0;
            right: 0;
            left: 0;
            max-width: 100%;
            overflow: hidden;
            flex-shrink: 0;
            object-fit: cover;
            z-index: 3;
        }

        .masukkan-id-petugas,
        .selamat-bekerja-di {
            position: relative;
            line-height: 120%;
            z-index: 4;
        }

        .selamat-bekerja-di {
            align-self: stretch;
        }

        .masukkan-id-petugas {
            width: 338px;
            display: inline-block;
        }

        .login-label {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: flex-start;
            padding: 0 40px 0 39px;
            font-size: var(--font-size-6xl);
        }

        .id-petugas,
        .meteor-icon {
            position: relative;
            z-index: 2;
        }

        .meteor-icon {
            align-self: stretch;
            border-radius: var(--br-xl);
            background-color: var(--color-plum);
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            padding: 29px 43px 35px 45px;
            box-sizing: border-box;
            gap: 22px;
            max-width: 100%;
        }

        .id-petugas {
            flex: 1;
            line-height: 120%;
        }

        .id-petugas-wrapper {
            width: 139px;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: flex-start;
            padding: 0 1px;
            box-sizing: border-box;
        }

        .enter-i-d-message-child {
            height: 70px;
            width: 505px;
            position: relative;
            border-radius: var(--br-11xl);
            background-color: var(--color-white);
            border: 1px solid var(--color-darkgray-100);
            box-sizing: border-box;
            display: none;
            max-width: 100%;
        }

        .masukkan-id-anda {
            width: 232px;
            border: 0;
            outline: 0;
            font-family: var(--font-lexend-deca);
            font-size: var(--font-size-6xl);
            background-color: transparent;
            height: 30px;
            position: relative;
            line-height: 120%;
            color: rgba(178, 178, 178, 0.51);
            text-align: center;
            display: inline-block;
            padding: 0;
            z-index: 3;
        }

        .enter-i-d-message,
        .i-d-input-container {
            align-self: stretch;
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            max-width: 100%;
        }

        .enter-i-d-message {
            border-radius: var(--br-11xl);
            background-color: var(--color-white);
            border: 1px solid var(--color-darkgray-100);
            box-sizing: border-box;
            flex-direction: row;
            padding: 20px var(--padding-3xl);
            z-index: 2;
        }

        .i-d-input-container {
            flex-direction: column;
            gap: 16px;
        }

        .login-button-child {
            position: absolute;
            top: 0;
            left: 0;
            background-color: #0271f4;
            width: 100%;
            height: 100%;
            cursor: pointer;
            z-index: 2;
        }

        .masuk {
            position: absolute;
            top: 12px;
            left: 204px;
            font-size: var(--font-size-6xl);
            line-height: 120%;
            font-family: var(--font-lexend-deca);
            color: var(--color-white);
            text-align: center;
            display: inline-block;
            min-width: 79px;
            z-index: 3;
        }

        .login-button {
            cursor: pointer;
            border: 0;
            padding: 0;
            background-color: transparent;
            width: 487px;
            height: 54px;
            position: relative;
            max-width: 100%;
        }

        .i-d-input-container-parent,
        .rectangle-parent {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            max-width: 100%;
        }

        .i-d-input-container-parent {
            align-self: stretch;
            gap: 32px;
            font-size: var(--font-size-6xl);
            color: var(--color-darkgray-100);
        }

        .rectangle-parent {
            width: 566px;
            padding: 81px 28px 391px 33px;
            box-sizing: border-box;
            position: relative;
            gap: 63px;
            min-width: 566px;
        }

        .gambar-daftar-hadir-1 {
            align-self: stretch;
            height: 437px;
            position: relative;
            max-width: 100%;
            overflow: hidden;
            flex-shrink: 0;
            object-fit: cover;
            z-index: 1;
        }

        .gambar-daftar-hadir-1-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            padding: 194px 0 0;
            box-sizing: border-box;
            min-width: 430px;
            max-width: 100%;
        }

        .login-petugas,
        .petugas-container {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .petugas-container {
            width: 1315px;
            border-radius: var(--br-11xl);
            background-color: var(--color-plum);
            gap: 87px;
            max-width: 100%;
            text-align: center;
            font-size: 30px;
            color: var(--color-black);
            font-family: var(--font-lexend-deca);
        }

        .login-petugas {
            width: 100%;
            position: relative;
            background-color: #0c014f;
            overflow: hidden;
            padding: 68px 55px 67px;
            box-sizing: border-box;
            letter-spacing: normal;
        }

        @media screen and (max-width: 1125px) {
            .rectangle-parent {
                flex: 1;
            }

            .petugas-container {
                flex-wrap: wrap;
            }
        }

        @media screen and (max-width: 1050px) {
            .selamat-bekerja-di {
                font-size: 24px;
                line-height: 29px;
            }

            .rectangle-parent {
                padding-top: 53px;
                padding-bottom: 254px;
                box-sizing: border-box;
            }
        }

        @media screen and (max-width: 750px) {
            .meteor-icon {
                padding-left: var(--padding-3xl);
                padding-right: 21px;
                box-sizing: border-box;
            }

            .i-d-input-container-parent {
                gap: 16px 32px;
            }

            .rectangle-parent {
                gap: 31px 63px;
                min-width: 100%;
            }

            .gambar-daftar-hadir-1-wrapper {
                padding-top: 126px;
                box-sizing: border-box;
                min-width: 100%;
            }

            .petugas-container {
                gap: 87px 43px;
            }

            .login-petugas {
                padding-left: var(--padding-8xl);
                padding-right: var(--padding-8xl);
                box-sizing: border-box;
            }
        }

        @media screen and (max-width: 450px) {
            .selamat-bekerja-di {
                font-size: 18px;
                line-height: 22px;
            }

            .id-petugas,
            .masuk,
            .masukkan-id-anda,
            .masukkan-id-petugas {
                font-size: var(--font-size-xl);
                line-height: 24px;
            }

            .rectangle-parent {
                gap: 16px 63px;
                padding-top: 34px;
                padding-bottom: 165px;
                box-sizing: border-box;
            }

            .petugas-container {
                gap: 87px 22px;
            }
        }
    </style>
</head>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend Deca:wght@400&display=swap" />
</head>

<body>
    <div class="login-petugas">
        <main class="petugas-container">
            <div class="petugas-container-child"></div>
            <div class="rectangle-parent">
                <div class="frame-child"></div>
                <div class="meteor-icon">
                    <div class="meteor-icon-child"></div>
                    <img class="pngtreemeteor-5647150-2-icon" loading="lazy" alt="" src="assets/img/logpetugas.png" />

                    <div class="selamat-bekerja-di">Selamat Bekerja di SIPerpus</div>
                    <div class="login-label">
                        <div class="masukkan-id-petugas">masukkan ID petugas anda</div>
                    </div>
                </div>
                <div class="i-d-input-container-parent">
                    <div class="i-d-input-container">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf <!-- Tambahkan ini jika Anda menggunakan Laravel untuk melindungi formulir dari serangan CSRF -->
                            <div class="id-petugas-wrapper">
                                <div class="id-petugas">ID petugas</div>
                            </div>
                            <div class="enter-i-d-message">
                                <div class="enter-i-d-message-child"></div>
                                <input class="masukkan-id-anda" placeholder="Masukkan ID Anda" type="text" name="Id_Petugas" />
                            </div>
                            <button type="submit" class="login-button">
                                <div class="login-button-child" id="rectangle"></div>
                                <div class="masuk">Masuk</div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="gambar-daftar-hadir-1-wrapper">
                <img class="gambar-daftar-hadir-1" loading="lazy" alt="" src="assets/img/loginpetugas.png" />
            </div>
        </main>
    </div>
</body>

</html>