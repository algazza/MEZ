const questions22 = [
  {
    question: "Berapakah hasil  $$\\left(3\\times4\\right)^{3}$$",
    answer: [
      { Text: "1.770", correct: false },
      { Text: "1.725", correct: false },
      { Text: "1.800", correct: false },
      { Text: "1.728", correct: true },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Untuk menyelesaikan soal tersebut, kita perlu menggunakan rumus berikut
      $$\\left(ab\\right)^{n} = a^{n}\\times b^{n}$$
      <strong>Langkah 2:</strong> Masukan soal ke rumus yang ada di atas
      $$\\left(3\\times4\\right)^{3} = 3^{3}\\times 4^{3}$$
      $$27\\times64$$
      Jadi, hasilnya adalah
      $$1.728$$
      Oleh karena itu, jawaban yang benar adalah pilihan D.
    </p>`,
  },
  {
    question: "Berapa hasil dari $$\\left(\\frac{10}{5}\\right)^{2}$$",
    answer: [
      { Text: "2", correct: false },
      { Text: "5", correct: false },
      { Text: "4", correct: true },
      { Text: "7", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Hasil dari
      $$\\left(\\frac{10}{5}\\right)^{2}$$
      dapat kita selesaikan dengan menggunakan rumus berikut
      $$\\frac{a^{n}}{b^{n}}$$
      <strong>Langkah 2:</strong> Selanjutnya, seperti pada penjelasan sebelumnya, kita dapat memasukkan soal ke dalam rumus
      $$\\left(\\frac{10}{5}\\right)^{2} = \\frac{10^{2}}{5^{2}}$$
      $$\\frac{100}{25}$$
      Jadi, hasilnya adalah
      $$4$$
      Oleh karena itu, jawaban yang benar adalah pilihan C.
    </p>`,
  },
  {
    question: "Berapakah hasil dari $$25^{0}$$",
    answer: [
      { Text: "0", correct: false },
      { Text: "5", correct: false },
      { Text: "2", correct: false },
      { Text: "1", correct: true },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Dalam matematika, ketika suatu bilangan dipangkatkan dengan nol, hasilnya selalu satu, kecuali basisnya adalah nol (untuk basis nol, hasilnya tidak terdefinisi). Ini adalah konvensi yang diakui secara umum dalam aljabar.
      <strong>Langkah 2:</strong> Dalam kasus 25⁰, basisnya adalah 25, dan eksponennya adalah 0. Menurut konvensi tersebut, ketika bilangan dipangkatkan dengan nol, hasilnya adalah satu.
      Jadi, hasil nya adalah
      $$1$$
      Oleh karena itu, jawaban yang benar adalah pilihan D.
    </p>`,
  },
];

const questionNumber22 = document.getElementById("question-numb2-2");
const questionElement22 = document.getElementById("question2-2");
const answerButton22 = document.getElementById("answer2-2");
const explainDiv22 = document.getElementById("explain-div2-2");
const explainElement22 = document.getElementById("explain2-2");
const nextButton22 = document.getElementById("next-button2-2");

let currentQuestionQuizz22 = 0;
let explainQuizz22 = 0;
let score22 = 0;

function startQuiz22() {
  currentQuestionQuizz22 = 0;
  score22 = 0;
  showQuestion22();
}

function showQuestion22() {
  resetState22();
  let currentQuestionn22 = questions22[currentQuestionQuizz22];
  let questionNo = currentQuestionQuizz22 + 1;
  questionElement22.innerHTML = questionNo + ". " + currentQuestionn22.question;
  questionNumber22.innerHTML = `${questionNo}/${questions22.length}`;
  explainElement22.innerHTML = currentQuestionn22.explain;

  currentQuestionn22.answer.forEach((answer) => {
    const button22 = document.createElement("button");
    button22.innerHTML = answer.Text;
    button22.classList.add(
      "border-hitam",
      "w-full",
      "text-center",
      "p-3",
      "my-3",
      "rounded-md",
      "cursor-pointer",
      "disabled:cursor-no-drop"
    );
    answerButton22.appendChild(button22);
    if (answer.correct) {
      button22.dataset.correct = answer.correct;
    }
    button22.addEventListener("click", selectAnswer22);
  });
  renderMathInElement(questionElement22);
  renderMathInElement(explainElement22);
  renderMathInElement(answerButton22);
}

function resetState22() {
  explainDiv22.style.display = "none";
  nextButton22.style.display = "none";
  while (answerButton22.firstChild) {
    answerButton22.removeChild(answerButton22.firstChild);
  }
}

function selectAnswer22(e) {
  const selectedButton = e.target;
  const correct = selectedButton.dataset.correct === "true";
  if (correct) {
    selectedButton.classList.add("bg-color-2-50");
    score22++;
  } else {
    selectedButton.classList.add("bg-color-1-50");
  }
  Array.from(answerButton22.children).forEach((button) => {
    if (button.dataset.correct === "true") {
      button.classList.add("bg-color-2-50");
    }
    button.disabled = true;
  });
  nextButton22.style.display = "block";
  explainDiv22.style.display = "block";
}

function showscore22() {
  resetState22();
  questionElement22.innerHTML = `Skor mu ${score22} dari ${questions22.length}!`;
  nextButton22.innerHTML = "Ulangi Quiz";
  nextButton22.style.display = "block";
  questionNumber22.style.display = "none";
}

function handlenextButton22() {
  currentQuestionQuizz22++;
  if (currentQuestionQuizz22 < questions22.length) {
    showQuestion22();
  } else {
    showscore22();
  }
}

nextButton22.addEventListener("click", () => {
  if (currentQuestionQuizz22 < questions22.length) {
    handlenextButton22();
  } else {
    startQuiz22();
  }
});

startQuiz22();
