const questions23 = [
  {
    question: "Tentukan hasil dari $$8^{5} \\times8^{6}$$",
    answer: [
      { Text: "8^{14}", correct: false },
      { Text: "8^{12}", correct: false },
      { Text: "8^{20}", correct: false },
      { Text: "8^{11}", correct: true },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Gunakanlah rumus 
      $$a^{m}\\times a^{n} = a^{m\\times n}$$
      untuk menyelesaikan soal ini.
      <strong>Langkah 2:</strong> Masukkan soal ke dalam rumus yang ada di atas
      $$8^{5} \\times8^{6} = 8^{5 + 6} = 8^{11}$$
      Jadi, hasilnya adalah
      $$8^{11}$$
      Oleh karena itu, jawaban yang benar adalah pilihan D.
    </p>`,
  },
  {
    question: "Berapakah $$\\left(5^{2}\\right)^{6}$$",
    answer: [
      { Text: "$$5^{12}$$", correct: false },
      { Text: "$$5^{11}$$", correct: false },
      { Text: "$$5^{20}$$", correct: false },
      { Text: "$$5^{14}$$", correct: true },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Kita dapat menghitung nya dengan menerapkan rumus berikut
      $$\\left(a^{m}\\right)^{n} = a^{m\\times n}$$
      <strong>Langkah 2:</strong> Selanjutnya, kita masukkan soal ke rumus untuk menyelesaikan permasalahan
      $$\\left(a^{2}\\right)^{7} = a^{2\\times 7} = 5^{14}$$
      Jadi, hasilnya adalah
      $$5^{14}$$
      Oleh karena itu, jawaban yang benar adalah pilihan D.
    </p>`,
  },
  {
    question: "Berapa hasil dari $$\\left(\\frac{6}{8}\\right)^{2}$$",
    answer: [
      { Text: "9", correct: true },
      { Text: "2", correct: false },
      { Text: "3", correct: false },
      { Text: "7", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Hasil dari
      $$\\left(\\frac{6}{8}\\right)^{2}$$
      Dapat kita selesaikan dengan rumus berikut
      $$\\left(\\frac{a}{b}\\right)^{n} = \\frac{a^{n}}{b^{n}}$$ 
      <strong>Langkah 2:</strong> Lalu kita terapkan soal ke rumus yang ada
      $$\\left(\\frac{12}{4}\\right)^{2} = \\frac{12^{2}}{4^{2}}$$
      $$\\frac{144}{16} = 9$$
      Jadi, hasilnya adalah
      $$9$$
      Oleh karena itu, jawaban yang benar adalah pilihan A.
    </p>`,
  },
  {
    question: "Seorang petani memiliki lahan yang luasnya $$5\\times10^{4}$$ meter persegi. Kemudian, ia memutuskan untuk memperluas lahan tersebut menjadi $$2\\times10^{3}$$ kali lebih besar. Berapa luas total lahan petani setelah diperluas?",
    answer: [
      { Text: "$$10^{8}$$ meter persegi", correct: true },
      { Text: "$$10^{4}$$ meter persegi", correct: false },
      { Text: "$$10^{9}$$ meter persegi", correct: false },
      { Text: "$$10^{6}$$ meter persegi", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Nah, kita diberikan dua nilai luas lahan dalam bentuk eksponen, yaitu 
      $$5\\times 10^{4} dan 2\\times 10^{3}$$
      Kita dapat menggunakan sifat perkalian eksponen untuk menemukan luas total setelah diperluas.
      <strong>Langkah 2:</strong> Jadi, untuk menemukan luas total setelah diperluas, kita kali
      $$5\\times 10^{4}$$ dengan $$2\\times 10^{3}$$
      $$\\left(5 \\times 10^{4}\\right) \\times \\left(2 \\times 10^{3}\\right) = \\left(5\\times2\\right) \\times \\left(10^{4}\\times 10^{3}\\right)$$
      $$10 \\times 10^{7} = 10^{8}$$
      Jadi, hasilnya adalah
      $$ 10^{8}$$
      Oleh karena itu, jawaban yang benar adalah pilihan A.
    </p>`,
  },
  {
    question: "Di dalam laboratorium kimia, seorang peneliti sedang mengukur pH larutan asam yang sangat kuat. pH larutan tersebut sangat rendah, hanya sebesar $$10^{-3}$$. Kemudian, peneliti menambahkan larutan basa ke dalam larutan asam tersebut. Setelah penambahan, pH larutan meningkat menjadi $$10^{-1}$$. Berapa kali lipat perubahan pH larutan yang diamati oleh peneliti setelah penambahan larutan basa?",
    answer: [
      { Text: "75x lipat", correct: false },
      { Text: "90x lipat", correct: false },
      { Text: "100x lipat", correct: true },
      { Text: "50x lipat", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Kita dapat menggunakan sifat eksponen negatif untuk menemukan perbandingan antara keduanya.
      $$10^{-3} = \\frac{1}{10^{3}}$$
      $$10^{-1} = \\frac{1}{10^{1}}$$
      <strong>Langkah 2:</strong> Jadi, untuk menemukan berapa kali lipat perubahan pH larutan setelah penambahan larutan basa, kita membagi 
      $$10^{-1} dengan 10^{-3}$$
      $$\\frac{10^{-1}}{10^{-3}} = 10^{\\left(-1-\\left(-3\\right)\\right)}$$
      $$10^{2} = 100$$
      Jadi, hasilnya adalah 100
      Oleh karena itu, jawaban yang benar adalah pilihan C.
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
