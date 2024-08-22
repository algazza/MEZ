<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>


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
      <section class="pt-28 pb-8 border-hitam-bawah" id="materi">
        <div
          class="container grid justify-center gap-y-8 lg:grid-cols-[300px_minmax(500px,_0fr)] lg:gap-x-14 lg:pt-12 lg:pb-20 ms-6 me-6 lg:ms-auto lg:me-auto"
        >
          <div class="">
            <img src="./image/maskot_mez.png" alt="" />
          </div>

          <div class="flex flex-col justify-center">
            <h1 class="text-2xl lg:text-6xl font-bold">Hi, MEZO Friends</h1>
            <p class="">
              Setelah memahami materi persamaan linear, yuk kita simak materi
              selanjutnya yaitu <strong>eksponen</strong>.
            </p>
          </div>
        </div>
      </section>

      <section class="py-20 border-hitam-bawah">
        <div
          class="container grid gap-8 justify-center py-4 px-4 ms-auto me-auto"
        >
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
                <h1 class="text-2xl lg:text-4xl font-bold">Eksponen</h1>
                <div class="">
                  <h3 class="font-bold text-lg">"Apa itu Eksponen?"</h3>
                  <p class="">
                    Eksponen adalah konsep dalam matematika yang digunakan untuk
                    menunjukkan berapa kali suatu angka (basis) dikalikan dengan
                    dirinya sendiri. Notasi eksponen ditulis sebagai $$a^{n}$$
                    di mana a adalah basis dan n adalah eksponen atau pangkat.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <p class="">
            Nah, <strong>MEZO Friends</strong>, mari kita lihat contoh dasar
            eksponen
          </p>
          <div
            class="bg-putih border-hitam rounded-xl grid grid-colm-282px p-4 gap-4"
          >
            <div class="bg-color-1 border-hitam rounded-xl">
              $$\bf 5^{2}=5\times5$$
            </div>
            <div class="bg-color-2 border-hitam rounded-xl">
              $$\bf 2^{3}=2\times2\times2$$
            </div>
            <div class="bg-color-3 border-hitam rounded-xl">
              $$\bf 4^{2}=4\times4$$
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
              A
            </div>
            <h1 class="font-bold text-2xl lg:text-4xl">
              Perkalian, Pembagian, Pangkat dari Pangkat Eksponen
            </h1>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">
            1. Sifat Perkalian (Product Rule)
          </h3>
          <p class="text-xl lg:text-2xl">
            Jika bilangan berpangkat dipangkatkan lagi, maka pangkatnya harus
            dikali. Contohnya:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$a^{m}\times a^{n}=a^{m+n}$$
            </h3>
          </div>

          <div class="bg-putih border-hitam rounded-md p-4 me-auto ms-auto">
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div
              class="grid lg:grid-cols-[300px_minmax(400px,_0fr)] justify-center h-[400px] lg:h-[220px]"
            >
              <div class="py-3 max-lg:border-hitam-bawah">
                <h3 class="text-xl lg:text-2xl font-semibold">Contoh Soal:</h3>
                <h1 class="text-3xl">$$3^{2}\times3^{3}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil pemangkatan diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Ketika kita mengalikan dua
                  bilangan berpangkat dengan basis yang sama, kita dapat
                  menjumlahkan pangkatnya. Aturan ini dinyatakan sebagai:
                  $$a^{m}\times a^{n}=a^{m+n}$$
                  <strong>Langkah 2:</strong> Gunakan Aturan Perkalian Bilangan
                  Berpangkat dan kita terapkan aturan tersebut:
                  $$3^{2}\times3^{3}=3^{2+3}$$ <strong>Langkah 3:</strong> Lalu
                  kita akan gunakan hasil tersebut untuk mencari hasil eksponen
                  tersebut $$3^{2+3}=3^{5}$$ Hitung hasil eksponen tersebut
                  $$3^{5}=3\times3\times3\times3\times3=243$$ maka hasil
                  eksponen $$3^{2}\times3^{3}$$ adalah 243
                </p>
              </div>
            </div>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">
            2. Sifat Pembagian (Quotient Rule)
          </h3>
          <p class="text-xl lg:text-2xl">
            Jika dua bilangan dengan basis yang sama dibagi, maka
            eksponen-eksponen mereka dikurangkan, Contohnya:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$\frac{a^{m}}{a^{n}}=a^{m-n}$$
            </h3>
          </div>

          <div class="bg-putih border-hitam rounded-md p-4 me-auto ms-auto">
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div
              class="grid lg:grid-cols-[300px_minmax(400px,_0fr)] justify-center h-[400px] lg:h-[250px]"
            >
              <div class="py-3 max-lg:border-hitam-bawah">
                <h3 class="text-xl lg:text-2xl font-semibold">Contoh Soal:</h3>
                <h1 class="text-3xl">$$\frac{5^{6}}{5^{2}}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil pemangkatan diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Ketika kita membagi dua bilangan
                  berpangkat dengan basis yang sama, kita dapat mengurangi
                  pangkatnya. Aturan ini dinyatakan sebagai:
                  $$\frac{a^{m}}{a^{n}}=a^{m-n}$$
                  <strong>Langkah 2:</strong> Gunakan Aturan pembagian Bilangan
                  Berpangkat dan kita terapkan aturan tersebut:
                  $$\frac{5^{6}}{5^{2}}=5^{6-2}$$
                  <strong>Langkah 3:</strong> Lalu kita akan gunakan hasil
                  tersebut untuk mencari hasil eksponen tersebut
                  $$5^{6-2}=5^{4}$$ Hitung hasil eksponen tersebut
                  $$5^{4}=5\times5\times5\times5=625$$ maka hasil eksponen
                  $$\frac{5^{6}}{5^{2}}$$ adalah 625
                </p>
              </div>
            </div>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">
            3. Sifat Pangkat dari Pangkat (Power of a Power Rule)
          </h3>
          <p class="text-xl lg:text-2xl">
            Jika suatu bilangan yang sudah dipangkatkan kemudian dipangkatkan
            lagi, eksponen-eksponen tersebut dikalikan. Contohnya:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$(a^{m})^{n}=a^{m\times n}$$
            </h3>
          </div>

          <div class="bg-putih border-hitam rounded-md p-4 me-auto ms-auto">
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div
              class="grid lg:grid-cols-[300px_minmax(400px,_0fr)] justify-center h-[400px] lg:h-[220px]"
            >
              <div class="py-3 max-lg:border-hitam-bawah">
                <h3 class="text-xl lg:text-2xl font-semibold">Contoh Soal:</h3>
                <h1 class="text-3xl">$$(2^{3})^{2}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil pemangkatan diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Ketika suatu bilangan sudah
                  dipangkatkan lalu dipangkatkan lagi, kita dapat mengkalikan
                  pangkatnya. Aturan ini dinyatakan sebagai:
                  $$(a^{m})^{n}=a^{m\times n}$$
                  <strong>Langkah 2:</strong> Gunakan Aturan pangkat dari
                  pangkat dan kita terapkan aturan tersebut:
                  $$(2^{3})^{2}=2^{3\times 2}$$ <strong>Langkah 3:</strong> Lalu
                  kita akan gunakan hasil tersebut untuk mencari hasil eksponen
                  tersebut $$2^{3\times 2}=2^{6}$$ Hitung hasil eksponen
                  tersebut $$2^{6}=64$$ maka hasil eksponen $$(2^{3})^{2}$$
                  adalah 64
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
          <h1 class="text-xl font-semibold text-center" id="question-numb2-1">
            1/3
          </h1>
          <div class="py-5">
            <h2 class="text-xl font-semibold" id="question2-1"></h2>

            <div class="hitam text-xl" id="answer2-1"></div>

            <div class="flex items-center">
              <button
                class="font-semibold bg-color-3-50 w-[150px] border-hitam p-3 mx-auto my-2 rounded-sm cursor-pointer hidden"
                id="next-button2-1"
              >
                Lanjut
              </button>
            </div>

            <div class="grid items-center py-2" id="explain-div2-1">
              <h3 class="text-2xl font-bold pb-4">Prof.Mezo Here!</h3>
              <div class="" id="explain2-1"></div>
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
              Pangkat dari Perkalian, Pangkat dari Pembagian, Eksponen Nol
            </h1>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">
            4. Sifat Pangkat dari Perkalian (Power of a Product Rule)
          </h3>
          <p class="text-xl lg:text-2xl">
            Jika dua bilangan dikalikan dan hasilnya dipangkatkan, maka
            masing-masing bilangan dipangkatkan terlebih dahulu kemudian
            dikalikan:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$(ab)^{m}=a^{m}\times b^{m}$$
            </h3>
          </div>

          <div class="bg-putih border-hitam rounded-md p-4 me-auto ms-auto">
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div
              class="grid lg:grid-cols-[300px_minmax(400px,_0fr)] justify-center h-[400px] lg:h-[220px]"
            >
              <div class="py-3 max-lg:border-hitam-bawah">
                <h3 class="text-xl lg:text-2xl font-semibold">Contoh Soal:</h3>
                <h1 class="text-3xl">$$(2\times3)^{2}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil pemangkatan diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Gunakan sifat pangkat dari
                  perkalian, yang menyatakan bahwa ketika dua bilangan dikalikan
                  dan hasilnya dipangkatkan. Aturan ini dinyatakan sebagai:
                  $$a^{m}\times a^{n}=a^{m+n}$$
                  <strong>Langkah 2:</strong> Gunakan Aturan Perkalian Bilangan
                  Berpangkat dan kita terapkan aturan tersebut: $$(2/times
                  3)^{2}=2^{2}\times3^{2}$$
                  <strong>Langkah 3:</strong> Pangkatkan Masing-Masing Bilangan
                  Hitung hasil pangkat dari masing-masing bilangan:
                  $$2^{2}=2/times 2 = 4$$ $$3^{2}=3/times 3 = 9$$
                  <strong>Langkah 4:</strong> Kalikan Hasil Pangkat Sekarang,
                  kalikan hasil pangkat dari kedua bilangan tersebut:
                  $$2^{2}/times 3^{2} = 4/times9=36$$ hasil akhirnya adalah 36
                </p>
              </div>
            </div>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">
            5. Sifat Pangkat dari Pembagian (Power of a Quotient Rule)
          </h3>
          <p class="text-xl lg:text-2xl">
            Jika suatu pembagian dipangkatkan, maka pembilang dan penyebut
            dipangkatkan secara terpisah:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$(\frac{a}{b})^{n}=\frac{a^{n}}{b^{n}}$$
            </h3>
          </div>

          <div class="bg-putih border-hitam rounded-md p-4 me-auto ms-auto">
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div
              class="grid lg:grid-cols-[300px_minmax(400px,_0fr)] justify-center h-[400px] lg:h-[250px]"
            >
              <div class="py-3 max-lg:border-hitam-bawah">
                <h3 class="text-xl lg:text-2xl font-semibold">Contoh Soal:</h3>
                <h1 class="text-3xl">$$(\frac{4}{2})^{3}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil pemangkatan diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Ketika kita pembagian yang dikali
                  dengan pangka, pangkat tersebut akan dipangkat kan secara
                  terpisah. Aturan ini dinyatakan sebagai:
                  $$(\frac{a}{b})^{n}=\frac{a^{n}}{b^{n}}$$
                  <strong>Langkah 2:</strong> Gunakan Aturan pembagian Bilangan
                  Berpangkat dan kebetulan 4 bisa dipecah dalam bentuk pangkat
                  maka akan menjadi:
                  $$(\frac{2^{2}}{2})^{3}=\frac{(2^{2})^{3}}{2^{3}}$$
                  <strong>Langkah 3:</strong> Lalu kita akan gunakan hasil
                  tersebut untuk mencari hasil eksponen tersebut
                  $$\frac{2^{6}}{2^{3}}=2^{6-3}$$ Hitung hasil eksponen tersebut
                  $$2^{3}=8$$
                </p>
              </div>
            </div>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">
            6. Sifat Eksponen Nol
          </h3>
          <p class="text-xl lg:text-2xl">
            Setiap bilangan yang dipangkatkan dengan nol adalah satu (dengan
            syarat basis tidak sama dengan nol):
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$a^{0}=1$$ $$(a\neq0)$$
            </h3>
          </div>

          <div class="bg-putih border-hitam rounded-md p-4 me-auto ms-auto">
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div
              class="grid lg:grid-cols-[300px_minmax(400px,_0fr)] justify-center h-[400px] lg:h-[220px]"
            >
              <div class="py-3 max-lg:border-hitam-bawah">
                <h3 class="text-xl lg:text-2xl font-semibold">Contoh Soal:</h3>
                <h1 class="text-3xl">$$7^{0}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil pemangkatan diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  Dalam matematika, ketika suatu bilangan dipangkatkan dengan
                  nol, hasilnya selalu satu, kecuali basisnya adalah nol (untuk
                  basis nol, hasilnya tidak terdefinisi). $$a^{0}=1$$ Dalam
                  kasus ini, basisnya adalah 7, dan eksponennya adalah 0. Ketika
                  bilangan dipangkatkan dengan nol, hasilnya adalah $$7^{0}=1$$
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
            id="question-numb2-2"
          ></h1>
          <div class="py-5">
            <h2 class="text-xl font-semibold" id="question2-2"></h2>

            <div class="hitam text-xl" id="answer2-2"></div>

            <div class="flex items-center">
              <button
                class="font-semibold bg-color-3-50 w-[150px] border-hitam p-3 mx-auto my-2 rounded-sm cursor-pointer hidden"
                id="next-button2-2"
              >
                Lanjut
              </button>
            </div>

            <div class="grid items-center py-2" id="explain-div2-2">
              <h3 class="text-2xl font-bold pb-4">Prof.Mezo Here!</h3>
              <div class="" id="explain2-2"></div>
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
              Eksponen Satu, Eksponen Negatif, Eksponen Pecahan (Radikal)
            </h1>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">
            7. Sifat Eksponen Satu
          </h3>
          <p class="text-xl lg:text-2xl">
            Setiap bilangan yang dipangkatkan dengan satu adalah bilangan itu
            sendiri:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$a^{1}=a$$
            </h3>
          </div>

          <div class="bg-putih border-hitam rounded-md p-4 me-auto ms-auto">
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div
              class="grid lg:grid-cols-[300px_minmax(400px,_0fr)] justify-center h-[400px] lg:h-[220px]"
            >
              <div class="py-3 max-lg:border-hitam-bawah">
                <h3 class="text-xl lg:text-2xl font-semibold">Contoh Soal:</h3>
                <h1 class="text-3xl">$$9^{1}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil pemangkatan diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  Tentu, eksponen pada suatu bilangan menunjukkan berapa kali
                  bilangan itu harus dikalikan dengan dirinya sendiri. Ketika
                  eksponen adalah 1, itu berarti kita hanya mengalikan bilangan
                  dengan dirinya sendiri satu kali. $$a^{1}=a$$ Dalam kasus ini,
                  basisnya adalah 9, dan eksponennya adalah 1. Ketika bilangan
                  dipangkatkan dengan 1, hasilnya adalah $$9^{1}=9$$
                </p>
              </div>
            </div>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">
            8. Sifat Eksponen Negatif
          </h3>
          <p class="text-xl lg:text-2xl">
            Eksponen negatif menunjukkan kebalikan dari bilangan dengan eksponen
            positif yang sama:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$a^{-n}=\frac{1}{a^{n}}$$
            </h3>
          </div>

          <div class="bg-putih border-hitam rounded-md p-4 me-auto ms-auto">
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div
              class="grid lg:grid-cols-[300px_minmax(400px,_0fr)] justify-center h-[400px] lg:h-[250px]"
            >
              <div class="py-3 max-lg:border-hitam-bawah">
                <h3 class="text-xl lg:text-2xl font-semibold">Contoh Soal:</h3>
                <h1 class="text-3xl">$$5^{-2}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil pemangkatan diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Ketika kita mendapatkan eksponen
                  negatif kita perlu merubahnya menjadi kebalikannya. Aturan ini
                  dinyatakan sebagai: $$a^{-n}=\frac{1}{a^{n}}$$
                  <strong>Langkah 2:</strong> Gunakan Aturan pembagian Bilangan
                  Berpangkat: $$5^{-2}=\frac{1}{5^{2}}$$
                  <strong>Langkah 3:</strong> Lalu kita akan gunakan hasil
                  tersebut untuk mencari hasil eksponen tersebut
                  $$\frac{1}{5^{2}}=\frac{1}{25}$$
                </p>
              </div>
            </div>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">
            9. Sifat Eksponen Pecahan (Radikal)
          </h3>
          <p class="text-xl lg:text-2xl">
            Eksponen pecahan menunjukkan akar dari bilangan tersebut:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$a^{\frac{m}{n}}=\sqrt[n]{a^{m}}$$
            </h3>
          </div>

          <div class="bg-putih border-hitam rounded-md p-4 me-auto ms-auto">
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div
              class="grid lg:grid-cols-[300px_minmax(400px,_0fr)] justify-center h-[400px] lg:h-[220px]"
            >
              <div class="py-3 max-lg:border-hitam-bawah">
                <h3 class="text-xl lg:text-2xl font-semibold">Contoh Soal:</h3>
                <h1 class="text-3xl">$$27^{\frac{1}{3}}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil pemangkatan diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Ketika kita mendapatkan eksponen
                  yang dibagi kita perlu merubahnya menjadi bentuk akar. Aturan
                  ini dinyatakan sebagai: $$a^{\frac{m}{n}}=\sqrt[n]{a^{m}}$$
                  <strong>Langkah 2:</strong> Gunakan Aturan akar Bilangan
                  Berpangkat: $27^{\frac{1}{3}}=\sqrt[3]{27^{1}}$$
                  <strong>Langkah 3:</strong> Lalu kita akan gunakan hasil
                  tersebut untuk mencari hasil eksponen tersebut
                  $$\sqrt[3]{27^{1}}=3$$
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
            id="question-numb2-3"
          ></h1>
          <div class="py-5">
            <h2 class="text-xl font-semibold" id="question2-3"></h2>

            <div class="hitam text-xl" id="answer2-3"></div>

            <div class="flex items-center">
              <button
                class="font-semibold bg-color-3-50 w-[150px] border-hitam p-3 mx-auto my-2 rounded-sm cursor-pointer hidden"
                id="next-button2-3"
              >
                Lanjut
              </button>
            </div>

            <div class="grid items-center py-2" id="explain-div2-3">
              <h3 class="text-2xl font-bold pb-4">Prof.Mezo Here!</h3>
              <div class="" id="explain2-3"></div>
            </div>
          </div>
        </div>
        <p class="text-xl lg:text-2xl text-center">
          Nah MEZO Friends, yuk asah kemampuan mu dari materi Eksponen pada quiz berikut!
        </p>
        <a
          href="./eks-quiz.html"
          class="bg-hitam krem p-2 rounded-xl flex justify-center mt-4 cursor-pointer"
        >
          Quiz Bab Eksponen
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
    <script src="./js/quiz2-1.js"></script>
    <script src="./js/quiz2-2.js"></script>
    <script src="./js/quiz2-3.js"></script>
  </body>
</html>
