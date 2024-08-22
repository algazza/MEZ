const questions14 = [
  {
    question: "Penyelesaian dari persamaan $$x + 7 = 21 - x$$",
    answer: [
      { Text: "10", correct: false },
      { Text: "12", correct: false },
      { Text: "8", correct: false },
      { Text: "7", correct: true },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Eliminasi x di sebelah kanan persamaan.
      Kita ingin mengumpulkan semua istilah yang mengandung x di satu sisi persamaan. Untuk itu, kita harus memindahkan istilah (-x) dari sebelah kanan ke sebelah kiri dengan cara menambahkan x ke kedua sisi persamaan.
      $$x + x + 7 = 21 - x + x$$
      Setelah disederhanakan, persamaan menjadi:
      $$2x + 7 = 21$$
      <strong>Langkah 2:</strong> Selanjutnya, kita akan isolasi variabel x. 
      Pertama-tama, kita akan memindahkan 7 ke sisi kanan dengan melakukan pengurangan.
      $$2x + 7 - 7 = 21 - 7$$
      Setelah disederhanakan, persamaan menjadi:
      2x = 7
      <strong>Langkah 3:</strong> Terakhir, kita akan membagi kedua sisi persamaan dengan 2 untuk mendapatkan nilai x.
      $$\\frac{2x}{2}= \\frac{14}{2}$$
      Setelah disederhanakan, persamaan menjadi:
      $$x = 7$$
      Jadi, solusi dari persamaan x + 3 = 11 - x adalah x = 4.
      Oleh karena itu, jawaban yang benar adalah pilihan D.
    </p>`,
  },
  {
    question: "Penyelesaian dari $$15x = 75$$",
    answer: [
      { Text: "6", correct: false },
      { Text: "9", correct: false },
      { Text: "5", correct: true },
      { Text: "3", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Isolasi variabel x.
      Kita ingin membagi kedua sisi persamaan ini dengan 15 agar kita dapat menemukan nilai x.Lakukan pembagian sebagai berikut:
      $$\\frac{15x}{15}= \\frac{75}{15}$$ 
      Jadi, solusi dari persamaan 15x = 75 adalah x = 5.
      Oleh karena itu, jawaban yang benar adalah pilihan C.
    </p>`,
  },
  {
    question: "Diketahui dua buah bilangan cacah genap berurutan dengan persamaan $$n +(n+2) = 50$$, tentukan bilangan pertama dan kedua! Dari soal berikut maka jawaban yang benar adalah",
    answer: [
      { Text: "Bilangan pertama 26, bilangan kedua 20 ", correct: false },
      { Text: "Bilangan pertama 24, bilangan kedua 26 ", correct: true },
      { Text: "Bilangan pertama 22, bilangan kedua 20 ", correct: false },
      { Text: "Bilangan pertama 20, bilangan kedua 24 ", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong>  Tulis persamaan dan tentukan bilangan pertama.
      Bilangan pertama adalah n, dan bilangan kedua adalah n + 2. Kita tahu bahwa jumlah kedua bilangan ini adalah 50. Tulis persamaan berdasarkan informasi :
      $$n + (n+2) = 50$$
      Setelah itu, selesaikan persamaan nya deangan cara tambahkan
      $$n + n + 2 = 50$$
      $$2n + 2 = 50$$
      <strong>Langkah 2:</strong> Kurangi 2 dari kedua sisi persamaan:
      $$2n + 2 - 2 = 50 - 2$$
      $$2n = 48$$
      Bagi kedua sisi persamaan dengan 2 untuk menemukan nilai n:
      $$\\frac{2n}{2}= \\frac{48}{2}$$
      <strong>Langkah 3:</strong> Sekarang, substitusi
      $$n = 24$$
      ke dalam
      $$n + 2$$
      untuk menemukan bilangan kedua:
      $$n + 2 = 24 + 2 = 26$$
      Jadi, bilangan pertama adalah n = 24 dan bilangan kedua adalah n + 2 = 26.
      Oleh karena itu, jawaban yang benar adalah pilihan B.
    </p>`,
  },
  {
    question: "Seorang petani memiliki sejumlah ayam dan kambing di peternakannya. Jumlah total hewan di peternakan tersebut adalah 20 ekor dan jumlah total kaki hewan tersebut adalah 58. Ayam memiliki 2 kaki sedangkan kambing memiliki 4 kaki. Berapa jumlah ayam dan kambing yang dimiliki oleh petani?",
    answer: [
      { Text: "11 ekor dan 9 ekor", correct: true },
      { Text: "5 ekor dan 8 ekor", correct: false },
      { Text: "12 ekor dan 9 ekor", correct: false },
      { Text: "7 ekor dan 5 ekor", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Mari kita asumsikan jumlah ayam yang dimiliki petani adalah x dan jumlah kambing adalah y. Selanjutnya kita dapat menyusun dua persamaan berdasarkan informasi yang diberikan. 
      Jumlah total hewan adalah 20 ekor: 
      $$x+y=20$$
      Jumlah total kaki hewan adalah 58 ekor:
      $$2x+4y=58$$
      <strong>Langkah 2:</strong> Kita akan mengalikan persamaan pertama dengan 2 untuk menyingkirkan variabel x:
      $$\\begin{bmatrix}x+y=20\\\\2x+4y=58\\end{bmatrix}\\left(\\begin{array}{c}\\times2\\\\ \\times1\\end{array}\\right)$$
      Kemudian kita kurangkan dengan persamaan kedua:
      $$\\frac{\\begin{bmatrix}2x+2y=40\\\\2x+4y=58\\end{bmatrix}}{−2y=−18}-$$
      Kita sederhanakan bentuk y
      $$y=\\frac{-18}{-2}&&
      $$y=9$$
      <strong>Langkah 3:</strong> Substitusikan nilai y ke dalam salah satu persamaan awal untuk mencari nilai x. Mari kita gunakan persamaan pertama:
      $$x+y=20$$
      $$x+(9)=20$$
      Kita pindahkan nilai 9
      $$x=20-9$$
      $$x=11$$
      Oleh karena itu, jawaban yang benar adalah pilihan A.
    </p>`,
  },
  {
    question: "Tentukan nilai x, y, dan z $$\\begin{bmatrix}2x+y−z=9\\\\5x−2y+3z=13\\\\x + 4y + 2z =39\\end{bmatrix}$$",
    answer: [
      { Text: "x = 3, y = 7, z = 4", correct: true },
      { Text: "x = 7, y = 5, z = 3", correct: false },
      { Text: "x = 7, y = 3, z = 5", correct: false },
      { Text: "x = 3, y = 5, z = 4", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Kurangkan persamaan (1) dan (2) untuk menghilangkan nilai z, kita samakan terdahulu nilai z:
      $$\\begin{bmatrix}2x+y−z=9\\\\5x−2y+3z=13\\end{bmatrix}\\left(\\begin{array}{c}\\times3\\\\ \\times1\\end{array}\\right)$$
      Setelah disamakan baru kita eleminasi
      $$\\frac{\\begin{bmatrix}6x+3y−3z=27\\\\5x−2y+3z=13\\end{bmatrix}}{11x+y=40}+$$

      <strong>Langkah 2:</strong> Kalikan persamaan (1) dan (3) untuk menghilangkan nilai z, kita samakan nilai z:
      $$\\begin{bmatrix}2x+y−z=9\\\\x + 4y + 2z =39\\end{bmatrix}\\left(\\begin{array}{c}\\times2\\\\ \\times1\\end{array}\\right)$$
      Setelah disamakan baru kita eleminasi
      $$\\frac{\\begin{bmatrix}4x+2y−2z=18\\\\x + 4y + 2z =39\\end{bmatrix}}{5x+6y=57}+$$

      <strong>Langkah 3:</strong>  Sekarang kita mempunyai 2 persamaan baru yang berada di Langkah 1 dan di Langkah 2, sekarang kita eliminasi lagi 2 persamaan baru tersebut untuk mencari nilai x
      $$\\begin{bmatrix}11x+y=40\\\\5x+6y=57\\end{bmatrix}\\left(\\begin{array}{c}\\times6\\\\ \\times1\\end{array}\\right)$$
      Setelah kita samakan persamaan y selanjutnya kita eliminasi
      $$\\frac{\\begin{bmatrix}66x+6y=240\\\\5x+6y=57\\end{bmatrix}}{61x=183}-$$
      Kita sederhanakan bentuk x
      $$x=\\frac{183}{61}$$
      $$x=3$$

      <strong>Langkah 4:</strong> Setelah mendapatkan nilai x, kita akan masukkan nilai x ke salah satu persamaan baru untuk mendapatkan nilai y
      $$11x+y=40$$
      $$11(3)+y=40$$
      Lalu kita jumlahkan
      $$33+y=40$$
      Kita pindahkan angka 33 menjadi negatif dan mendapatkan hasil
      $$y=40-33$$
      $$y=7$$

      <strong>Langkah 5:</strong> Setelah mendapatkan nilai y dan x selanjutnya kita masukkan nilai x dan y ke salah satu persamaan yang awal untuk mendapatkan nilai z
      $$2x+y−z=9$$
      $$2(3)+7−z=9$$
      Kita jumlahkan persamaan tersebut
      $$6+7−z=9$$
      $$13−z=9$$
      Kita pindahkan angka 13 menjadi negatif dan mendapatkan hasil
      $$z=13-9$$
      $$z=4$$

      Jadi, nilai x, y, dan z $$\\begin{bmatrix}x=3,&y=7,&z=4\\end{bmatrix}$$
      Oleh karena itu, jawaban yang benar adalah pilihan A.
    </p>`,
  },
];

const questionNumber14 = document.getElementById("question-numb1-4");
const questionElement14 = document.getElementById("question1-4");
const answerButton14 = document.getElementById("answer1-4");
const explainDiv14 = document.getElementById("explain-div1-4");
const explainElement14 = document.getElementById("explain1-4");
const nextButton14 = document.getElementById("next-button1-4");

let currentQuestionQuizz14 = 0;
let explainQuizz14 = 0;
let score14 = 0;

function startQuiz14() {
  currentQuestionQuizz14 = 0;
  score14 = 0;
  showQuestion14();
}

function showQuestion14() {
  resetState14();
  let currentQuestionn14 = questions14[currentQuestionQuizz14];
  let questionNo = currentQuestionQuizz14 + 1;
  questionElement14.innerHTML = questionNo + ". " + currentQuestionn14.question;
  questionNumber14.innerHTML = `${questionNo}/${questions14.length}`;
  explainElement14.innerHTML = currentQuestionn14.explain;

  currentQuestionn14.answer.forEach((answer) => {
    const button14 = document.createElement("button");
    button14.innerHTML = answer.Text;
    button14.classList.add(
      "border-hitam",
      "w-full",
      "text-center",
      "p-3",
      "my-3",
      "rounded-md",
      "cursor-pointer",
      "disabled:cursor-no-drop"
    );
    answerButton14.appendChild(button14);
    if (answer.correct) {
      button14.dataset.correct = answer.correct;
    }
    button14.addEventListener("click", selectAnswer14);
  });
  renderMathInElement(questionElement14);
  renderMathInElement(explainElement14);
  renderMathInElement(answerButton14);
}

function resetState14() {
  explainDiv14.style.display = "none";
  nextButton14.style.display = "none";
  while (answerButton14.firstChild) {
    answerButton14.removeChild(answerButton14.firstChild);
  }
}

function selectAnswer14(e) {
  const selectedButton = e.target;
  const correct = selectedButton.dataset.correct === "true";
  if (correct) {
    selectedButton.classList.add("bg-color-2-50");
    score14++;
  } else {
    selectedButton.classList.add("bg-color-1-50");
  }
  Array.from(answerButton14.children).forEach((button) => {
    if (button.dataset.correct === "true") {
      button.classList.add("bg-color-2-50");
    }
    button.disabled = true;
  });
  nextButton14.style.display = "block";
  explainDiv14.style.display = "block";
}

function showscore14() {
  resetState14();
  questionElement14.innerHTML = `Skor mu ${score14} dari ${questions14.length}!`;
  nextButton14.innerHTML = "Ulangi Quiz";
  nextButton14.style.display = "block";
  questionNumber14.style.display = "none";
}

function handlenextButton14() {
  currentQuestionQuizz14++;
  if (currentQuestionQuizz14 < questions14.length) {
    showQuestion14();
  } else {
    showscore14();
  }
}

nextButton14.addEventListener("click", () => {
  if (currentQuestionQuizz14 < questions14.length) {
    handlenextButton14();
  } else {
    startQuiz14();
  }
});

startQuiz14();
