const questions23 = [
  {
    question: "Berapakah $$625^{1}$$",
    answer: [
      { Text: "1", correct: false },
      { Text: "5", correct: false },
      { Text: "625", correct: true },
      { Text: "0", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Eksponen pada suatu bilangan menunjukkan berapa kali bilangan itu harus dikalikan dengan dirinya sendiri. Ketika eksponen adalah 1, itu berarti kita hanya mengalikan bilangan dengan dirinya sendiri satu kali. Sehingga, 625^{1}
yang berarti kita hanya mengalikan 625 dengan dirinya sendiri satu kali, yang hasilnya tetap 625.
      <strong>Langkah 2:</strong> Dalam hal ini, kita hanya memiliki satu 625 yang dikalikan, sehingga hasilnya tetap sama dengan 625.
      Jadi, hasilnya adalah
      $$625$$
      Oleh karena itu, jawaban yang benar adalah pilihan C.
    </p>`,
  },
  {
    question: "Hitunglah  $$4^{-3}$$",
    answer: [
      { Text: "\\frac{1}{10}", correct: false },
      { Text: "\\frac{1}{12}", correct: false },
      { Text: "\\frac{1}{64}", correct: true },
      { Text: "\\frac{1}{60}", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Hasil dari 
      $$4^{-3}$$
      dapat kita selesaika dengan cara menggunakan rumus ini sebagai landasan
      $$a^{-n} = \\frac{1}{a^{n}}$$
      <strong>Langkah 2:</strong> Masukkan soal ke dalam rumus tersebut
      $$4^{-3} = \\frac{1}{4^{3}}$$
      Jadi, hasilnya adalah
      $$\\frac{1}{64}$$
      Oleh karena itu, jawaban yang benar adalah pilihan C.
    </p>`,
  },
  {
    question: "Berapa hasil dari $$\\left(8^{\\frac{1}{3}}\\right)^{2}$$",
    answer: [
      { Text: "8", correct: false },
      { Text: "4", correct: true },
      { Text: "5", correct: false },
      { Text: "2", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Untuk menghitung nilai dari 
      $$\\left(8^{\\frac{1}{3}}\\right)^{2}$$
      kita mencari akar pangkat tiga dari 8. 
      $$8^{\\frac{1}{3}} = \\sqrt[3]{8} = 2$$ 
      <strong>Langkah 2:</strong> Kuadratkan nilai yang didapat.
      2^{2} = 4
      Jadi, hasilnya adalah
      $$4$$
      Oleh karena itu, jawaban yang benar adalah pilihan B.
    </p>`,
  },
];

const questionNumber23 = document.getElementById("question-numb2-3");
const questionElement23 = document.getElementById("question2-3");
const answerButton23 = document.getElementById("answer2-3");
const explainDiv23 = document.getElementById("explain-div2-3");
const explainElement23 = document.getElementById("explain2-3");
const nextButton23 = document.getElementById("next-button2-3");

let currentQuestionQuizz23 = 0;
let explainQuizz23 = 0;
let score23 = 0;

function startQuiz23() {
  currentQuestionQuizz23 = 0;
  score23 = 0;
  showQuestion23();
}

function showQuestion23() {
  resetState23();
  let currentQuestionn23 = questions23[currentQuestionQuizz23];
  let questionNo = currentQuestionQuizz23 + 1;
  questionElement23.innerHTML = questionNo + ". " + currentQuestionn23.question;
  questionNumber23.innerHTML = `${questionNo}/${questions23.length}`;
  explainElement23.innerHTML = currentQuestionn23.explain;

  currentQuestionn23.answer.forEach((answer) => {
    const button23 = document.createElement("button");
    button23.innerHTML = answer.Text;
    button23.classList.add(
      "border-hitam",
      "w-full",
      "text-center",
      "p-3",
      "my-3",
      "rounded-md",
      "cursor-pointer",
      "disabled:cursor-no-drop"
    );
    answerButton23.appendChild(button23);
    if (answer.correct) {
      button23.dataset.correct = answer.correct;
    }
    button23.addEventListener("click", selectAnswer23);
  });
  renderMathInElement(questionElement23);
  renderMathInElement(explainElement23);
  renderMathInElement(answerButton23);
}

function resetState23() {
  explainDiv23.style.display = "none";
  nextButton23.style.display = "none";
  while (answerButton23.firstChild) {
    answerButton23.removeChild(answerButton23.firstChild);
  }
}

function selectAnswer23(e) {
  const selectedButton = e.target;
  const correct = selectedButton.dataset.correct === "true";
  if (correct) {
    selectedButton.classList.add("bg-color-2-50");
    score23++;
  } else {
    selectedButton.classList.add("bg-color-1-50");
  }
  Array.from(answerButton23.children).forEach((button) => {
    if (button.dataset.correct === "true") {
      button.classList.add("bg-color-2-50");
    }
    button.disabled = true;
  });
  nextButton23.style.display = "block";
  explainDiv23.style.display = "block";
}

function showscore23() {
  resetState23();
  questionElement23.innerHTML = `Skor mu ${score23} dari ${questions23.length}!`;
  nextButton23.innerHTML = "Ulangi Quiz";
  nextButton23.style.display = "block";
  questionNumber23.style.display = "none";
}

function handlenextButton23() {
  currentQuestionQuizz23++;
  if (currentQuestionQuizz23 < questions23.length) {
    showQuestion23();
  } else {
    showscore23();
  }
}

nextButton23.addEventListener("click", () => {
  if (currentQuestionQuizz23 < questions23.length) {
    handlenextButton23();
  } else {
    startQuiz23();
  }
});

startQuiz23();
