const questions11 = [
  {
    question: "Penyelesaian dari $$12x = 48$$",
    answer: [
      { Text: "7", correct: false },
      { Text: "6", correct: false },
      { Text: "4", correct: true },
      { Text: "5", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Isolasi variabel x.
      Kita ingin membagi kedua sisi persamaan ini dengan 12 agar kita dapat menemukan nilai x.Lakukan pembagian sebagai berikut:
      
      $$\\frac{12x}{12}=\\frac{48}{12}$$
      
      Setelah disederhanakan, persamaan menjadi:
      x = 4
      
      Oleh karena itu, jawaban yang benar adalah pilihan D.
    </p>`,
  },
  {
    question: "Penyelesaian dari persamaan $$x+3=11-x$$",
    answer: [
      { Text: "7", correct: false },
      { Text: "6", correct: false },
      { Text: "4", correct: true },
      { Text: "5", correct: false },
    ],
    explain: `<p> 
      <strong>Langkah 1:</strong> Eliminasi x di sebelah kanan persamaan.
      Kita ingin mengumpulkan semua istilah yang mengandung x di satu sisi persamaan. Untuk itu, kita harus memindahkan istilah (-x) dari sebelah kanan ke sebelah kiri dengan cara menambahkan x ke kedua sisi persamaan.
      $$x + x + 3 = 11 - x + x$$
      
      Setelah disederhanakan, persamaan menjadi:
      $$2x + 3 = 11$$ 
      
      <strong>Langkah 2:</strong> Selanjutnya isolasi variabel x. 
      Pertama-tama, kita akan memindahkan 3 ke sisi kanan dengan melakukan pengurangan.
      $$2x + 3 - 3 = 11 - 3$$ 
      
      Setelah disederhanakan, persamaan menjadi:
      $$2x = 8$$
      
      <strong>Langkah 3:</strong> Terakhir, kita akan membagi kedua sisi persamaan dengan 2 untuk mendapatkan nilai x. 
      $$\\frac{2x}{2}=\\frac{8}{2}$$
      
      Setelah disederhanakan, persamaan menjadi:
      $$x = 4$$
      
      Oleh karena itu, jawaban yang benar adalah pilihan C.
    </p>`,
  },
  {
    question:
      "Diketahui dua buah bilangan cacah genap berurutan dengan persamaan $$n +(n+2) = 30$$ tentukan bilangan pertama dan kedua!",
    answer: [
      { Text: " Bilangan pertama 14, bilangan kedua 16", correct: true },
      { Text: "Bilangan pertama 10, bilangan kedua 12", correct: false },
      { Text: "Bilangan pertama 12, bilangan kedua 14", correct: false },
      { Text: "Bilangan pertama 16, bilangan kedua 10", correct: false },
    ],
    explain: `<p>
      <strong>Langkah 1:</strong> Kita akan mencari nilai n terlebih dahulu dengan cara mengeluarkan kurung persamaan tersebut
      $$n + n + 2 = 30$$ 
      Lalu sederhanakan menjadi:
      $$2n + 2 = 30$$ 
      
      <strong>Langkah 2:</strong> Kurangi 2 dari kedua sisi persamaan.
      $$2n + 2 - 2 = 30 - 2$$
      Maka akan mendapatkan hasil:
      $$2n = 28$$
      
      <strong>Langkah 3:</strong> Bagi kedua sisi persamaan dengan 2.
      $$\\frac{2n}{2}=\\frac{8}{2}$$

      Maka akan mendapatkan nilai n
      $$n = 14$$
      
      <strong>Langkah 4:</strong> Sekarang, substitusi n = 14 ke dalam n + 2 untuk menemukan bilangan kedua:
      $$n + (n+2) = (14)+((14) + 2)$$
      
      Jadi, bilangan pertama adalah 
      $$n = 14$$ 
      
      dan bilangan kedua adalah 
      $$(!4) + 2 = 16.$$

      Oleh karena itu, jawaban yang benar adalah pilihan A.
    </p>`,
  },
];

const questionNumber = document.getElementById("question-numb1-1");
const questionElement = document.getElementById("question1-1");
const answerButton = document.getElementById("answer1-1");
const explainDiv = document.getElementById("explain-div1-1");
const explainElement = document.getElementById("explain1-1");
const nextButton = document.getElementById("next-button1-1");

let currentQuestionQuizz = 0;
let explainQuizz = 0;
let score = 0;

function startQuiz() {
  currentQuestionQuizz = 0;
  score = 0;
  showQuestion();
}

function showQuestion() {
  resetState();
  let currentQuestion = questions11[currentQuestionQuizz];
  let questionNo = currentQuestionQuizz + 1;
  questionElement.innerHTML = questionNo + ". " + currentQuestion.question;
  questionNumber.innerHTML = `${questionNo}/${questions11.length}`;
  explainElement.innerHTML = currentQuestion.explain;

  currentQuestion.answer.forEach((answer) => {
    const button = document.createElement("button");
    button.innerHTML = answer.Text;
    button.classList.add(
      "border-hitam",
      "w-full",
      "text-center",
      "p-3",
      "my-3",
      "rounded-md",
      "cursor-pointer",
      "disabled:cursor-no-drop"
    );
    answerButton.appendChild(button);
    if (answer.correct) {
      button.dataset.correct = answer.correct;
    }
    button.addEventListener("click", selectAnswer);
  });
  renderMathInElement(document.getElementById("question1-1"));
  renderMathInElement(document.getElementById("explain1-1"));
}

function resetState() {
  explainDiv.style.display = "none";
  nextButton.style.display = "none";
  while (answerButton.firstChild) {
    answerButton.removeChild(answerButton.firstChild);
  }
}

function selectAnswer(e) {
  const selectedButton = e.target;
  const correct = selectedButton.dataset.correct === "true";
  if (correct) {
    selectedButton.classList.add("bg-color-2-50");
    score++;
  } else {
    selectedButton.classList.add("bg-color-1-50");
  }
  Array.from(answerButton.children).forEach((button) => {
    if (button.dataset.correct === "true") {
      button.classList.add("bg-color-2-50");
    }
    button.disabled = true;
  });
  nextButton.style.display = "block";
  explainDiv.style.display = "block";
}

function showScore() {
  resetState();
  questionElement.innerHTML = `Skor mu ${score} dari ${questions11.length}!`;
  nextButton.innerHTML = "Ulangi Quiz";
  nextButton.style.display = "block";
  questionNumber.style.display = "none";
}

function handleNextButton() {
  currentQuestionQuizz++;
  if (currentQuestionQuizz < questions11.length) {
    showQuestion();
  } else {
    showScore();
  }
}

nextButton.addEventListener("click", () => {
  if (currentQuestionQuizz < questions11.length) {
    handleNextButton();
  } else {
    startQuiz();
  }
});

startQuiz();
