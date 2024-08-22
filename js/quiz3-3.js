const questions33 = [
  {
    question: "Misalkan $$\\log_{2}{x} = \\frac{1}{2}$$ dan $$\\log_{2}{y} = 3$$ Tentukan nilai dari $$\\log_{x}{y}$$",
    answer: [
      { Text: "6", correct: true },
      { Text: "8", correct: false },
      { Text: "5", correct: false },
      { Text: "2", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Kita akan menggunakan rumus
      $$\\log_{b}{m} = \\frac{\\log_{c}{m}}{\\log_{c}{b}}$$
      Dari rumus di atas kita dapat tahu bahwa 
      $$b = x, m = y, c = 2, b = x$$
      <strong>Langkah 2:</strong> Jadi, kita bisa menggunakan nilai yang diberikan untuk mencari nilai dari
      $$\\log_{x}{y}$$
      $$\\log_{x}{y} = \\frac{\\log_{2}{y}}{\\log_{2}{x}}$$
      $$\\log_{x}{y} = \\frac{3}{\\frac{1}{2}}$$
      <strong>Langkah 3:</strong> Kita bisa menyederhanakan persamaan ini dengan membagi 
      $$3 dengan \\frac{1}{2}$$
      $$\\log_{x}{y} = 3\\times2 = 6$$
      Jai, hasilya adalah $$6$$
      Oleh karena itu, jawaban yang benar adalah pilihan A.
    </p>`,
  },
  {
    question: "Jika, $$\\log_{a}{b}=2$$, maka tentukan nilai dari $$a^{\\log_{b}{c}}$$",
    answer: [
      { Text: "$$\\sqrt{x}$$", correct: false },
      { Text: "$$\\sqrt{c}$$", correct: true },
      { Text: "$$\\sqrt{b}$$", correct: false },
      { Text: "$$\\sqrt{a}$$", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Kita akan menggunakan sifat penghapusan logaritma yang menyatakan bahwa
      $$a^{\\log_{a}{x}}$$
      <strong>Langkah 2:</strong> Dari soal diketahui 
      $$\\log_{a}{b}=2$$ artinya $$a^{2}=b$$
      Karena $$a^{2}=b$$, maka kita perlu menemukan nilai dari
      $$a^{\\log_{b}{c}}$$
      yang dapat diekspresikan dalam bentuk 
      $$a^{\\log_{a}{x}}$$ 
      sehingga kita dapat menghapus logaritma.
      <strong>Langkah 3:</strong> Maka, bisa kita tuliskan seperti ini
      $$a^{\\log_{b}{c}}=a^{\\frac{\\log_{a}{c}}{\\log_{a}{b}}}$$
      $$\\left(a^{\\log_{a}{c}}\\right)^{\\frac{1}{2}}$$
      $$c^{\\frac{1}{2}}$$
      $$=\\sqrt{c$$
      Jadi, hasilnya adalah $$\\sqrt{c$$
      Oleh karena itu, jawaban yang benar adalah pilihan B.
    </p>`,
  },
  {
    question: "Jika $$\\log_{10}{x}= 3$$",
    answer: [
      { Text: "$$10\\sqrt{10}$$", correct: true },
      { Text: "$$10\\sqrt{14}$$", correct: false },
      { Text: "$$10\\sqrt{18}$$", correct: false },
      { Text: "$$10\\sqrt{20}$$", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Diberikan bahwa 
      $$\\log_{10}{x}= 3$$ artinya $$10^{3}=x$$
      <strong>Langkah 2:</strong> Karena $$x=10^{3}$$, maka kita tulis
      $$x^{\\frac{1}{2}}$$ sebagai $$\\left(10^{3}\\right)^{\\frac{1}{2}}$$
      <strong>Langkah 3:</strong> Dengan menggunakan sifat penghapusan logaritma
      $$a^{\\log_{a}{x}}=x$$
      kita bisa menghapus logaritma dan menyederhanakan persamaan ini:
      $$\\left(10^{3}\\right)^{\\frac{1}{2}} = 10^{\frac{3}{2}}$$
      $$10^{\\frac{3}{2}} = \\sqrt{10^{3}}$$
      $$10^{\\frac{3}{2}} = \\sqrt{1000}$$
      $$10^{\\frac{3}{2}} = 10\\sqrt{10}$$
      Jadi, hasilnya adalah $$10\\sqrt{10}$$ 
      Oleh karena itu, jawaban yang benar adalah pilihan A.
    </p>`,
  },
];

const questionNumber33 = document.getElementById("question-numb3-3");
const questionElement33 = document.getElementById("question3-3");
const answerButton33 = document.getElementById("answer3-3");
const explainDiv33 = document.getElementById("explain-div3-3");
const explainElement33 = document.getElementById("explain3-3");
const nextButton33 = document.getElementById("next-button3-3");

let currentQuestionQuizz33 = 0;
let explainQuizz33 = 0;
let score33 = 0;

function startQuiz33() {
  currentQuestionQuizz33 = 0;
  score33 = 0;
  showQuestion33();
}

function showQuestion33() {
  resetState33();
  let currentQuestionn33 = questions33[currentQuestionQuizz33];
  let questionNo = currentQuestionQuizz33 + 1;
  questionElement33.innerHTML = questionNo + ". " + currentQuestionn33.question;
  questionNumber33.innerHTML = `${questionNo}/${questions33.length}`;
  explainElement33.innerHTML = currentQuestionn33.explain;

  currentQuestionn33.answer.forEach((answer) => {
    const button33 = document.createElement("button");
    button33.innerHTML = answer.Text;
    button33.classList.add(
      "border-hitam",
      "w-full",
      "text-center",
      "p-3",
      "my-3",
      "rounded-md",
      "cursor-pointer",
      "disabled:cursor-no-drop"
    );
    answerButton33.appendChild(button33);
    if (answer.correct) {
      button33.dataset.correct = answer.correct;
    }
    button33.addEventListener("click", selectAnswer33);
  });
  renderMathInElement(questionElement33);
  renderMathInElement(explainElement33);
  renderMathInElement(answerButton33);
}

function resetState33() {
  explainDiv33.style.display = "none";
  nextButton33.style.display = "none";
  while (answerButton33.firstChild) {
    answerButton33.removeChild(answerButton33.firstChild);
  }
}

function selectAnswer33(e) {
  const selectedButton = e.target;
  const correct = selectedButton.dataset.correct === "true";
  if (correct) {
    selectedButton.classList.add("bg-color-2-50");
    score33++;
  } else {
    selectedButton.classList.add("bg-color-1-50");
  }
  Array.from(answerButton33.children).forEach((button) => {
    if (button.dataset.correct === "true") {
      button.classList.add("bg-color-2-50");
    }
    button.disabled = true;
  });
  nextButton33.style.display = "block";
  explainDiv33.style.display = "block";
}

function showscore33() {
  resetState33();
  questionElement33.innerHTML = `Skor mu ${score33} dari ${questions33.length}!`;
  nextButton33.innerHTML = "Ulangi Quiz";
  nextButton33.style.display = "block";
  questionNumber33.style.display = "none";
}

function handlenextButton33() {
  currentQuestionQuizz33++;
  if (currentQuestionQuizz33 < questions33.length) {
    showQuestion33();
  } else {
    showscore33();
  }
}

nextButton33.addEventListener("click", () => {
  if (currentQuestionQuizz33 < questions33.length) {
    handlenextButton33();
  } else {
    startQuiz33();
  }
});

startQuiz33();
