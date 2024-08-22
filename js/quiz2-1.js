const questions21 = [
  {
    question:
      "Berapakah hasil $$2^{3}\\times2^{4}$$",
    answer: [
      { Text: "$$2^{4}$$", correct: false },
      { Text: "$$2^{7}$$", correct: true },
      { Text: "$$2^{1}$$", correct: false },
      { Text: "$$2^{3}$$", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Ketika kita mengalikan dua bilangan berpangkat dengan basis yang sama, kita dapat menjumlahkan pangkatnya. Aturan ini dinyatakan sebagai:
      $$a^{m}\\times a^{n}=a^{m+n}$$
      <strong>Langkah 2:</strong> Gunakan Aturan Perkalian Bilangan Berpangkat dan kita terapkan aturan tersebut:
      $$2^{3}\\times 2^{4}=2^{3+4}$$
      Lalu kita tambahkan
      $$2^{3+4}=2^{7}$$
      Oleh karena itu, jawaban yang benar adalah pilihan B.
    </p>`,
  },
  {
    question:
      "Berapakah hasil $$\\frac{5^{6}}{5^{3}}$$",
    answer: [
      { Text: "$$5^{4}$$", correct: false },
      { Text: "$$5^{6}$$", correct: false },
      { Text: "$$5^{2}$$", correct: false },
      { Text: "$$5^{3}$$", correct: true },
    ],
    explain: `<p> 
      <strong>Langkah 1:</strong> Ketika kita membagikan dua bilangan berpangkat dengan basis yang sama, kita dapat mengurangkan pangkatnya. Aturan ini dinyatakan sebagai:
      $$\\frac{a^{m}}{a^{n}}=a^{m-n}$$

      <strong>Langkah 2:</strong> Gunakan Aturan Perkalian Bilangan Berpangkat dan kita terapkan aturan tersebut:
      $$\\frac{5^{6}}{5^{3}}=5^{6-3}$$
      Lalu kita kurangkan
      $$5^{6-3}=5^{3}$$
      Oleh karena itu, jawaban yang benar adalah pilihan D.
    </p>`,
  },
  {
    question:
      "Berapakah hasil $$(2^{3})^{4}$$",
    answer: [
      { Text: "$$2^{15}$$", correct: false },
      { Text: "$$2^{20}$$", correct: false },
      { Text: "$$2^{12}$$", correct: true },
      { Text: "$$2^{10}$$", correct: false },
    ],
    explain: `<p>
    <strong>Langkah 1:</strong> Ketika suatu bilangan sudah dipangkatkan lalu dipangkatkan lagi, kita dapat mengkalikan pangkatnya. Aturan ini dinyatakan sebagai:
    $$(a^{m})^{n}=a^{m\\times n}$$

    <strong>Langkah 2:</strong> Gunakan Aturan pangkat dari pangkat dan kita terapkan aturan tersebut:
    $$(2^{3})^{4}=2^{3\\times 4}$$
    Lalu kita kalikan
    $$2^{3\\times 4}=2^{12}$$
    Oleh karena itu, jawaban yang benar adalah pilihan C.
    </p>`,
  },
];

const questionNumber21 = document.getElementById("question-numb2-1");
const questionElement21 = document.getElementById("question2-1");
const answerButton21 = document.getElementById("answer2-1");
const explainDiv21 = document.getElementById("explain-div2-1");
const explainElement21 = document.getElementById("explain2-1");
const nextButton21 = document.getElementById("next-button2-1");

let currentQuestionQuizz21 = 0;
let explainQuizz21 = 0;
let score21 = 0;

function startQuiz21() {
  currentQuestionQuizz21 = 0;
  score21 = 0;
  showQuestion21();
}

function showQuestion21() {
  resetState21();
  let currentQuestionn21 = questions21[currentQuestionQuizz21];
  let questionNo = currentQuestionQuizz21 + 1;
  questionElement21.innerHTML = questionNo + ". " + currentQuestionn21.question;
  questionNumber21.innerHTML = `${questionNo}/${questions21.length}`;
  explainElement21.innerHTML = currentQuestionn21.explain;

  currentQuestionn21.answer.forEach((answer) => {
    const button21 = document.createElement("button");
    button21.innerHTML = answer.Text;
    button21.classList.add(
      "border-hitam",
      "w-full",
      "text-center",
      "p-3",
      "my-3",
      "rounded-md",
      "cursor-pointer",
      "disabled:cursor-no-drop"
    );
    answerButton21.appendChild(button21);
    if (answer.correct) {
      button21.dataset.correct = answer.correct;
    }
    button21.addEventListener("click", selectAnswer21);
  });
  renderMathInElement(questionElement21);
  renderMathInElement(explainElement21);
  renderMathInElement(answerButton21);
}

function resetState21() {
  explainDiv21.style.display = "none";
  nextButton21.style.display = "none";
  while (answerButton21.firstChild) {
    answerButton21.removeChild(answerButton21.firstChild);
  }
}

function selectAnswer21(e) {
  const selectedButton = e.target;
  const correct = selectedButton.dataset.correct === "true";
  if (correct) {
    selectedButton.classList.add("bg-color-2-50");
    score21++;
  } else {
    selectedButton.classList.add("bg-color-1-50");
  }
  Array.from(answerButton21.children).forEach((button) => {
    if (button.dataset.correct === "true") {
      button.classList.add("bg-color-2-50");
    }
    button.disabled = true;
  });
  nextButton21.style.display = "block";
  explainDiv21.style.display = "block";
}

function showscore21() {
  resetState21();
  questionElement21.innerHTML = `Skor mu ${score21} dari ${questions21.length}!`;
  nextButton21.innerHTML = "Ulangi Quiz";
  nextButton21.style.display = "block";
  questionNumber21.style.display = "none";
}

function handlenextButton21() {
  currentQuestionQuizz21++;
  if (currentQuestionQuizz21 < questions21.length) {
    showQuestion21();
  } else {
    showscore21();
  }
}

nextButton21.addEventListener("click", () => {
  if (currentQuestionQuizz21 < questions21.length) {
    handlenextButton21();
  } else {
    startQuiz21();
  }
});

startQuiz21();
