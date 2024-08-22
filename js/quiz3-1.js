const questions31 = [
  {
    question: "Bentuk sederhana dari $$\\log_{2}{(8\\times16)}$$",
    answer: [
      { Text: "9", correct: false },
      { Text: "10", correct: false },
      { Text: "7", correct: true },
      { Text: "6", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Jadi, untuk mengekspresikan soal ini dalam bentuk yang lebih sederhana, kita dapat membagi perkalian tersebut menjadi dua logaritma:
      $$\\log_{2}{(8\\times16)}=\\log_{2}{8}+\\log_{2}{16}$$

      <strong>Langkah 2:</strong> Sekarang, kita perlu menentukan nilai dari kedua log tersebut
      $$\\log_{2}{8}+\\log_{2}{16}=3+4$$

      <strong>Langkah 3:</strong> Kita tambahkan hasil log tersebut dan mendapatkan hasil
      $$3+4=7$$

      Oleh karena itu, jawaban yang benar adalah pilihan C.
    </p>`,
  },
  {
    question: "Apa bentuk sederhana dari $$\\log_{5}{\\frac{125}{25}}$$",
    answer: [
      { Text: "1", correct: true },
      { Text: "3", correct: false },
      { Text: "5", correct: false },
      { Text: "2", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Untuk menyederhanakannya, kita dapat membagi pembagian tersebut menjadi dua logaritma:
      $$\\log_{5}{\\frac{125}{25}}=\\log_{5}{125}-\\log_{5}{25}$$$$
      <strong>Langkah 2:</strong> Kita ubah bentuk log menjadi hasil desimal
      $$\\log_{5}{125}-\\log_{5}{25}=3-2$$
      <strong>Langkah 3:</strong> Kita kurangkan hasil tersebut dan mendapatkan hasil
      $$3-2=1$$
      Oleh karena itu, jawaban yang benar adalah pilihan A.
    </p>`,
  },
  {
    question: "Ketika menerapkan sifat pangkat, berapa hasil dari $$\\log_{3}{9^{2}}$$",
    answer: [
      { Text: "5", correct: false },
      { Text: "3", correct: false },
      { Text: "6", correct: false },
      { Text: "4", correct: true },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Pertama, kita dapat mengalikan pangkat dengan logaritma:
      $$\\log_{3}{9^{2}}=2\\times\\log_{3}{9}$$
      <strong>Langkah 2:</strong> Kita ubah bentuk log 
      $$2\\times\\log_{3}{9}=2\\times2
      <strong>Langkah 3:</strong> Kita kali hasil tersebut dan mendapatkan hasil
      $$2\\times2=4$$
      Oleh karena itu, jawaban yang benar adalah pilihan D.
    </p>`,
  },
];

const questionNumber31 = document.getElementById("question-numb3-1");
const questionElement31 = document.getElementById("question3-1");
const answerButton31 = document.getElementById("answer3-1");
const explainDiv31 = document.getElementById("explain-div3-1");
const explainElement31 = document.getElementById("explain3-1");
const nextButton31 = document.getElementById("next-button3-1");

let currentQuestionQuizz31 = 0;
let explainQuizz31 = 0;
let score31 = 0;

function startQuiz31() {
  currentQuestionQuizz31 = 0;
  score31 = 0;
  showQuestion31();
}

function showQuestion31() {
  resetState31();
  let currentQuestionn31 = questions31[currentQuestionQuizz31];
  let questionNo = currentQuestionQuizz31 + 1;
  questionElement31.innerHTML = questionNo + ". " + currentQuestionn31.question;
  questionNumber31.innerHTML = `${questionNo}/${questions31.length}`;
  explainElement31.innerHTML = currentQuestionn31.explain;

  currentQuestionn31.answer.forEach((answer) => {
    const button31 = document.createElement("button");
    button31.innerHTML = answer.Text;
    button31.classList.add(
      "border-hitam",
      "w-full",
      "text-center",
      "p-3",
      "my-3",
      "rounded-md",
      "cursor-pointer",
      "disabled:cursor-no-drop"
    );
    answerButton31.appendChild(button31);
    if (answer.correct) {
      button31.dataset.correct = answer.correct;
    }
    button31.addEventListener("click", selectAnswer31);
  });
  renderMathInElement(questionElement31);
  renderMathInElement(explainElement31);
  renderMathInElement(answerButton31);
}

function resetState31() {
  explainDiv31.style.display = "none";
  nextButton31.style.display = "none";
  while (answerButton31.firstChild) {
    answerButton31.removeChild(answerButton31.firstChild);
  }
}

function selectAnswer31(e) {
  const selectedButton = e.target;
  const correct = selectedButton.dataset.correct === "true";
  if (correct) {
    selectedButton.classList.add("bg-color-2-50");
    score31++;
  } else {
    selectedButton.classList.add("bg-color-1-50");
  }
  Array.from(answerButton31.children).forEach((button) => {
    if (button.dataset.correct === "true") {
      button.classList.add("bg-color-2-50");
    }
    button.disabled = true;
  });
  nextButton31.style.display = "block";
  explainDiv31.style.display = "block";
}

function showscore31() {
  resetState31();
  questionElement31.innerHTML = `Skor mu ${score31} dari ${questions31.length}!`;
  nextButton31.innerHTML = "Ulangi Quiz";
  nextButton31.style.display = "block";
  questionNumber31.style.display = "none";
}

function handlenextButton31() {
  currentQuestionQuizz31++;
  if (currentQuestionQuizz31 < questions31.length) {
    showQuestion31();
  } else {
    showscore31();
  }
}

nextButton31.addEventListener("click", () => {
  if (currentQuestionQuizz31 < questions31.length) {
    handlenextButton31();
  } else {
    startQuiz31();
  }
});

startQuiz31();
