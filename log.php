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
              Nah, setelah belajar eksponen, yuk belajar
              <strong>Logaritma</strong> MEZO Friends!
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
                <h1 class="text-2xl lg:text-4xl font-bold">Logaritma</h1>
                <div class="">
                  <h3 class="font-bold text-lg">“Logaritma itu apa sih?”</h3>
                  <p class="">
                    Jadi, secara umum, logaritma itu merupakan sebuah invers
                    atau kebalikan dari pemangkatan (eksponen) yang dipakai
                    dalam menentukan besar pangkat dari sebuah bilangan pokok.
                  </p>
                  <p class="">
                    Nah, pada intinya, dengan mempelajari logaritma maka kita
                    dapat mencari besar pangkat dari sebuah bilangan yang
                    diketahui hasil pangkatnya.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <p class="">
            Nah, <strong>MEZO Friends</strong>, mari kita lihat contoh dasar
            eksponen
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$a^{n}=x,\log_{a}{x}=n$$
            </h3>
          </div>

          <p class="">
            Nah, <strong>MEZO Friends</strong>, mari kita lihat contoh dasar
            eksponen
          </p>

          <div class="bg-color-1 border-hitam rounded-xl">
            $$\bf 2^{3}=8,\log_{2}{8}=3$$
          </div>
          <div class="bg-color-2 border-hitam rounded-xl">
            $$\bf 5^{3}=125, \log_{5}{125}=3$$
          </div>
          <div class="bg-color-3 border-hitam rounded-xl">
            $$\bf 2^{-1}=\frac{1}{2}, \log_{2}{\frac{1}{2}}=-1$$
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
              Distributif, Quotient, dan Pangkat
            </h1>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">
            1. Sifat Distributif
          </h3>
          <p class="text-xl lg:text-2xl">
            Dalam perkalian, logaritma dari hasil perkalian dua bilangan sama
            dengan jumlah logaritma masing-masing bilangan. Contohnya
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$\log_{b}{(mn)}=\log_{b}{m}+\log_{b}{n}$$
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
                <h1 class="text-3xl">$$\log_{10}{(10\times100)}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil logaritma diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Kita dapat memisahkan logaritma
                  dari perkalian menjadi penjumlahan logaritma masing-masing
                  faktor
                  $$\log_{10}{(10\times100)}=\log_{10}{10}+\log_{10}{100}$$
                  <strong>Langkah 2:</strong> Kita rubah bentuk log menjadi
                  nilai bulat $$\log_{10}{10}+\log_{10}{100}=1+2$$
                  <strong>Langkah 3:</strong> Setelah mendapatkan bentuk angka
                  lalu kita tambahkan $$1+2=3$$
                </p>
              </div>
            </div>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">2. Sifat Quotient</h3>
          <p class="text-xl lg:text-2xl">
            Dalam pembagian, logaritma dari hasil pembagian dua bilangan sama
            dengan selisih logaritma masing-masing bilangan. Contohnya:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$\log_{b}{\frac{m}{n}}=\log_{b}{m}-\log_{b}{n}$$
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
                <h1 class="text-3xl">$$\log_{2}{\frac{8}{2}}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil logaritma diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Kita dapat memisahkan logaritma
                  dari pembagian menjadi pengurangan logaritma masing-masing
                  faktor $$\log_{2}{\frac{8}{2}}=\log_{2}{8}-\log_{2}{2}$$
                  <strong>Langkah 2:</strong> Kita rubah bentuk log menjadi
                  nilai bulat $$\log_{2}{8}-\log_{2}{2}=3-1$$
                  <strong>Langkah 3:</strong> Setelah mendapatkan bentuk angka
                  lalu kita tambahkan $$3-1=2$$
                </p>
              </div>
            </div>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">3. Sifat Pangkat</h3>
          <p class="text-xl lg:text-2xl">
            Ketika bilangan di dalam logaritma dipangkatkan, dapat diambil
            keluar sebagai faktor di depan logaritma. Contohnya:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$\log_{b}{m^{n}}=n\times\log_{b}{m}$$
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
                <h1 class="text-3xl">$$\log_{10}{1000^{2}}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil logaritma diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Kita dapat memudahkan logaritma
                  yang dipangkatkan menjadi perkalian faktor didepan logaritma
                  $$\log_{10}{1000^{2}}=2\times\log_{10}{1000}$$
                  <strong>Langkah 2:</strong> Kita rubah bentuk log menjadi
                  nilai bulat $$2\times 3$$ <strong>Langkah 3:</strong> Setelah
                  mendapatkan bentuk angka lalu kita kalikan $$2\times 3=6$$
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
          <h1 class="text-xl font-semibold text-center" id="question-numb3-1">
            1/3
          </h1>
          <div class="py-5">
            <h2 class="text-xl font-semibold" id="question3-1"></h2>

            <div class="hitam text-xl" id="answer3-1"></div>

            <div class="flex items-center">
              <button
                class="font-semibold bg-color-3-50 w-[150px] border-hitam p-3 mx-auto my-2 rounded-sm cursor-pointer hidden"
                id="next-button3-1"
              >
                Lanjut
              </button>
            </div>

            <div class="grid items-center py-2" id="explain-div3-1">
              <h3 class="text-2xl font-bold pb-4">Prof.Mezo Here!</h3>
              <div class="" id="explain3-1"></div>
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
            <h1 class="font-bold text-2xl lg:text-4xl">Nol, Basis, Invers</h1>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">4. Sifat Nol</h3>
          <p class="text-xl lg:text-2xl">
            Logaritma dari 1 terhadap basis apa pun adalah 0.
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$\log_{b}{1}=0$$
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
                <h1 class="text-3xl">$$\log_{5}{1}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil logaritma diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  Dalam matematika, ketika logaritma dari 1 hasilnya adalah 0,
                  karena konsep dari eksponen itu suatu bilangan dipangkatkan
                  dengan nol(kecuali untuk basis 0), hasilnya selalu satu
                  $$a^{0}=1$$ Dikarenakan logaritma adalah kebalikan dari
                  eksponen jadi berapapun logaritma dari 1 hasilnya adalah
                  $$\log_{5}{1}=0$$
                </p>
              </div>
            </div>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">5. Sifat Basis</h3>
          <p class="text-xl lg:text-2xl">
            Logaritma dari basis itu sendiri adalah 1.
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$\log_{b}{b}=1$$
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
                <h1 class="text-3xl">$$\log_{7}{7}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil logaritma diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  Dalam matematika, ketika logaritma dari basis itu sendiri
                  hasilnya adalah 1 $$\log_{b}{b}=1$$ Dalam kasus ini logaritma
                  dan basis itu sendiri adalah 7 maka hasilnya adalah
                  $$\log_{7}{7}=1$$
                </p>
              </div>
            </div>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">6. Sifat Invers</h3>
          <p class="text-xl lg:text-2xl">
            Logaritma dengan basis yang sama dan pangkat yang sama akan
            membatalkan satu sama lain, menghasil nya adalah pangkat itu.
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$\log_{b}{b^{x}}=x$$
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
                <h1 class="text-3xl">$$\log_{3}{3^{4}}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil logaritma diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  Kembali kedalam penjelasan logaritma merupakan kebalikan dari
                  eksponen $$a^{x}=n$$ $$\log_{a}{n}=x$$ Dalam matematika,
                  ketika basis yang sama dan pangkat yang sama akan menghasilkan
                  jawaban dari pangkat itu sendiri $$\log_{b}{b^x}=x$$ Jika
                  dituliskan dalam bentuk eksponen maka $$b^{x}=(b^{x})$$ Dalam
                  kasus ini logaritma dan basis adalah 3 sedangkan angka yang
                  dipangkatkan oleh basis adalah 4, maka jawabannya adalah
                  $$\log_{3}{3^{4}}=4$$
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
            id="question-numb3-2"
          ></h1>
          <div class="py-5">
            <h2 class="text-xl font-semibold" id="question3-2"></h2>

            <div class="hitam text-xl" id="answer3-2"></div>

            <div class="flex items-center">
              <button
                class="font-semibold bg-color-3-50 w-[150px] border-hitam p-3 mx-auto my-2 rounded-sm cursor-pointer hidden"
                id="next-button3-2"
              >
                Lanjut
              </button>
            </div>

            <div class="grid items-center py-2" id="explain-div3-2">
              <h3 class="text-2xl font-bold pb-4">Prof.Mezo Here!</h3>
              <div class="" id="explain3-2"></div>
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
              Persamaan dan Penghapusan
            </h1>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">1. Sifat Persamaan</h3>
          <p class="text-xl lg:text-2xl">
            Jika kita memiliki logaritma dengan basis yang berbeda, kita dapat
            mengubah basisnya dengan menggunakan aturan ini. Contohnya:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$\log_{b}{m}=\frac{\log_{c}{m}}{\log_{c}{b}}$$
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
                <h1 class="text-3xl">$$\frac{\log_{3}{5}}{\log_{3}{2}}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil logaritma diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Mengingat sifat logaritma dengan
                  basis yang berbeda, kita dapat mengubah basisnya dengan
                  menggunakan aturan ini
                  $$\log_{b}{m}=\frac{\log_{c}{m}}{\log_{c}{b}}$$
                  <strong>Langkah 2:</strong> Kita masukkan angka nya maka akan
                  mendapatkan hasil
                  $$\frac{\log_{3}{5}}{\log_{3}{2}}=\log_{5}{2}$$
                </p>
              </div>
            </div>
          </div>

          <h3 class="text-xl lg:text-2xl font-semibold">
            2. Sifat Penghapusan
          </h3>
          <p class="text-xl lg:text-2xl">
            Basis dipangkatkan dengan logaritma basis dari x akan menghasilkan
            x:
          </p>

          <div class="flex justify-center items-center">
            <h3 class="rounded-lg bg-putih border-hitam px-6 text-4xl">
              $$a^{\log_{a}{x}}=x$$
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
                <h1 class="text-3xl">$$2^{\log_{2}{16}}$$</h1>
                <h3 class="text-xl lg:text-2xl font-semibold">
                  Berapakah hasil logaritma diatas?
                </h3>
              </div>

              <div class="lg:border-hitam-kiri p-2 overflow-auto">
                <h1 class="text-xl lg:text-2xl font-semibold pb-6">
                  Penjelasan:
                </h1>
                <p class="">
                  <strong>Langkah 1:</strong> Ketika kita mendapatkan basis yang dipangkatkan dengan logaritma basis dari x akan mendapatkan hasil x
                  $$a^{\log_{a}{x}}=x$$
                  <strong>Langkah 2:</strong> Kita masukkan angkanya maka akan mendapatkan hasil
                  $$2^{\log_{2}{16}}=16$$
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
            id="question-numb3-3"
          ></h1>
          <div class="py-5">
            <h2 class="text-xl font-semibold" id="question3-3"></h2>

            <div class="hitam text-xl" id="answer3-3"></div>

            <div class="flex items-center">
              <button
                class="font-semibold bg-color-3-50 w-[150px] border-hitam p-3 mx-auto my-2 rounded-sm cursor-pointer hidden"
                id="next-button3-3"
              >
                Lanjut
              </button>
            </div>

            <div class="grid items-center py-2" id="explain-div3-3">
              <h3 class="text-2xl font-bold pb-4">Prof.Mezo Here!</h3>
              <div class="" id="explain3-3"></div>
            </div>
          </div>
        </div>
        <p class="text-xl lg:text-2xl text-center">
          Nah MEZO Friends, yuk asah kemampuan mu dari materi Logaritma pada quiz berikut!
        </p>
        <a
          href="./log-quiz.html"
          class="bg-hitam krem p-2 rounded-xl flex justify-center mt-4 cursor-pointer"
        >
          Quiz Bab Logaritma
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
    <script src="./js/quiz3-1.js"></script>
    <script src="./js/quiz3-2.js"></script>
    <script src="./js/quiz3-3.js"></script>
  </body>
</html>
