<?php
session_start();
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
    <link rel="stylesheet" href="./css/contact.css" />
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
          class="container grid gap-16 max-lg:gap-8 ms-auto me-auto lg:grid-column-2fr_3fr justify-center"
        >
          <div class="max-lg:text-center flex flex-col justify-center">
            <h1 class="font-bold text-2xl lg:text-5xl text-3xl">
              Math Equate Zone
            </h1>
            <h2 class="font-semibold text-2xl lg:text-4xl text-3xl pt-1">
              Doing Your Math <span class="multiple-text"></span>
            </h2>
            <div class="grid justify-center">
              <p class="max-lg:pr-12 py-4 lg:text-lg">
             Halo sobat Mezo! Selamat datang di
                <strong>Math Equate Zone</strong>, website pembelajaran
                matematika menjadi lebih menyenangkan.
              </p>
            </div>
            <div class="">
              <a
                href="#materi"
                class="bg-hitam krem py-2 px-12 rounded-xl mt-4 cursor-pointer"
              >
                Get Started
              </a>
            </div>
          </div>

          <div class="grid items-center justify-center">
            <div class="absolute h-fit">
              <img id="img2" src="./image/pppppppp.png" alt="" />
            </div>
            <div id="img1" class="relative z-3">
              <img src="./image/maskot_mez.png" alt="" />
            </div>
          </div>
        </div>
      </section>

      <section class="py-20 border-hitam-bawah" id="materi">
        <h2
          class="w-max my-4 mx-auto font-bold md:text-4xl text-2xl border-hitam-bawah p-2"
        >
          MATERIAL
        </h2>
        <div
          class="container grid justify-center gap-y-8 grid-colm-282px lg:gap-x-14 pt-12 lg:ms-auto lg:me-auto"
        >
          <article
            class="hover:-translate-y-4 duration-500 bg-putih border-hitam rounded-xl p-6 grid"
          >
            <div class="h-40 w-40 mx-auto grid items-center">
              <img src="./image/linear-card.svg" alt="" />
            </div>
            <h1 class="font-bold text-xl">Persamaan Linear</h1>
            <p class="">
              Persamaan Linear merupakan salah satu persamaan dari ilmu aljabar.
            </p>
            <a
              href="./linear.html"
              class="bg-hitam krem py-2 rounded-xl flex justify-center mt-4 cursor-pointer"
            >
              Read More
            </a>
          </article>

          <article
            class="hover:-translate-y-4 duration-500 bg-putih border-hitam rounded-xl p-6 grid"
          >
            <div class="h-40 w-40 mx-auto">
              <img src="./image/eks-card.svg" alt="" />
            </div>
            <h1 class="font-bold text-xl" id="testing">Eksponen</h1>
            <p class="">
              Eksponen merupakan bentuk perkalian berulang ulang dengan angka
              sendiri.
            </p>
            <a
              href="./eks.html"
              class="bg-hitam krem py-2 rounded-xl flex justify-center mt-4 cursor-pointer"
            >
              Read More
            </a>
          </article>

          <article
            class="hover:-translate-y-4 duration-500 bg-putih border-hitam rounded-xl p-6 grid"
          >
            <div class="h-40 w-40 mx-auto">
              <img src="./image/log-card.svg" alt="" />
            </div>
            <h1 class="font-bold text-xl">Logaritma</h1>
            <p class="">
              Logaritma merupakan kebalikan dari eksponen (perpangkatan).
            </p>
            <a
              href="./log.html"
              class="bg-hitam krem py-2 rounded-xl flex justify-center mt-4 cursor-pointer"
            >
              Read More
            </a>
          </article>
        </div>
      </section>

      <section class="py-20 border-hitam-bawah" id="about">
        <h2
          class="w-max my-4 mx-auto font-bold md:text-4xl text-2xl border-hitam-bawah p-2"
        >
          ABOUT
        </h2>

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
                <h1 class="text-2xl lg:text-4xl font-bold">Math Equate Zone</h1>
                <div class="">
                  <h2 class="font-bold text-lg">"Apa math equate zone"</h2>
                  <p class="">
                    Math Equate Zone adalah sebuah website matematika kelas 10
                    semester 1 dengan materi persamaan linear,eksponen,logaritma
                    serta barisan dan deret
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div
          class="container border-hitam bg-putih rounded-md grid items-center mb-8 gap-16 lg:grid-repeat-2 justify-center py-16 px-4 ms-auto me-auto"
        >
          <h1 class="text-4xl max-lg:text-2xl font-bold">
            Belajar matematika tanpa stres dengan pendekatan yang santai.
          </h1>
          <div class="border-hitam rounded-md">
            <img
              src="./image/Screenshot 2024-05-28 111122.png"
              alt=""
              class="rounded-md"
            />
          </div>
        </div>

        <div
          class="container border-hitam bg-putih rounded-md grid items-center gap-16 lg:grid-repeat-2 justify-center py-16 px-4 ms-auto me-auto"
        >
          <h1 class="text-4xl font-bold max-lg:text-2xl">
            Tingkatkan kepercayaan diri Anda dengan mengerjakan kuis.
          </h1>
          <div class="border-hitam rounded-md lg:gridrow-half">
            <img
              src="./image/Screenshot 2024-05-28 111141.png"
              alt=""
              class="rounded-md"
            />
          </div>
        </div>
      </section>

      <section class="py-20 border-hitam-bawah">
        <h2
          class="w-max my-4 mx-auto font-bold md:text-4xl text-2xl border-hitam-bawah p-2"
        >
          MEZ Team
        </h2>
        <div
          class="container grid justify-center gap-8 max-lg:grid-colm-2fr grid-colm-282px lg:gap-x-14 pt-12 lg:ms-auto lg:me-auto"
        >
          <article
            class="hover:-translate-y-4 duration-500 bg-putih border-hitam rounded-xl lg:p-6 p-2 grid"
          >
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div class="items-center p-4">
              <img
                src="./image/Nabilla Putri.png"
                alt=""
                class="rounded-xl border-hitam"
              />
            </div>

            <h1 class="font-bold text-xl max-lg:text-lg">Nabilla Putri R.</h1>
            <p class="">As a Leader</p>
          </article>

          <article
            class="hover:-translate-y-4 duration-500 bg-putih border-hitam rounded-xl lg:p-6 p-2 grid"
          >
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div class="items-center p-4">
              <img
                src="./image/Al Ghaza.png"
                alt=""
                class="rounded-xl border-hitam"
              />
            </div>

            <h1 class="font-bold text-xl max-lg:text-lg">Fadhil Al Ghaza A.</h1>
            <p class="">As a Front End</p>
          </article>

          <article
            class="hover:-translate-y-4 duration-500 bg-putih border-hitam rounded-xl lg:p-6 p-2 grid"
          >
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div class="items-center p-4">
              <img
                src="./image/Jonathan Iatsa.png"
                alt=""
                class="rounded-xl border-hitam"
              />
            </div>

            <h1 class="font-bold text-xl max-lg:text-lg">
              Jonathan Iatsa H. A.
            </h1>
            <p class="">As a Front End</p>
          </article>

          <article
            class="hover:-translate-y-4 duration-500 bg-putih border-hitam rounded-xl lg:p-6 p-2 grid"
          >
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div class="items-center p-4">
              <img
                src="./image/Raisa Talita.png"
                alt=""
                class="rounded-xl border-hitam"
              />
            </div>

            <h1 class="font-bold text-xl max-lg:text-lg">Muhammad Darrel</h1>
            <p class="">As a UI/UX</p>
          </article>

          <article
            class="hover:-translate-y-4 duration-500 bg-putih border-hitam rounded-xl lg:p-6 p-2 grid"
          >
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div class="items-center p-4">
              <img
                src="./image/Raihan Muhammad.png"
                alt=""
                class="rounded-xl border-hitam"
              />
            </div>

            <h1 class="font-bold text-xl max-lg:text-lg">Raihan Muhammad</h1>
            <p class="">As a Back End</p>
          </article>

          <article
            class="hover:-translate-y-4 duration-500 bg-putih border-hitam rounded-xl lg:p-6 p-2 grid"
          >
            <div class="flex gap-x-2">
              <div class="bg-color-1 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-2 border-hitam rounded-full w-6 h-6"></div>
              <div class="bg-color-3 border-hitam rounded-full w-6 h-6"></div>
            </div>

            <div class="items-center p-4">
              <img
                src="./image/M. Darrel.png"
                alt=""
                class="rounded-xl border-hitam"
              />
            </div>

            <h1 class="font-bold text-xl max-lg:text-lg">Raisa Talita</h1>
            <p class="">As a Materi Riset</p>
          </article>
        </div>
      </section>

      <section class="contact section" id="contact">
        <div class="contact_container grid">
          <div class="contact_info">
            <h3 class="contact_title">Contact</h3>
            <p class="contact_text">
              Silahkan boleh di isi pesan entah itu kritik, saran, cacian,
              motivasi, minta ig, atau apapun itu akan kami terima.
            </p>

            <div class="contact_social">
              <p>Connect with us :</p>
              <div class="contact_social-icon">
                <a href="#">
                  <i class="ri-instagram-line"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="contact_form">
            <form autocomplete="off" id="contact-form">
              <h3 class="contact_title">Contact us</h3>

              <div class="contact_input">
                <input
                  type="text"
                  name="user_name"
                  id="name"
                  required
                  class="input"
                />
                <label for="">Username</label>
                <span>Username</span>
              </div>

              <div class="contact_input">
                <input
                  type="email"
                  name="user_email"
                  id="email"
                  required
                  class="input"
                />
                <label for="">Email</label>
                <span>Email</span>
              </div>

              <div class="contact_input">
                <input
                  type="text"
                  name="user_subject"
                  id="subject"
                  required
                  class="input"
                />
                <label for="">Subject</label>
                <span>Subject</span>
              </div>

              <div class="contact_input textareah">
                <textarea
                  name="user_message"
                  id="message"
                  class="input"
                  required
                ></textarea>
                <label for="">Message</label>
                <span>Message</span>
              </div>

              <p class="contact__message" id="contact-message"></p>

              <div class="contact_button">
                <button type="submit" class="button-send">Send</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>

    <!-- ======================== Gsap Lenis =================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>
    <!-- =================== Typed Js =========================== -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- ====================== Email Js ====================== -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <!-- =================== Javascript =================== -->
    <script src="./js/script.js"></script>
    <script src="./js/contact.js"></script>
  </body>
</html>
