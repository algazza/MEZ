const questions13 = [
  {
    question:
      "Tentukan nilai x, y, dan z $$\\begin{bmatrix}x + 3y + 2z = 16 \\\\2x + 4y – 2z = 12 \\\\x + y + 4z = 20\\end{bmatrix}$$",
    answer: [
      { Text: "x = 8, y = 2, z = 3", correct: false },
      { Text: "x = 7, y = 1, z = 3", correct: true },
      { Text: "x = 7, y = 2, z = 4", correct: false },
      { Text: "x = 6, y = 1, z = 2", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Kita akan mencari salah satu variabel yang ingin di eliminasi, kita coba eliminasi variabel z dengan cara <strong>menjumlahkan</strong> untuk menghilangkan nilai z yang negatif
      $$\\frac{\\begin{bmatrix}x+3y+2z=16 \\\\2x+4y−2z=12 \\end{bmatrix}}{3x+7y=28}+$$

      <strong>Langkah 2:</strong> Setelah mengambil persamaan 2 pertama untuk menghilangkan z, selanjutnya kita mengambil persamaan pertama dan persamaan terakhir untuk menghilangkan z juga
      $$\\begin{bmatrix}x+3y+2z=16 \\\\x+y+4z=20 \\end{bmatrix}\\left(\\begin{array}{c}\\times2\\\\ \\times1\\end{array}\\right)$$
      
      Setelah kita kalikan untuk menyamakan nilai dari z, selanjutnya akan kita eleminasi
      $$\\frac{\\begin{bmatrix}2x+6y+4z=32 \\\\x+y+4z=20 \\end{bmatrix}}{x+5y=12}-$$

      <strong>Langkah 3:</strong> Sekarang kita mempunyai 2 persamaan baru yang berada di Langkah 1 dan di Langkah 2, sekarang kita eliminasi lagi 2 persamaan baru tersebut untuk mencari nilai y
      $$\\begin{bmatrix}x+5y=12\\\\3x+7y=28 \\end{bmatrix}\\left(\\begin{array}{c}\\times3\\\\ \\times1\\end{array}\\right)$$
      Setelah kita samakan nilai dari x lalu kita akan mengeleminasi
      $$\\frac{\\begin{bmatrix}3x+15y=36\\\\3x+7y=28 \\end{bmatrix}}{8y=8}-$$
      Lalu kita sederhanakan bentuk y dan kita mendapatkan hasil
      $$y=1$$

      <strong>Langkah 4:</strong> Setelah mendapatkan nilai y, kita akan masukkan nilai y ke salah satu persamaan baru untuk mendapatkan nilai x
      $$x+5y=12$$
      $$x+5(1)=12$$
      Lalu kita jumlahkan
      $$x+5=12$$
      Kita pindahkan angka 5 menjadi negatif dan mendapatkan hasil
      $$x=7$$

      <strong>Langkah 5:</strong> Setelah mendapatkan nilai y dan x selanjutnya kita masukkan nilai x dan y ke salah satu persamaan yang awal untuk mendapatkan nilai z
      $$x+3y+2z=16$$
      $$(7)+3(1)+2z=16$$
      Kita jumlahkan persamaan tersebut
      $$7+3+2z=16$$
      $$10+2z=16$$
      Kita pindahkan angka 10 menjadi negatif dan mendapatkan hasil
      $$2z=6$$

      Jadi, nilai x, y, dan z $$\\begin{bmatrix}x=7,&y=1,&z=3\\end{bmatrix}$$
      Oleh karena itu, jawaban yang benar adalah pilihan B.
    </p>`,
  },
  {
    question:
      "Tentukan nilai x, y, dan z $$\\begin{bmatrix}x + 2y + 6z = 24\\\\2x + 6y – 4z = 18\\\\x + y + 6z = 36\\end{bmatrix}$$",
    answer: [
      { Text: "x = 48.25, y = 10 , z = 3/6", correct: false },
      { Text: "x = 46.75, y = -10, z= 4/8", correct: false },
      { Text: "x = 45.75, y = -12, z= 3/8", correct: true },
      { Text: "x = 44.25, y = 12, z = 4/6", correct: false },
    ],
    explain: `<p> 
      <strong>Langkah 1:</strong> Kita akan mengeleminasi nilai x dengan persamaan 1 dan 2
      $$\\begin{bmatrix}x + 2y + 6z = 24\\\\2x + 6y - 4z = 18\\end{bmatrix}\\left(\\begin{array}{c}\\times2\\\\ \\times1\\end{array}\\right)$$
      Setelah itu kita eleminasi
      $$\\frac{\\begin{bmatrix}2x + 4y + 12z = 48\\\\2x + 6y – 4z = 18\\end{bmatrix}}{-2y+16z=30}-$$

      <strong>Langkah 2:</strong> Dikarenakan nilai x dan z dipersamaan 1 dan 3 memmiliki nilai yang sama, kiata eleminasi terlebih dahulu untuk mencari nilai y  
      $$\\frac{\\begin{bmatrix}x+2y+6z=24\\\\x+y+6z=36\\end{bmatrix}}{y=-12}-$$

      <strong>Langkah 3:</strong> Kita sudah mendapatkan nilai y, kita masukkan nilai tersebut ke persamaan baru
      $$-2(-12)+16z=30$$
      $$24+16z=30$$
      Kita pindahkan angka 24 menjadi negatif 
      $$16z=30-24$$
      $$16z=6$$
      Kita sederhanakan bentuk z
      $$z=\\frac{6}{16}$$
      $$z=\\frac{3}{8}$$

      <strong>Langkah 4:</strong> Setelah mendapatkan nilai y dan z, kita masukkan di salah satu persamaan sebelumnya
      $$x+2(-12)+6(\\frac{3}{8})=24$$
      $$x-24+\\frac{18}{8}=24$$
      Kita sederhanakan bentuk pembagian
      $$x-24+\\frac{9}{4}=24$$
      Kita ubah dalam bentuk desimal
      $$x-24+2.25=24$$
      $$x-21.75=24$$
      Setelah itu kita pindahkan bentuk desimal tersebut menjadi positif
      $$x=24+21.75$$
      $$x=45.75$$

      Jadi, nilai x, y, dan z $$\\begin{bmatrix}x=45.75,&y=-12,&z=\\frac{3}{8}\\end{bmatrix}$$
      Oleh karena itu, jawaban yang benar adalah pilihan C.
    </p>`,
  },
  {
    question:
      "Jumlah uang Xico, Yamal, Zidann, Rp.150.000,00. Jumlah uang Xico dan Yamal Rp.30.000,00 kurang dari dua kali uang Zidan. Jumlah uang Xico dan Zidan Rp.30.000,00 lebih dari dua kali uang Yamal, jadi berapa uang Xico, Yamal, dan Zidan secara berturut-turut?",
    answer: [
      { Text: "Rp.50.000, Rp.40.000, Rp.60.000", correct: true },
      { Text: "Rp.30.000, Rp.60.000, Rp.60.000", correct: false },
      { Text: "Rp.60.000, Rp.40.000, Rp.50.000", correct: false },
      { Text: "Rp.60.000, Rp.60.000, Rp.30.000", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Mari kita sebut jumlah uang yang dimiliki Xico sebagai x, Yamal sebagai y, dan Zidan sebagai z.
      Dari informasi yang diberikan, kita dapatkan sistem persamaan sebagai berikut:
      <br>
      1. Total uang mereka adalah Rp.150.000: 
      $$x+y+z=150.000$$
      2. Jumlah uang Xico dan Yamal adalah Rp.30.000 kurang dari dua kali uang Zidan: 
      $$x+y=2z-30.000$$
      $$x+y-2z=-30.000$$
      3. Jumlah uang Xico dan Zidan adalah Rp.30.000 lebih dari dua kali uang Yamal: 
      $$x+z=30.000+2y$$
      $$x-2y+z=30.000$$

      <strong>Langkah 2:</strong> Setelah menemukan persamaannya, sekarang lakukan eliminasi persamaan 1 dan 2 untuk mendapatkan nilai z
      $$\\frac{\\begin{bmatrix}x+y+z=150.000\\\\x+y-2z=-30.000\\end{bmatrix}}{3z=180.000}-$$
      Lalu kita sederhanakan
      $$z=\\frac{180.000}{3}$$
      $$z=60.000$$

      <strong>Langkah 3:</strong> Selanjutnya kita akan melakukan eliminasi persamaan 1 dan 3 untuk mendapatkan nilai y
      $$\\frac{\\begin{bmatrix}x+y+z=150.000\\\\x-2y+z=30.000\\end{bmatrix}}{3y=120.000}-$$
      Lalu kita sederhanakan
      $$y=\\frac{120.000}{3}$$
      $$y=40.000$$

      <strong>Langkah 4:</strong> Setelah kita mendapatkan hasil y dan z kita masukkan ke salah satu persamaan untuk mendapatkan hasil x
      $$x+y+z=150.000$$
      $$x+(40.000)+(60.000)=150.000$$
      Jumlahkan persamaan tersebut
      $$x+100.000=150.000$$
      $$x=50.000$$
      Kita sudah mendapatkan hasil x y z yaitu
      $$\\begin{bmatrix}x=50.000,&y=40.000,&z=60.000\\end{bmatrix}$$

      Oleh karena itu, jawaban yang benar adalah pilihan A.
    </p>`,
  },
];

const questionNumber13 = document.getElementById("question-numb1-3");
const questionElement13 = document.getElementById("question1-3");
const answerButton13 = document.getElementById("answer1-3");
const explainDiv13 = document.getElementById("explain-div1-3");
const explainElement13 = document.getElementById("explain1-3");
const nextButton13 = document.getElementById("next-button1-3");

let currentQuestionQuizz13 = 0;
let explainQuizz13 = 0;
let score13 = 0;

function startQuiz13() {
  currentQuestionQuizz13 = 0;
  score13 = 0;
  showQuestion13();
}

function showQuestion13() {
  resetState13();
  let currentQuestionn13 = questions13[currentQuestionQuizz13];
  let questionNo = currentQuestionQuizz13 + 1;
  questionElement13.innerHTML = questionNo + ". " + currentQuestionn13.question;
  questionNumber13.innerHTML = `${questionNo}/${questions13.length}`;
  explainElement13.innerHTML = currentQuestionn13.explain;

  currentQuestionn13.answer.forEach((answer) => {
    const button13 = document.createElement("button");
    button13.innerHTML = answer.Text;
    button13.classList.add(
      "border-hitam",
      "w-full",
      "text-center",
      "p-3",
      "my-3",
      "rounded-md",
      "cursor-pointer",
      "disabled:cursor-no-drop"
    );
    answerButton13.appendChild(button13);
    if (answer.correct) {
      button13.dataset.correct = answer.correct;
    }
    button13.addEventListener("click", selectAnswer13);
  });
  renderMathInElement(document.getElementById("question1-3"));
  renderMathInElement(document.getElementById("explain1-3"));
}

function resetState13() {
  explainDiv13.style.display = "none";
  nextButton13.style.display = "none";
  while (answerButton13.firstChild) {
    answerButton13.removeChild(answerButton13.firstChild);
  }
}

function selectAnswer13(e) {
  const selectedButton = e.target;
  const correct = selectedButton.dataset.correct === "true";
  if (correct) {
    selectedButton.classList.add("bg-color-2-50");
    score13++;
  } else {
    selectedButton.classList.add("bg-color-1-50");
  }
  Array.from(answerButton13.children).forEach((button) => {
    if (button.dataset.correct === "true") {
      button.classList.add("bg-color-2-50");
    }
    button.disabled = true;
  });
  nextButton13.style.display = "block";
  explainDiv13.style.display = "block";
}

function showscore13() {
  resetState13();
  questionElement13.innerHTML = `Skor mu ${score13} dari ${questions13.length}!`;
  nextButton13.innerHTML = "Ulangi Quiz";
  nextButton13.style.display = "block";
  questionNumber13.style.display = "none";
}

function handlenextButton13() {
  currentQuestionQuizz13++;
  if (currentQuestionQuizz13 < questions13.length) {
    showQuestion13();
  } else {
    showscore13();
  }
}

nextButton13.addEventListener("click", () => {
  if (currentQuestionQuizz13 < questions13.length) {
    handlenextButton13();
  } else {
    startQuiz13();
  }
});

startQuiz13();
