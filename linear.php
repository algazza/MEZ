<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- =================== Icon CSS ===================== -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css"
      crossorigin=""
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      crossorigin=""
    />
    <!-- ==================== Math Font ==================== -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/katex@0.16.10/dist/katex.min.css"
      integrity="sha384-wcIxkf4k558AjM3Yz3BBFQUbk/zgIYC2R0QpeeYb+TwlBVMrlgLqwRjRtGZiK7ww"
      crossorigin="anonymous"
    />
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/katex@0.16.10/dist/katex.min.js"
      integrity="sha384-hIoBPJpTUs74ddyc4bFZSM1TVlQDA60VBbJS0oA934VSz82sBx1X7kSx2ATBDIyd"
      crossorigin="anonymous"
    ></script>
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/katex@0.16.10/dist/contrib/auto-render.min.js"
      integrity="sha384-43gviWU0YVjaDtb/GhzOouOXtZMP/7XUzwPTstBeZFe/+rCMvRwr4yROQP43s0Xk"
      crossorigin="anonymous"
      onload="renderMathInElement(document.body);"
    ></script>
    <!-- ==================== CSS Tailwind Component ===================== -->
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/style.css" />
    <title>Math Equate Zone</title>
  </head>
  <body class="bg-krem grain text-base hitam">
        <!-- =============================== Header ========================== -->
        <header class="fixed w-full z-50">
      <nav
        class="flex items-center justify-between bg-krem border-hitam lg:px-12 px-8 py-4"
      >
        <div
          class="cursor-pointer place-items-center hitam lg:hidden"
          id="nav-menu-icon"
        >
          <i class="ri-menu-2-line"></i>
        </div>

        <div
          class="max-lg:fixed max-lg:top-0 max-lg:-left-full max-lg:bg-krem max-lg:h-full max-lg:w-auto max-lg:border-hitam max-lg:pt-10 max-lg:p-8 max-lg:pr-6 max-lg:flex-col max-lg:justify-between flex lg:gap-12 transition-left duration-500"
          id="nav-menu"
        >
          <div class="hitam flex justify-between max-lg:pb-9 max-lg:gap-x-5">
            <div class="flex gap-x-4">
              <img src="./image/logo MEZ 2.png" alt="MEZ" class="w-6" />
              <span class="lg:hidden font-bold">Math Equate Zone</span>
            </div>

            <div
              class="cursor-pointer place-items-center hitam lg:hidden font-medium"
              id="nav-close"
            >
              <i class="ri-close-line"></i>
            </div>
          </div>

          <ul class="flex flex-col lg:flex-row gap-6">
            <li class="">
              <a href="./home.html" class="flex gap-x-6 nav_link">
                <i class="ri-home-2-line lg:hidden"></i>
                <span class="font-medium">Home</span>
              </a>
            </li>

            <li class="">
              <a href="#about" class="flex gap-x-6 nav_link">
                <i class="ri-question-mark lg:hidden"></i>
                <span class="font-medium">About</span>
              </a>
            </li>

            <li class="grid gap-2 lg:hidden">
              <a href="" class="cursor-pointer flex">
                <i class="ri-book-open-line lg:hidden"></i>
                <span class="font-medium ml-6 lg:ml-0 mr-1">Material</span>
              </a>
              <ul
                class="bg-krem border-hitam-kiri w-52 pl-4 flex flex-col gap-4 z-[1]"
              >
                <li class="">
                  <a
                    href="./linear.php"
                    class="flex items-center gap-x-4 nav_link"
                  >
                    <i
                      class="fa-solid fa-xmark rounded-md p-2 bg-color-1-50"
                    ></i>
                    <span class="font-medium">Persamaan Linear</span>
                  </a>
                </li>
                <li class="">
                  <a
                    href="./eks.php"
                    class="flex items-center gap-x-4 nav_link"
                  >
                    <i
                      class="fa-solid fa-superscript rounded-md p-2 bg-color-2-50"
                    ></i>
                    <span class="font-medium">Eksponen</span>
                  </a>
                </li>
                <li class="">
                  <a
                    href="./log.php"
                    class="flex items-center gap-x-4 nav_link"
                  >
                    <i
                      class="fa-solid fa-subscript rounded-md p-2 bg-color-3-50"
                    ></i>
                    <span class="font-medium">Logaritma</span>
                  </a>
                </li>
              </ul>
            </li>

            <details class="dropdown max-lg:hidden">
              <summary href="#" class="cursor-pointer flex">
                <i class="ri-book-open-line lg:hidden"></i>
                <span class="font-medium ml-6 lg:ml-0 mr-1">Material</span>
                <i class="ri-arrow-down-s-line"></i>
              </summary>
              <ul
                class="bg-krem dropdown-content rounded-xl border-hitam w-52 p-4 flex flex-col gap-4 z-[1]"
              >
                <li class="">
                  <a href="./linear.php" class="flex items-center gap-x-4 nav_link">
                    <i
                      class="fa-solid fa-xmark rounded-md p-2 bg-color-1-50"
                    ></i>
                    <span class="font-medium">Persamaan Linear</span>
                  </a>
                </li>
                <li class="">
                  <a href="./eks.php" class="flex items-center gap-x-4 nav_link">
                    <i
                      class="fa-solid fa-superscript rounded-md p-2 bg-color-2-50"
                    ></i>
                    <span class="font-medium">Eksponen</span>
                  </a>
                </li>
                <li class="">
                  <a href="./log.php" class="flex items-center gap-x-4 nav_link">
                    <i
                      class="fa-solid fa-subscript rounded-md p-2 bg-color-3-50"
                    ></i>
                    <span class="font-medium">Logaritma</span>
                  </a>
                </li>
              </ul>
            </details>

            <li class="">
              <a href="#contact" class="flex gap-x-6 nav_link">
                <i class="ri-chat-4-line lg:hidden"></i>
                <span class="font-medium">Contact</span>
              </a>
            </li>

            <li class="">
              <a class="flex gap-x-6 nav_link" style="margin-bottom: 10%;" href="<?php echo isset($_SESSION['username']) ? 'profile1.php' : 'login.php'; ?>">
                <i class="fas fa-user lg:hidden"></i>
                <span class="font-medium">User</span>
              </a>
            </li>
          </ul>

          <div class="lg:hidden lg:absolute lg:right-6 lg:top-16 lg:bg-krem lg:p-4 lg:border-hitam lg:rounded-xl flex flex-col gap-4 transition-all ease-in-out duration-500" id="card-login">
          <div class="border-hitam flex flex-col items-center p-2 w-full rounded-xl">
              <h3 class="font-medium">WELCOME</h3>
              <?php if (isset($_SESSION['username'])): ?>
                        <?php
                        // Database connection
                        $conn = new mysqli('localhost', 'root', '', 'mathequatezone');
                        $username = $_SESSION['username'];

                        $sql = "SELECT * FROM users WHERE username = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param('s', $username);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $user = $result->fetch_assoc();

                        $stmt->close();
                        $conn->close();
                        ?>
              <h1 class="font-bold"><?php echo htmlspecialchars($user['username']); ?></h1>
              <?php endif ?>
            <img src="./image/signature-removebg-preview.png" alt="" class="w-30 h-20">
          </div>
        </div>
      </div>

      <div class="max-lg:fixed max-lg:top-0 max-lg:-left-full max-lg:bg-krem max-lg:h-full max-lg:w-auto max-lg:border-hitam max-lg:pt-10 max-lg:p-8 max-lg:pr-6 max-lg:flex-col max-lg:justify-between flex lg:gap-12 transition-left duration-500" id="nav-menu">
        <div class="hitam flex justify-between items-center max-lg:pb-9 max-lg:gap-x-5 w-full">
          <span class="lg:hidden font-bold">Math Equate Zone</span>
          <img id="user" src="./image/id-card.png" alt="MEZ" class="logo w-6" style="margin-right: 20%;">

          <div class="user-icon">
                <a href="<?php echo isset($_SESSION['username']) ? 'profile1.php' : 'login.php'; ?>">
                    <i class="fas fa-user"></i>
                </a>
          </div>

        </div>
      </div>
      </nav>
    </header>

    <main class="overflow-hidden mx-4">
      <section class="pt-28 pb-8 border-hitam-bawah">
        <div
          class="container grid justify-center gap-y-8 lg:grid-cols-[300px_minmax(500px,_0fr)] lg:gap-x-14 lg:pt-12 lg:pb-20 ms-6 me-6 lg:ms-auto lg:me-auto"
        >
          <div class="">
            <img src="./image/maskot_mez.png" alt="" />
          </div>

          <div class="flex flex-col justify-center">
            <h1 class="text-2xl lg:text-6xl font-bold">Hi, MEZO Friends</h1>
            <p class="">
              Kalian udah tau belum sih apa itu
              <strong>Persamaan Linear?</strong>
              Kalau belum tau, yuk simak materi berikut
            </p>
          </div>
        </div>
      </section>

      <section class="py-20 border-hitam-bawah">
        <div class="container grid justify-center py-4 px-4 ms-auto me-auto">
          <div class="bg-putih border-hitam rounded-md p-4">
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div
              class="grid lg:grid-cols-[300px_minmax(400px,_0fr)] justify-center"
            >
              <div class="p-4">
                <img src="./image/maskot_mez.png" alt="" />
              </div>
              <div class="grid justify-center">
                <h1 class="text-2xl lg:text-4xl font-bold">Persamaan Linear</h1>
                <div class="">
                  <h3 class="font-bold text-lg">"Apa itu Persamaan Linear?"</h3>
                  <p class="">
                    Nah jadi, Persamaan linear adalah persamaan yang pangkat
                    tertinggi dari variabelnya selalu satu. Persamaan linear
                    juga dikenal sebagai persamaan satu derajat.
                  </p>
                  <p class="">
                    Dalam persamaan linear itu terdapat variabel, koefisien, dan
                    konstanta. Yuk simak lebih lanjut!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-20 border-hitam-bawah">
        <div class="container grid gap-y-8 ms-auto me-auto">
          <h3 class="text-lg text-center text-2xl">
            <strong>MEZO Friends</strong>, berikut adalah penjelasan untuk
            Variabel, Koefisien dan Konstanta.
          </h3>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              \[2x^{2}-11x-7\]
            </h3>
          </div>

          <div class="grid justify-center grid-colm-282px gap-4">
            <div class="bg-color-1 rounded-lg border-hitam p-6">
              <h1 class="font-bold text-2xl">Variabel</h1>
              <p class="">
                Variabel adalah simbol pengganti nilai numerik yang tidak
                diketahui dalam persamaan. Nilai dalam variabel tidak tetap dan
                dapat dirubah.
              </p>
            </div>

            <div class="bg-color-2 rounded-lg border-hitam p-6">
              <h1 class="font-bold text-2xl">Koefisien</h1>
              <p class="">
                Koefisien adalah bilangan yang menyatakan jumlah suatu variabel,
                sehingga diletakan di depan variabel.
              </p>
            </div>

            <div class="bg-color-3 rounded-lg rounded-lg border-hitam p-6">
              <h1 class="font-bold text-2xl">Konstanta</h1>
              <p class="">
                Konstanta sendiri adalah bilangan atau angka yang nilainya
                tetap.
              </p>
            </div>
          </div>

          <h3 class="text-lg text-center text-2xl">
            Sudah taukah kamu apa saja Ciri-ciri dari Persamaan Linear? Mari
            kita simak lebih lanjut!
          </h3>
        </div>
      </section>

      <section class="py-20 border-hitam-bawah">
        <div class="container grid gap-y-8 ms-auto me-auto">
          <div class="flex gap-8 items-center">
            <div
              class="grid rounded-full w-12 h-12 bg-putih border-hitam font-bold place-items-center"
            >
              A
            </div>
            <h1 class="font-bold text-2xl lg:text-4xl">
              Persamaan Linear Satu Variabel
            </h1>
          </div>

          <p class="text-xl lg:text-2xl">
            Persamaan linear satu variabel adalah persamaan linear yang hanya
            memiliki satu variabel saja. Bentuk umum persamaan linear satu
            variabel adalah:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              \[ax + b =0\]
            </h3>
          </div>

          <div class="bg-putih border-hitam rounded-md p-4 me-auto ms-auto">
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div
              class="grid lg:grid-cols-[300px_minmax(400px,_0fr)] justify-center h-[400px] lg:h-[190px]"
            >
              <div class="py-3 max-lg:border-hitam-bawah">
                <h3 class="text-xl lg:text-2xl font-semibold">Contoh Soal:</h3>
                <h1 class="text-3xl">\[3(x+4)=x+2\]</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah Nilai X?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Kita distribusikan angka 3 ke
                  dalam tanda kurung, sehingga mendapatkan 3x + 12 di sisi kiri,
                  karena 3 dikalikan dengan x dan 4. \[3x + 12 = x + 2\]
                  <strong>Langkah 2:</strong> Kemudian, kita gabungkan variabel
                  x ke satu sisi dengan cara mengurangkan x dari kedua sisi
                  persamaan, sehingga kita mendapatkan 3x - x di sisi kiri. Di
                  sisi kanan, kita punya 2 - 12, karena 2 adalah jumlah awal dan
                  12 adalah jumlah yang sudah kita pindah ruas. \[3x - x = 2 -
                  12\] <strong>Langkah 3:</strong> Selanjutnya, kita
                  sederhanakan kedua sisi persamaan. Pada sisi kiri, 3x - x
                  menjadi 2x. Pada sisi kanan, 2 - 12 menjadi -10. \[2x = -10\]
                  <strong>Langkah 4:</strong> Terakhir, kita pisahkan variabel x
                  dengan cara membagi kedua sisi dengan koefisien x. Dalam hal
                  ini, karena koefisien x adalah 2, kita bagi kedua sisi dengan
                  2, sehingga kita mendapatkan \[x = -5.\]
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="py-20 border-hitam-bawah flex flex-col gap-4 items-center"
      >
        <h1 class="text-2xl font-bold text-center">Quizz Timezz</h1>

        <div
          class="container bg-putih border-hitam rounded-xl p-8 w-[90%] max-w-[600px]"
        >
          <h1 class="text-xl font-semibold text-center" id="question-numb1-1">
            1/3
          </h1>
          <div class="py-5">
            <h2 class="text-xl font-semibold" id="question1-1"></h2>

            <div class="hitam text-xl" id="answer1-1"></div>

            <div class="flex items-center">
              <button
                class="font-semibold bg-color-3-50 w-[150px] border-hitam p-3 mx-auto my-2 rounded-sm cursor-pointer hidden"
                id="next-button1-1"
              >
                Lanjut
              </button>
            </div>

            <div class="grid items-center py-2" id="explain-div1-1">
              <h3 class="text-2xl font-bold pb-4">Prof.Mezo Here!</h3>
              <div class="" id="explain1-1"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-20 border-hitam-bawah">
        <div class="container grid gap-y-8 ms-auto me-auto">
          <div class="flex gap-8 items-center">
            <div
              class="grid rounded-full w-12 h-12 bg-putih border-hitam font-bold place-items-center"
            >
              B
            </div>
            <h1 class="font-bold text-2xl lg:text-4xl">
              Persamaan Linear Dua Variabel
            </h1>
          </div>

          <p class="text-xl lg:text-2xl">
            Persamaan linear dua variabel adalah persamaan linear yang memiliki
            dua variabel. Bentuk umum persamaan linear dua variabel adalah:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              \[ax + by + c =0\]
            </h3>
          </div>

          <p class="text-xl lg:text-2xl">
            Di mana x dan y adalah variabel berpangkat 1. Persamaan linear dua
            variabel lebih kompleks daripada persamaan linear dua variabel
            karena harus diselesaikan dengan metode eliminasi, substitusi,
            determinan, dan juga grafik.
          </p>

          <div class="bg-putih border-hitam rounded-md p-4 me-auto ms-auto">
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div
              class="grid lg:grid-cols-[300px_minmax(400px,_0fr)] justify-center h-[580px] lg:h-[300px]"
            >
              <div class="py-3 max-lg:border-hitam-bawah">
                <h3 class="text-xl lg:text-2xl font-semibold">Contoh Soal:</h3>
                <h1 class="text-3xl">\[x-y=2\]</h1>
                <h1 class="text-3xl">\[3x-7y=-2\]</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah Nilai X dan Y?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Kita akan menggunakan metode
                  eliminasi untuk menyingkirkan salah satu variabel dari salah
                  satu persamaan. Dalam hal ini, kita akan menyingkirkan
                  variabel y. Kita dapat melakukan ini dengan mengalikan
                  persamaan pertama dengan 3 $$\begin{bmatrix}x-y=2 \\3x-7y=-2
                  \end{bmatrix}\left(\begin{array}{c}\times3\\
                  \times1\end{array}\right)$$ <strong>Langkah 2:</strong> Kita
                  dapat mengurangkan persamaan pertama dari persamaan kedua,
                  sehingga variabel x akan tereliminasi.
                  $$\frac{\begin{bmatrix}3x-3y
                  =6\\3x-7y=-2\end{bmatrix}}{4y=8}-$$
                  <strong>Langkah 3:</strong> Selanjutnya, kita menyederhanakan
                  kedua sisi persamaan, $$\frac{4y}{4}=\frac{8}{4}$$ dan
                  mendapatkan hasil $$y=2$$ <strong>Langkah 4:</strong> Setelah
                  menemukan nilai y, kita akan mencari nilai x. Mari kita
                  gunakan langkah yang sama dengan mengalikan persamaan pertama
                  dengan 7 $$\begin{bmatrix}x-y=2
                  \\3x-7y=-2\end{bmatrix}\left(\begin{array}{c}\times7\\\times1\end{array}\right)$$
                  <strong>Langkah 5:</strong> Kita dapat mengurangkan persamaan
                  pertama dari persamaan kedua, sehingga variabel y akan
                  tereliminasi. $$\frac{\begin{bmatrix}7x-7y
                  =14\\3x-7y=-2\end{bmatrix}}{4x=16}-$$
                  <strong>Langkah 6:</strong> Selanjutnya, kita menyederhanakan
                  kedua sisi persamaan, $$\frac{4x}{4}=\frac{16}{4}$$ dan
                  mendapatkan hasil $$x=4$$ Sehingga kita mendapatkan jawaban
                  $$\begin{bmatrix}x=4 & y=2 \end{bmatrix}$$
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="py-20 border-hitam-bawah flex flex-col gap-4 items-center"
      >
        <h1 class="text-2xl font-bold text-center">Quizz Timezz</h1>

        <div
          class="container bg-putih border-hitam rounded-xl p-8 w-[90%] max-w-[600px]"
        >
          <h1
            class="text-xl font-semibold text-center"
            id="question-numb1-2"
          ></h1>
          <div class="py-5">
            <h2 class="text-xl font-semibold" id="question1-2"></h2>

            <div class="hitam text-xl" id="answer1-2"></div>

            <div class="flex items-center">
              <button
                class="font-semibold bg-color-3-50 w-[150px] border-hitam p-3 mx-auto my-2 rounded-sm cursor-pointer hidden"
                id="next-button1-2"
              >
                Lanjut
              </button>
            </div>

            <div class="grid items-center py-2" id="explain-div1-2">
              <h3 class="text-2xl font-bold pb-4">Prof.Mezo Here!</h3>
              <div class="" id="explain1-2"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-20 border-hitam-bawah">
        <div class="container grid gap-y-8 ms-auto me-auto">
          <div class="flex gap-8 items-center">
            <div
              class="grid rounded-full w-12 h-12 bg-putih border-hitam font-bold place-items-center"
            >
              C
            </div>
            <h1 class="font-bold text-2xl lg:text-4xl">
              Persamaan Linear Tiga Variabel
            </h1>
          </div>

          <p class="text-xl lg:text-2xl">
            Persamaan linear tiga variabel adalah persamaan linear dengan tiga
            variabel. Bentuk umum persamaan linear tiga variabel adalah:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              \[ax + by + cz =d\]
            </h3>
          </div>

          <p class="text-xl lg:text-2xl">
            Di mana x, y, dan z adalah variabel dengan pangkat satu. Persamaan
            linear tiga variabel memiliki metode penyelesaian yang hampir sama
            dengan persamaan linear dua variabel, namun lebih kompleks.
          </p>

          <div class="bg-putih border-hitam rounded-md p-4 me-auto ms-auto">
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div
              class="grid lg:grid-cols-[300px_minmax(400px,_0fr)] justify-center h-[580px] lg:h-[300px]"
            >
              <div class="py-3 max-lg:border-hitam-bawah">
                <h3 class="text-xl lg:text-2xl font-semibold">Contoh Soal:</h3>
                <h1 class="text-xl">
                  $$\begin{bmatrix}x+y-z=2\\2x+y+z=6\\x+2y+z=5\end{bmatrix}$$
                </h1>
                <h3 class="text-lg lg:text-xl font-semibold">
                  Berapakah Nilai X, Y, dan Z?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Tambahkan persamaan (1) dan (2)
                  untuk menghilangkan z:
                  $$\frac{\begin{bmatrix}x+y-z=2\\2x+y+z=6\end{bmatrix}}{3x+2y=8}+$$
                  <strong>Langkah 2:</strong> Tambahkan persamaan (1) dan (3)
                  untuk menghilangkan z lagi:
                  $$\frac{\begin{bmatrix}x+y-z=2\\x+2y+z=5\end{bmatrix}}{2x+3y=7}+$$
                  <strong>Langkah 3:</strong> Sekarang kita mempunyai 2
                  persamaan baru yang berada di Langkah 1 dan di Langkah 2,
                  sekarang kita eliminasi lagi 2 persamaan baru tersebut untuk
                  mencari nilai y
                  $$\begin{bmatrix}3x+2y=8\\2x+3y=7\end{bmatrix}\left(\begin{array}{c}\times3\\
                  \times2\end{array}\right)$$ Setelah disamakan nilai y, lalu
                  kita eliminasi
                  $$\frac{\begin{bmatrix}9x+6y=24\\4x+6y=14\end{bmatrix}}{5x=10}-$$
                  Kita sederhanakan dan mendapatkan nilai x $$x=\frac{10}{5}$$
                  $$x=2$$ <strong>Langkah 4:</strong> Setelah menemukan nilai y,
                  kita akan mencari nilai x. Mari kita gunakan langkah yang sama
                  dengan mengalikan persamaan pertama dengan 7
                  $$\begin{bmatrix}x-y=2
                  \\3x-7y=-2\end{bmatrix}\left(\begin{array}{c}\times7\\\times1\end{array}\right)$$
                  <strong>Langkah 5:</strong> Kita dapat mengurangkan persamaan
                  pertama dari persamaan kedua, sehingga variabel y akan
                  tereliminasi. $$\frac{\begin{bmatrix}7x-7y
                  =14\\3x-7y=-2\end{bmatrix}}{4x=16}$$
                  <strong>Langkah 6:</strong>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="py-20 border-hitam-bawah flex flex-col gap-y-8 items-center"
      >
        <h1 class="text-2xl font-bold text-center">Quizz Timezz</h1>

        <div
          class="container bg-putih border-hitam rounded-xl p-8 w-[90%] max-w-[600px]"
        >
          <h1
            class="text-xl font-semibold text-center"
            id="question-numb1-3"
          ></h1>
          <div class="py-5">
            <h2 class="text-xl font-semibold" id="question1-3"></h2>

            <div class="hitam text-xl" id="answer1-3"></div>

            <div class="flex items-center">
              <button
                class="font-semibold bg-color-3-50 w-[150px] border-hitam p-3 mx-auto my-2 rounded-sm cursor-pointer hidden"
                id="next-button1-3"
              >
                Lanjut
              </button>
            </div>

            <div class="grid items-center py-2" id="explain-div1-3">
              <h3 class="text-2xl font-bold pb-4">Prof.Mezo Here!</h3>
              <div class="" id="explain1-3"></div>
            </div>
          </div>
        </div>
        <p class="text-xl lg:text-2xl text-center">
          Nah MEZO Friends, yuk asah kemampuan mu dari materi Persamaan Linear pada quiz berikut!
        </p>
        <a
          href="./linear-quiz.html"
          class="bg-hitam krem p-2 rounded-xl flex justify-center mt-4 cursor-pointer"
        >
          Quiz Bab Persamaan Linear
        </a>
      </section>
    </main>

    <!-- ======================== Gsap Lenis =================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>
    <!-- =================== Typed Js =========================== -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- =================== Javascript =================== -->
    <script src="./js/script.js"></script>
    <script src="./js/quiz1-1.js"></script>
    <script src="./js/quiz1-2.js"></script>
    <script src="./js/quiz1-3.js"></script>
  </body>
</html>
