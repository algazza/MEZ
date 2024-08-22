const questions12 = [
  {
    question:
      "Nilai x dan y berturut-turut yang memenuhi persamaan $$x + 3y = 9$$ $$2x - y = 4$$",
    answer: [
      { Text: "2 dan 3", correct: false },
      { Text: "3 dan 2", correct: true },
      { Text: "3 dan 5", correct: false },
      { Text: "2 dan 4", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Kita akan mengeliminasi variabel x untuk menemukan nilai y dengan cara mengurangkan persamaan pertama dan kedua.
      $$\\begin{bmatrix}x + 3y = 9 \\\\2x - y = 4 \\end{bmatrix}\\left(\\begin{array}{c}\\times2\\\\ \\times1\\end{array}\\right)$$
      Setelah dikalikan kita eleminasi nilai x 
      $$\\frac{\\begin{bmatrix}2x + 6y = 18 \\\\2x-y = 4\\end{bmatrix}}{7y=14}-$$

      Kita sederhanakan angka y
      $$y=\\frac{14}{7}$$
      Lalu kita mendapatkan hasil
      $$y=2$$

      <strong>Langkah 2:</strong> Setelah mendapatkan nilai untuk y, kita bisa menggantikan nilai tersebut ke dalam salah satu persamaan asli untuk mencari nilai x.
      $$x+3y=9$$
      Ganti huruf y dengan angka 2 yang kita temukan tadi
      $$x+3(2)=9$$
      $$x+6=9$$
      Kita pindahkan angka 6 menjadi negatif ke sisi kanan
      $$x=9-6$$
      $$x=3$$

      Sehingga kita mendapatkan jawaban
      $$\\begin{bmatrix}x=3 & y=2 \\end{bmatrix}$$
      Oleh karena itu, jawaban yang benar adalah pilihan B.
    </p>`,
  },
  {
    question: "Umur Xavi 6 tahun lebih tua dari Yogi. Sedangkan jumlah umur mereka adalah 42 tahun. Berapakah umur masing-masing",
    answer: [
      { Text: "Xavi 24 tahun dan Yogi 18 tahun", correct: true },
      { Text: "Xavi 27 tahun dan Yogi 15 tahun", correct: false },
      { Text: "Xavi 26 tahun dan Yogi 16 tahun", correct: false },
      { Text: "Xavi 25 tahun dan Yogi 17 tahun", correct: false },
    ],
    explain: `<p> 
      <strong>Langkah 1:</strong> Mari kita asumsikan umur Xavi = x dan umur Yogi = y. Maka kita akan mendapatkan persamaan
      $$\\begin{bmatrix}x=6+y\\\\x+y=42\\end{bmatrix}$$

      <strong>Langkah 2:</strong> Kita akan mencari nilai dari persamaan tersebut
      $$x+y=42$$
      Karena x sudah diketahui nilainya adalah 6 + y maka kita masukkan dalam persamaan 
      $$(6+y)+y=42$$

      <strong>Langkah 3:</strong> Setelah itu kita akan subsitusikan untuk mencari nilai y
      $$6+y+y=42$$
      Kita pisahkan angka dengan angka, huruf dengan huruf
      $$y+y=42-6$$
      $$2y=36$$
      Kita sederhanakan hasil dari y tersebut dengan cara membagi 2 dan kita mendapatkan hasil
      $$y=18$$

      <strong>Langkah 4:</strong> Setelah mendapatkan nilai untuk y, kita bisa memasukkan hasil tersebut untuk mencari nilai x.
      $$x=6+y$$
      $$x=6+18$$
      Dan kita akan mendapatkan
      $$x=24$$
      Jadi, umur Xavi adalah 24 tahun sedangkan umur Yogi adalan 18 tahun, jawaban yang benar adalah pilihan A.
    </p>`,
  },
  {
    question:
      "Harga 1 apel dan 1 blewah Rp.5.000. Jika harga 2 apel dan 1 blewah Rp.8.000. Maka harga 3 apel dan 5 blewah adalah...",
    answer: [
      { Text: "Rp.20.000", correct: false },
      { Text: "Rp.17.000", correct: false },
      { Text: "Rp.15.000", correct: false },
      { Text: "Rp.19.000", correct: true },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Mari kita asumsikan Apel = a dan Blewah = b. Maka kita akan mendapatkan persamaan
      $$\\begin{bmatrix}a+b=Rp.5.000 \\\\2a+b=Rp.8.000\\end{bmatrix}$$

      <strong>Langkah 2:</strong> Kita akan mencari nilai a dengan cara melakukan eleminasi
      $$\\begin{bmatrix}a+b=Rp.5000 \\\\2a+b=Rp.8000\\end{bmatrix}\\left(\\begin{array}{c}\\times2\\\\ \\times1\\end{array}\\right)$$

      Setelah kita kalikan, baru kita eleminasi
      $$\\frac{\\begin{bmatrix}2a+2b=Rp.10.000 \\\\2a+b=Rp.8000\\end{bmatrix}}{b=Rp.2.000}-$$

      <strong>Langkah 3:</strong> Setelah mendapatkan nilai b kita masukkan ke persamaan
      $$a+b=Rp.5.000$$
      $$a+(Rp.2.000)=Rp.5.000$$
      Lalu kita pindahkan Rp.2.000 ke sisi kanan dan akan mendapatkan hasil
      $$a=Rp.3.000$$

      <strong>Langkah 4:</strong> Setelah kita menemukan nilai a dan b maka kita masukkan nilai tersebut ke persamaan yang ditanyakan
      $$3a+5b=...$$
      $$3(Rp.3.000)+5(Rp.2.000)=...$$
      Dan kita akan mendapatkan hasil
      $$Rp.9.000+Rp.10.000=Rp.19.000$$
      Oleh karena itu, jawaban yang benar adalah pilihan D.
    </p>`,
  },
];

const questionNumber12 = document.getElementById("question-numb1-2");
const questionElement12 = document.getElementById("question1-2");
const answerButton12 = document.getElementById("answer1-2");
const explainDiv12 = document.getElementById("explain-div1-2");
const explainElement12 = document.getElementById("explain1-2");
const nextButton12 = document.getElementById("next-button1-2");

let currentQuestionQuizz12 = 0;
let explainQuizz12 = 0;
let score12 = 0;

function startQuiz12() {
  currentQuestionQuizz12 = 0;
  score12 = 0;
  showQuestion12();
}

function showQuestion12() {
  resetState12();
  let currentQuestionn12 = questions12[currentQuestionQuizz12];
  let questionNo = currentQuestionQuizz12 + 1;
  questionElement12.innerHTML = questionNo + ". " + currentQuestionn12.question;
  questionNumber12.innerHTML = `${questionNo}/${questions12.length}`;
  explainElement12.innerHTML = currentQuestionn12.explain;

  currentQuestionn12.answer.forEach((answer) => {
    const button12 = document.createElement("button");
    button12.innerHTML = answer.Text;
    button12.classList.add(
      "border-hitam",
      "w-full",
      "text-center",
      "p-3",
      "my-3",
      "rounded-md",
      "cursor-pointer",
      "disabled:cursor-no-drop"
    );
    answerButton12.appendChild(button12);
    if (answer.correct) {
      button12.dataset.correct = answer.correct;
    }
    button12.addEventListener("click", selectAnswer12);
  });
  renderMathInElement(document.getElementById("question1-2"));
  renderMathInElement(document.getElementById("explain1-2"));
}

function resetState12() {
  explainDiv12.style.display = "none";
  nextButton12.style.display = "none";
  while (answerButton12.firstChild) {
    answerButton12.removeChild(answerButton12.firstChild);
  }
}

function selectAnswer12(e) {
  const selectedButton = e.target;
  const correct = selectedButton.dataset.correct === "true";
  if (correct) {
    selectedButton.classList.add("bg-color-2-50");
    score12++;
  } else {
    selectedButton.classList.add("bg-color-1-50");
  }
  Array.from(answerButton12.children).forEach((button) => {
    if (button.dataset.correct === "true") {
      button.classList.add("bg-color-2-50");
    }
    button.disabled = true;
  });
  nextButton12.style.display = "block";
  explainDiv12.style.display = "block";
}

function showscore12() {
  resetState12();
  questionElement12.innerHTML = `Skor mu ${score12} dari ${questions12.length}!`;
  nextButton12.innerHTML = "Ulangi Quiz";
  nextButton12.style.display = "block";
  questionNumber12.style.display = "none";
}

function handlenextButton12() {
  currentQuestionQuizz12++;
  if (currentQuestionQuizz12 < questions12.length) {
    showQuestion12();
  } else {
    showscore12();
  }
}

nextButton12.addEventListener("click", () => {
  if (currentQuestionQuizz12 < questions12.length) {
    handlenextButton12();
  } else {
    startQuiz12();
  }
});

startQuiz12();
