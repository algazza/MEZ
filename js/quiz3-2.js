const questions32 = [
  {
    question: "Berapa nilai dari $$\\log_{a}{1}$$ dimana a adalah basis logaritma?",
    answer: [
      { Text: "3", correct: false },
      { Text: "0", correct: true },
      { Text: "2", correct: false },
      { Text: "1", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Diketahui 
      $$a^{0} = 1$$
      untuk setiap a yang bukan nol.
      Maka, $$\\log_{a}{1} = 0$$
      Jadi, hasilnya adalah $$0$$
      Oleh karena itu, jawaban yang benar adalah pilihan B.
    </p>`,
  },
  {
    question: "Jika $$\\log_{2}{x}=4$$, maka berapa nilai dari x?",
    answer: [
      { Text: "8", correct: false },
      { Text: "10", correct: false },
      { Text: "14", correct: false },
      { Text: "16", correct: true },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Kita menggunakan sifat basis logaritma, yaitu bahwa jika
      $$\\log_{b}{x}=y$$
      Maka hasilnya akan menjadi
      $$b^{y}=x$$
      <strong>Langkah 2:</strong> Dalam persoalan ini, kita tahu bahwa
      $$2^{4}=x$$
      $$x=2^{4}=16$$
      Jadi, hasilnya adalah $$16$$
      Oleh karena itu, jawaban yang benar adalah pilihan D.
    </p>`,
  },
  {
    question: "Berapakah nilai x, jika $$\\log_{10}{3}=y$$",
    answer: [
      { Text: "$$10^{2}$$", correct: false },
      { Text: "$$10^{3}$$", correct: true },
      { Text: "$$12^{5}$$", correct: false },
      { Text: "$$14^{1}$$", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Kita menggunakan sifat invers dari logaritma, yaitu bahwa jika
      $$\\log_{b}{x}=y$$
      Maka, hasilnya akan menjadi
      $$b^{y}=x$$
      <strong>Langkah 2:</strong> Dalam persoalan ini, kita tahu bahwa
      $$\\log_{10}{x}=3$$
      $$10^{3}=x$$
      Jadi, hasilnya adalah $$10^{3}$$
      Oleh karena itu, jawaban yang benar adalah pilihan B.
    </p>`,
  },
];

const questionNumber32 = document.getElementById("question-numb3-2");
const questionElement32 = document.getElementById("question3-2");
const answerButton32 = document.getElementById("answer3-2");
const explainDiv32 = document.getElementById("explain-div3-2");
const explainElement32 = document.getElementById("explain3-2");
const nextButton32 = document.getElementById("next-button3-2");

let currentQuestionQuizz32 = 0;
let explainQuizz32 = 0;
let score32 = 0;

function startQuiz32() {
  currentQuestionQuizz32 = 0;
  score32 = 0;
  showQuestion32();
}

function showQuestion32() {
  resetState32();
  let currentQuestionn32 = questions32[currentQuestionQuizz32];
  let questionNo = currentQuestionQuizz32 + 1;
  questionElement32.innerHTML = questionNo + ". " + currentQuestionn32.question;
  questionNumber32.innerHTML = `${questionNo}/${questions32.length}`;
  explainElement32.innerHTML = currentQuestionn32.explain;

  currentQuestionn32.answer.forEach((answer) => {
    const button32 = document.createElement("button");
    button32.innerHTML = answer.Text;
    button32.classList.add(
      "border-hitam",
      "w-full",
      "text-center",
      "p-3",
      "my-3",
      "rounded-md",
      "cursor-pointer",
      "disabled:cursor-no-drop"
    );
    answerButton32.appendChild(button32);
    if (answer.correct) {
      button32.dataset.correct = answer.correct;
    }
    button32.addEventListener("click", selectAnswer32);
  });
  renderMathInElement(questionElement32);
  renderMathInElement(explainElement32);
  renderMathInElement(answerButton32);
}

function resetState32() {
  explainDiv32.style.display = "none";
  nextButton32.style.display = "none";
  while (answerButton32.firstChild) {
    answerButton32.removeChild(answerButton32.firstChild);
  }
}

function selectAnswer32(e) {
  const selectedButton = e.target;
  const correct = selectedButton.dataset.correct === "true";
  if (correct) {
    selectedButton.classList.add("bg-color-2-50");
    score32++;
  } else {
    selectedButton.classList.add("bg-color-1-50");
  }
  Array.from(answerButton32.children).forEach((button) => {
    if (button.dataset.correct === "true") {
      button.classList.add("bg-color-2-50");
    }
    button.disabled = true;
  });
  nextButton32.style.display = "block";
  explainDiv32.style.display = "block";
}

function showscore32() {
  resetState32();
  questionElement32.innerHTML = `Skor mu ${score32} dari ${questions32.length}!`;
  nextButton32.innerHTML = "Ulangi Quiz";
  nextButton32.style.display = "block";
  questionNumber32.style.display = "none";
}

function handlenextButton32() {
  currentQuestionQuizz32++;
  if (currentQuestionQuizz32 < questions32.length) {
    showQuestion32();
  } else {
    showscore32();
  }
}

nextButton32.addEventListener("click", () => {
  if (currentQuestionQuizz32 < questions32.length) {
    handlenextButton32();
  } else {
    startQuiz32();
  }
});

startQuiz32();
